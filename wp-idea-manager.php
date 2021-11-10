<?php
/**
 * Plugin Name:       Wp Idea Manager
 * Plugin URI:        https://github.com/Khalidwebmail/wp-idea-manager.git
 * Description:       Manage idea management system that will help to visualize the idea requests currently in the queue along with status.
 * Version:           1.0.0
 * Author:            Khalid Ahmed
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       wp-idea-manager
 */

if( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Include autoload file
 */
if ( file_exists( __DIR__ . '/vendor/autoload.php' ) ) {
	require_once __DIR__ . '/vendor/autoload.php';
}

/**
 * Class Wp_Idea_Manager
 */
final class Wp_Idea_Manager {
	
}
