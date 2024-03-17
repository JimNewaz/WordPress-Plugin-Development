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

function handle_enquiry()
{
    echo 'Hello';
}

