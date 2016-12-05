<?php
/**
 * Used only on dev! - it is removed from the package by our deploy ;)
 * V2.1
 */

/**
 * STOP!
 * WARNING!!!   This file is also used by the deploy system of the theme and it's not included with the deployed theme
 */

// this array is used by td_deploy to compile all the files
// it is also used by the live compiler
global $td_less_files;
$td_less_files = array (
	'style.css_v2' => array (
		'source' => 'includes/less_files/main.less',
		'destination' => 'style.css'
	),
	'editor-style' => array (
		'source' => 'includes/less_files/editor-style.less',
		'destination' => 'editor-style.css'
	),
	'wp-admin.css' => array (
		'source' => 'includes/wp_booster/wp-admin/css/wp-admin.less',
		'destination' => 'includes/wp_booster/wp-admin/css/wp-admin.css'
	),
	'viral' => array (
		'source' => 'includes/demos/viral/demo_style.less',
		'destination' => 'includes/demos/viral/demo_style.css'
	),
	'voyage' => array (
		'source' => 'includes/demos/voyage/demo_style.less',
		'destination' => 'includes/demos/voyage/demo_style.css'
	),
	'tech' => array (
		'source' => 'includes/demos/tech/demo_style.less',
		'destination' => 'includes/demos/tech/demo_style.css'
	),
	'cook_book' => array (
		'source' => 'includes/demos/cook_book/demo_style.less',
		'destination' => 'includes/demos/cook_book/demo_style.css'
	),
);



require_once 'includes/wp_booster/external/td_node_less/td_less_compiler.php';

