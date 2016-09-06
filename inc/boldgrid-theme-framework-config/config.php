<?php
function boldgrid_theme_framework_config( $boldgrid_framework_configs ) {
	/**
	 * General Configs
	 */
	$boldgrid_framework_configs['theme_name'] = 'pattern-library';
	$boldgrid_framework_configs['boldgrid-parent-theme'] = true;
	$boldgrid_framework_configs['parent-theme-name'] = 'prime';
	
	// Templates
	$boldgrid_framework_configs['template']['header'] = 'pattern';
	$boldgrid_framework_configs['template']['footer'] = 'pattern';
	$boldgrid_framework_configs['template']['call-to-action'] = '';

	// Options
	$boldgrid_framework_configs['customizer-options']['typography']['enabled'] = true;
	$boldgrid_framework_configs['scripts']['boldgrid-sticky-footer'] = true;
	$boldgrid_framework_configs['temp']['attribution_links'] = true;
	$boldgrid_framework_configs['customizer-options']['background']['defaults']['background_image'] = false;
	$boldgrid_framework_configs['template']['navbar-search-form'] = false;

	/**
	 * Customizer Configs
	 */
	$boldgrid_framework_configs['customizer-options']['colors']['enabled'] = true;
	$boldgrid_framework_configs['customizer-options']['colors']['defaults'] = array (
		array (
			'format' => 'palette-primary',
			'neutral-color' => '#fde3a7',
			'colors' => array(
				'#e9d460',
				'#f89406',
				'#eb974e',
				'#f5ab35',
				'#d35400',
			),
		),
		array (
			'default' => true,
			'format' => 'palette-primary',
			'neutral-color' => '#c8f7c5',
			'colors' => array(
				'#4ecdc4',
				'#a2ded0',
				'#87d37c',
				'#90c695',
				'#26a65b',
			)
		),
		array (
			'format' => 'palette-primary',
			'neutral-color' => '#e4f1fe',
			'colors' => array(
				'#446cb3',
				'#c5eff7',
				'#4183d7',
				'#59abe3',
				'#81cfe0',
			)
		),
		array (
			'format' => 'palette-primary',
			'neutral-color' => '#dcc6e0',
			'colors' => array(
				'#663399',
				'#674172',
				'#aea8d3',
				'#913d88',
				'#9b59b6',
			)
		),
		array (
			'format' => 'palette-primary',
			'neutral-color' => '#f1a9a0',
			'colors' => array(
				'#db0a5b',
				'#f64747',
				'#d2527f',
				'#e08283',
				'#f62459',
			)
		)
	);

	// Typography
	$boldgrid_framework_configs['customizer-options']['typography']['selectors']['h1:not( .site-title ), h1:not( .alt-font ), .h1'] = array(
		'type' => 'headings',
		'round' => 'floor',
		'amount' => 2.6,
	);
	$boldgrid_framework_configs['customizer-options']['typography']['selectors']['h3:not( .alt-font ), h3:not( .site-description ), .h3'] = array(
		'type' => 'headings',
		'round' => 'ceil',
		'amount' => 1.7,
	);

	// Text Contrast Colors
	$boldgrid_framework_configs['customizer-options']['colors']['light_text'] = '#ffffff';
	$boldgrid_framework_configs['customizer-options']['colors']['dark_text'] = '#333333';

	// Navbar Containers
	$boldgrid_framework_configs['menu']['prototype']['primary']['container_id'] = 'primary-menu';
	$boldgrid_framework_configs['menu']['prototype']['primary']['container_class'] = 'primary-menu';

	// Menu Locations
	$boldgrid_framework_configs['menu']['locations']['secondary'] = "Secondary";
	$boldgrid_framework_configs['menu']['locations']['tertiary'] = "Tertiary";
	$boldgrid_framework_configs['menu']['locations']['social'] = "Social";
	$boldgrid_framework_configs['menu']['footer_menus'][] = 'Footer';

	// Name Widget Areas
	$boldgrid_framework_configs['widget']['sidebars']['boldgrid-widget-1']['name'] = 'Call To Action';
	$boldgrid_framework_configs['widget']['sidebars']['boldgrid-widget-2']['name'] = 'Below Primary Navigation';
	$boldgrid_framework_configs['widget']['sidebars']['boldgrid-widget-3']['name'] = 'Footer Center';

	// Configs above will override framework defaults
	return $boldgrid_framework_configs;
}
add_filter( 'boldgrid_theme_framework_config', 'boldgrid_theme_framework_config' );

/**
 * Site Title & Logo Controls
 */
function filter_logo_controls( $controls ) {
	$controls['logo_font_family']['default'] = 'Open Sans';

	// Controls above will override framework defaults
	return $controls;
}
add_filter( 'kirki/fields', 'filter_logo_controls' );
