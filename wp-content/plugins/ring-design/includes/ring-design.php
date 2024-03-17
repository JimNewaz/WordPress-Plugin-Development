<?php

add_shortcode('ring_design', 'show_ring_design_form');

add_action('rest_api_init', 'create_rest_endpoint');

function show_ring_design_form()
{
    include_once MY_PLUGIN_PATH . '/includes/templates/ring-design.php';
}

function create_rest_endpoint()
{
    register_rest_route('v1/ring-design/', 'submit', array(
        'method' => 'POST',
        'callback' => 'handle_enquiry',
    ));
}

function handle_enquiry()
{
    echo 'Hello';
}
