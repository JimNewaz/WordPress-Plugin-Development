<?php

add_shortcode('ring_design', 'show_ring_design_form');

add_action('rest_api_init', 'create_rest_endpoint');

add_action('wp_enqueue_scripts', 'enqueue_scripts');

add_action('init', 'create_submissions_page');

add_action('add_meta_boxes', 'create_meta_box');

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

function enqueue_scripts() {
    wp_enqueue_style('ring-design-plugin', MY_PLUGIN_URL . 'assets/css/ring-design-plugin.css');

    // Enqueue jQuery
    wp_enqueue_script('jquery'); 

    // Enqueue Bootstrap CSS
    wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css', array(), '5.3.0', 'all');
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,500;1,600&display=swap');
    
    // Enqueue Bootstrap JavaScript
    wp_enqueue_script('bootstrap-bundle', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js', array(), '5.0.2', true);
    wp_enqueue_script('ring-design-plugin', MY_PLUGIN_URL . 'assets/js/script.js', array('jquery'), null, true);
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

    // Personal Information
    $field_fname = sanitize_text_field($params['first_name']);
    $field_lname = sanitize_text_field($params['last_name']);
    $field_email = sanitize_email($params['email']);
    $filed_phone = sanitize_email($params['phone']);
    $field_address = sanitize_textarea_field($params['address']);

    // Ring Stone 
    $filed_stone = $params['ring_stone'];

    // Ring Shape 
    $filed_shape = $params['ring_shape']; 

    // Ring Style 
    $filed_style = $params['ring_style'];

    // Ring Color
    $filed_color = $params['ring_colors'];

    // Currency and Budget
    $filed_currency = $params['currency'];
    $filed_budget = $params['budget'];

    // Consultant 
    $filed_consultant = $params['consultant'];

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


    $response = new WP_REST_Response('
                                <div class="mt-5">
                                    <div id="form-success" class="text-center">
                                        <div class="page-wrapper">
                                            <div class="circle-wrapper">
                                                <div class="success circle"></div>
                                                <div class="icon">
                                                <i class="fa fa-check"></i>
                                                </div>                                                
                                            </div>
                                        </div>
                                        <br>
                                        <h3 class = "text-center">Thank You! <br> We will contact you soon</h3>
                                    </div>
                                </div>
                            ', 200);

    return $response;
}
