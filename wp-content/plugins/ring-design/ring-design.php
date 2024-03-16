<?php 
/*
**
    Plugin Name: Custom Ring Design 
    Description: This is a plugin where you can customize your ring. 
    Version: 1.0.0 
    Text Domain: options-plugin
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

            require_once(MY_PLUGIN_PATH. '/vendor/autoload.php');
        }
    }
new CustomRingDesign;
}