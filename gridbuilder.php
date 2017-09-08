<?php
/**
 * Plugin Name:     GridBuilder
 * Plugin URI:      https://github.com/davideugenepratt/gridbuilder
 * Description:     A Bootstrap based layout building plugin.
 * Author:          David Pratt
 * Author URI:      http://www.davideugenepratt.com
 * Text Domain:     gridbuilder
 * Domain Path:     /languages
 * Version:         0.1.0
 *
 * @package         Gridbuilder
 */

spl_autoload_register( 'gridbuilder_autoloader' );

function gridbuilder_autoloader( $class_name ) {
    if ( false !== strpos( $class_name, 'Gridbuilder' ) ) {
        $classes_dir = realpath( plugin_dir_path( __FILE__ ) ) . DIRECTORY_SEPARATOR . 'includes' . DIRECTORY_SEPARATOR;
        $class_file = str_replace( '_', DIRECTORY_SEPARATOR, $class_name ) . '.php';
        require_once $classes_dir . $class_file;
    }
}

$GridbuilderPlugin = new GridbuilderPlugin();