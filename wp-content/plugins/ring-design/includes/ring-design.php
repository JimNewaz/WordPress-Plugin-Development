<?php

add_shortcode('ring_design', 'show_ring_design_form');

add_action('rest_api_init', 'create_rest_endpoint');

add_action('wp_enqueue_scripts', 'enqueue_scripts');

add_action('init', 'create_submissions_page');

add_action('add_meta_boxes', 'create_meta_box');


// add_filter('manage_submission_posts_columns', 'custom_submissions_columns');

// add_action('manage_submission_posts_custom_columns', 'fill_submission_columns', 12, 2);

// function fill_submission_columns($columns, $post_id){
//     switch($columns)
//     {
//         case 'fname':
//             echo get_post_meta($post_id, 'fname', true);
//         break;

//         case 'lname':
//             echo get_post_meta($post_id, 'lname', true);
//         break;

//         case 'email':
//             echo get_post_meta($post_id, 'email', true);
//         break;

//         case 'phone':
//             echo get_post_meta($post_id, 'phone', true);
//         break;
//     }   
// }

// function custom_submissions_columns($columns){
//     $columns = array(
//         'cb' => $columns['cb'],
//         'fname' => __('First Name','ringdesign-plugin' ), 
//         'lname' => __('Last Name','ringdesign-plugin' ), 
//         'email' => __('Email', 'ringdesign-plugin'),
//         'phone' =>  __('Phone', 'ringdesign-plugin'),
//     );
//     return $columns;
// }

function create_meta_box()
{
    add_meta_box('custom_ring_design_form', 'Submissions', 'display_submissions', 'submission');
}

function display_submissions()
{
    $post_metas = get_post_meta(get_the_ID());

    unset($post_metas['_edit_lock']);
    echo '<ul>';

    foreach ($post_metas as $key => $value) {
        echo '<li> <strong>' . ucfirst($key) . '</strong>: <br>' . esc_html($value[0]) . '</li>';
    }

    echo '</ul>';
}


function show_ring_design_form()
{
    ob_start();
    include_once MY_PLUGIN_PATH . '/includes/templates/ring-design.php';
    return ob_get_clean();
}

function create_rest_endpoint()
{
    register_rest_route('v1/ring-design', 'submit', array(
        'methods' => 'POST',
        'callback' => 'handle_enquiry',
    ));
}

function enqueue_scripts()
{
    wp_enqueue_style('ring-design-plugin', MY_PLUGIN_URL . 'assets/css/ring-design-plugin.css');
    wp_enqueue_script('jquery');
}

function create_submissions_page()
{
    $args = [
        'public' => true,
        'has_archive' => true,
        'labels' => [
            'name' => 'Ring Submissions',
            'singular_name' => 'Ring Submission',
            'edit_item' => 'View Submission'
        ],
        'publicly_queryable' => false,
        // 'supports' => ['custom-fields']
        'supports' => false,
        'capability_type' => 'post',
        'capabilities' => array(
            'create_posts' => false,
        ),
        'map_meta_cap' => true,

    ];

    register_post_type('submission', $args);
}



function handle_enquiry($data)
{
    $params = $data->get_params();

    $field_fname = sanitize_text_field($params['fname']);
    $field_lname = sanitize_text_field($params['lname']);
    $field_email = sanitize_email($params['email']);
    $field_phone = sanitize_text_field($params['phone']);

    if (!wp_verify_nonce($params['_wpnonce'], 'wp_rest')) {
        return new WP_REST_Response('Sorry! Message Not Sent', 422);
    }

    unset($params['_wpnonce']);
    unset($params['_wp_http_referer']);

    $headers = [];
    $admin_email = get_bloginfo('admin_email');
    $admin_name = get_bloginfo('name');

    $reciepient_email = get_plugin_options('ring_design_recipient_email');

    if (!$reciepient_email) {
        $reciepient_email = $admin_email;
    }

    $headers[] = "From: " . $admin_email . $admin_name;
    $headers[] = "Reply-to: " . $field_fname . $field_email;
    $headers[] = "Content-Type: text/html";

    $message = '';
    $message = "<h1> Message has been sent from:" . $field_fname . "</h1>";

    $subject = 'New enquiery from:' . $field_fname;

    $postarr = [
        'post_title' => $field_fname,
        'post_type'  => 'submission',
        'post_status' => 'publish'
    ];

    $post_id = wp_insert_post($postarr);

    foreach ($params as $label => $value) {


        switch ($label) {
            case 'email':
                $value = sanitize_email($value);
                break;

            default:
                $value = sanitize_text_field($value);
        }

        add_post_meta($post_id, $label, sanitize_text_field($value));
        $message = '<strong>' . sanitize_text_field(ucfirst($label)) . '</strong: ' . $value . '<br>';
    }

    wp_mail($reciepient_email, $subject, $message, $headers);

    return new WP_REST_Response('Great! Message Sent Successfully', 200);
}
