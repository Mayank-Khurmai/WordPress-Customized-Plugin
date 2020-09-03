<?php

/*
    Plugin Name: Element Inspector
    Plugin URI: www.mayankkhurmai.in
    Description: Simple HTML & CSS Inspect
    Version: 1.0.0
    Author: Mayank Khurmai
    Author URI: www.mayankkhurmai.in
    Text Domain: html-css-inspector
*/

function link_page()
{
    wp_enqueue_script("js",plugins_url()."/html-css-inspector/app.js");
}

function add_menu()
{
    add_menu_page("Element Inspector", "Element Inspector", "manage_options","element-inspector", "plugin_page", "dashicons-html",100);
}

add_action("wp_enqueue_scripts","link_page");

function plugin_page()
{
    include("plugin_home.php");
}

add_action("admin_menu", "add_menu");



?>