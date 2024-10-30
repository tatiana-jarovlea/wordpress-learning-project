<?php
/**
 * Plugin Name: Custom Message Shortcode
 * Description: A simple plugin that adds a shortcode to display a custom message.
 * Version: 1.0
 * Author: Your Name
 */

// Function to display the custom message
function display_custom_message() {
    return 'I like Wordpress';
}

// Register the shortcode
add_shortcode('custom_message', 'display_custom_message');