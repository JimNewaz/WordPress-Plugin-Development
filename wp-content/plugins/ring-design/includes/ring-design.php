<?php

add_shortcode('ring_design', 'show_ring_design_form');

add_action('rest_api_init', 'create_rest_endpoint');

add_action('wp_enqueue_scripts', 'enqueue_scripts');

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
    wp_enqueue_script('jquery');
}

function handle_enquiry($data)
{
    $params = $data->get_params();
    
    if( !wp_verify_nonce($params['_wpnonce'], 'wp_rest' )){
        return new WP_REST_Response('Sorry! Message Not Sent', 422);
    }

    unset($params['_wpnonce']);
    unset($params['_wp_http_referer']);

    $headers = []; 
    $admin_email = get_bloginfo('admin_email');
    $admin_name = get_bloginfo('name');

    $headers[] = "From: " . $admin_email . $admin_name;
    $headers[] = "Reply-to: " . $params['name'] . $params['email'];
    $headers[] = "Content-Type: text/html";

    $message = '';
    $message = "<h1> Message has been sent from:" . $params['name'] . "</h1>";

    $subject = 'New enquiery from:'. $params['name'];

    foreach($params as $label => $value){
        $message = '<strong>' . ucfirst($label) . '</strong: ' . $value . '<br>';        
    }

    wp_mail($admin_email, $subject, $message, $headers);

    return new WP_REST_Response('Great! Message Sent Successfully', 200);
}

