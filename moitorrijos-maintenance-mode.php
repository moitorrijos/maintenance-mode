<?php
/**
 * Plugin Name:     Moi Maintenance Mode
 * Plugin URI:      https://github.com/moitorrijos/maintenance-mode
 * Description:     A custom made maintenance mode plugin that uses a specific page load the frontend.
 * Author:          Juan Moises Torrijos
 * Author URI:      https://moitorrijos.com
 * Text Domain:     moitorrijos-maintenance-mode
 * Domain Path:     /languages
 * Version:         0.1.0
 *
 * @package         Moitorrijos_Maintenance_Mode
 */

// Your code starts here.

// Activate WordPress Maintenance Mode
function moitorrijos_maintenance_mode() {
  if ( !is_user_logged_in() && !is_page( 'soluciones-termicas' ) && !is_page( 106 ) ) {
    wp_redirect( '/soluciones-termicas' );
    exit();
  }
}

add_action( 'template_redirect', 'moitorrijos_maintenance_mode' );
