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
    wp_enqueue_script("js","./html-css-inspector/app.js");
}

add_action("wp_enqueue_scripts","link_page");

?>