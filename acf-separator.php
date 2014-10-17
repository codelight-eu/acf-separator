<?php
/*
Plugin Name: Advanced Custom Fields: Separator
Plugin URI: http://codelight.eu
Description: Adds a simple separator field for Advanced Custom Fields
Version: 1.0.0
Author: Codelight
Author URI: http://codelight.eu
*/

function include_field_types_separator( $version ) {
    include_once('acf-separator-v5.php');
}
add_action('acf/include_field_types', 'include_field_types_separator'); 

function register_fields_separator() {
    include_once('acf-separator-v4.php');
}
add_action('acf/register_fields', 'register_fields_separator'); 
