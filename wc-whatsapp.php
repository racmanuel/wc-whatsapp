<?php
/**
 * Plugin Name:       WC WhatsApp
 * Description:       Plugin to show WhatsApp button in Customer Orders of WoooCommerce.
 * Version:           1.0
 * Requires at least: 5.0
 * Requires PHP:      7.0
 * Author:            Manuel Ramírez Coronel
 * Author URI:        https://github.com/racmanuel
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       wc-whatsapp
 * Domain Path:       /languages
 */

/**
 * Prevent Data Leaks
 */
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

/**
 * Check if WooCommerce is active
 **/
if (in_array('woocommerce/woocommerce.php', apply_filters('active_plugins', get_option('active_plugins')))) {
    /**
     * Plugin Code
     */

    /**
     * Enqueue Scripts and Styles
     */
    require_once plugin_dir_path(__FILE__) . 'includes/enqueue_files.php';

    /**
     * Add the WhatsApp Button in the WooCommerce Order
     */
    require_once plugin_dir_path(__FILE__) . 'includes/whatsapp_btn_in_order.php';

    /**
     * Add the WhatsApp Button in the List of Orders in WooCommerce
     */
    require_once plugin_dir_path(__FILE__) . 'includes/whatsapp_btn_in_list_order.php';
}
