<?php
/**
 * Prevent Data Leaks
 */
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

/**
 * Enqueue Scripts and Styles
 */
function wc_whatsapp_enqueue()
{
    if (is_user_logged_in()) {
        wp_enqueue_style('style-for-wc-whatsapp', plugins_url() . '/wc-whatsapp/assets/style.css', array(), time(), 'all');
    }
}
add_action('admin_enqueue_scripts', 'wc_whatsapp_enqueue');