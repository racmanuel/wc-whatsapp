<?php
/**
* Fired when the plugin is uninstalled.
*
* @package WC Order Tracking
* @author Manuel Ramírez Coronel
* @license GPL v2 or later
* @link  https://www.gnu.org/licenses/gpl-2.0.html
* @copyright 2021 Manuel Ramírez Coronel
*/

// If uninstall not called from WordPress, then exit
if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
	exit;
}

// @TODO: Define uninstall functionality here