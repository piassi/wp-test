<?php
/**
 * _s functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package piassi
 */

use SolidPress\Core\Theme;
use SolidPress\Core\WPTemplate;

// Composer autoload
require get_template_directory() . '/vendor/autoload.php';

$registrable_namespaces = array();

// Check if ACF plugin is active to register fields
if ( function_exists( 'acf_add_local_field_group' ) ) {
	$registrable_namespaces[] = 'FieldsGroups';
	$registrable_namespaces[] = 'Options';
}

// Set core registrables
$registrable_namespaces = array_merge(
    $registrable_namespaces,
    array(
		'Taxonomies',
		'PostTypes',
		'Hooks',
	)
);

// Setup a theme instance for SolidPress
global $theme_class;
$theme_class = new Theme(
    array(
		'template_engine'        => new WPTemplate(),
		'namespace'              => 'Theme',
		'base_folder'            => 'src',
		'registrable_namespaces' => $registrable_namespaces,
    )
);