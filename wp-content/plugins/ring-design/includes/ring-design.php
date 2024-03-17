<?php 

add_shortcode('ring_design', 'show_ring_design_form'); 

function show_ring_design_form(){
    include_once MY_PLUGIN_PATH . '/includes/templates/ring-design.php';
}