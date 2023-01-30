<?php
/**
 * Plugin Name: Tamara Funiciello NRW 2023
 * Version: 1.0.0
 * Plugin URI:
 * Description: WordPress Plugin for the NRW 2023 campaign of Tamara Funiciello
 * Author: Timothy@K.
 * Author URI: https://github.com/timothyoesch
 * Requires at least: 4.0
 * Tested up to: 4.0
 *
 * Text Domain: tf-nrw-2023
 *
 * @package WordPress
 * @author Timothy@K.
 * @since 1.0.0
 */

function tf_nrw_2023_scripts() {
    wp_enqueue_script( 'tf-nrw-2023', plugins_url( '/dist/app.min.js', __FILE__ ), [], '1.0.0', true );
    wp_enqueue_style( 'tf-nrw-2023', plugins_url( '/dist/style.min.css', __FILE__ ), [], '1.0.0' );
}
add_action( 'wp_enqueue_scripts', 'tf_nrw_2023_scripts' );
