<?php
/**
 * Plugin Name:     Chetaru Plugin
 * Plugin URI:      https://chetaru.com/
 * Description:     Plugin is used for adding custom functionalities.
 * Author:          Chetaru
 * Author URI:      https://chetaru.com/
 * Text Domain:     chetaru-plugin
 * Domain Path:     /languages
 * Version:         0.1.0
 *
 * @package         Chetaru_Plugin
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

define( 'CHETARU_PLUGIN_PATH', dirname( __FILE__ ) );
define( 'CHETARU_PLUGIN_URL', plugins_url( '', __FILE__ ) );
define( 'CHETARU_PLUGIN_TEXT_DOMAIN', 'chetaru-plugin' );
define( 'CHETARU_PLUGIN_VERSION', '1.0' );

require_once CHETARU_PLUGIN_PATH . '/inc/main.php';