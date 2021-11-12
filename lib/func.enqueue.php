<?php

/***
 * Générateur en ligne pour les script et les css
 * @link https://generatewp.com/register_script/
 * @note Attention, dirname(__FILE__) et équivalant à __DIR__
 * @note Bien penser à changer les préfixes "gn_" pour les fonctions
 */

/***
 * ENQUEUE POUR LE FRONT
 */
//* enqueue style front
add_action('wp_enqueue_scripts','gn_styles_front', 99);
function gn_styles_front() {
	wp_register_style('styles-projet-front', plugin_dir_url(__DIR__) . 'css/styles-projet-front.css', array(), '1.0', 'all' );
	wp_enqueue_style('styles-projet-front');
}

//* enqueue script front
add_action('wp_enqueue_scripts','gn_scripts_front');
function gn_scripts_front() {
	wp_register_script('scripts-projet-front', plugin_dir_url(__DIR__) . 'js/scripts-projet-front.js', array(), '1.0', true);
	wp_enqueue_script('scripts-projet-front');
}


/***
 * ENQUEUE POUR LE BACK
 */

//* enqueue style back
add_action('admin_enqueue_scripts','gn_styles_back', 99);
function gn_styles_back() {
	wp_register_style('styles-projet-back', plugin_dir_url(__DIR__) . 'css/styles-projet-back.css', array(), '1.0', 'all' );
	wp_enqueue_style('styles-projet-back');
}

//* enqueue script back
add_action('admin_enqueue_scripts','gn_scripts_back');
function gn_scripts_back() {
	wp_register_script('scripts-projet-back', plugin_dir_url(__DIR__) . 'js/scripts-projet-back.js', array(), '1.0', true);
	wp_enqueue_script('scripts-projet-back');
}
