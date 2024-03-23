<?php 
/*
**
    Plugin Name: Custom Ring Design 
    Description: This is a plugin where you can customize your ring. 
    Version: 1.0.0 
    Text Domain: ringdesign-plugin
    Author: Sayed Nur E Newaz
    Domain Path: /languages
**
*/

if(!defined('ABSPATH')){
    die('You cannot be here');
}

if(!class_exists('CustomRingDesign')){
    class CustomRingDesign{
        public function __construct()
        {
            define('MY_PLUGIN_PATH', plugin_dir_path( __FILE__ )); 
            define('MY_PLUGIN_URL', plugin_dir_url( __FILE__ ));

            require_once(MY_PLUGIN_PATH. '/vendor/autoload.php');
        }

        public function initialize(){
            include_once MY_PLUGIN_PATH . 'includes/utilities.php';
            include_once MY_PLUGIN_PATH . 'includes/options-page.php';
            include_once MY_PLUGIN_PATH . 'includes/ring-design.php';
        }
        
    }
    
    $customRingDesign = new CustomRingDesign;
    $customRingDesign->initialize();  

    
    
}

