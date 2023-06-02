<?php
add_action('customize_register','chetaru_customizer_options',9999);
/*
 * Add in our custom Accent Color setting and control to be used in the Customizer in the Colors section
 *
 */
function chetaru_customizer_options( $wp_customize ) {
	$wp_customize->add_section('chetaru_plugin_section', array(
        'title'    => __('Chetaru Theme Options', CHETARU_PLUGIN_TEXT_DOMAIN ),
        'description' => '',
        'priority' => 120,
    ));
	
    // Text Input
    $wp_customize->add_setting('chetaru_plugin_options[spot_id]', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',

    ));

    $wp_customize->add_control('chetaru_plugin_option_spot_id', array(
        'label'      => __('SPOT ID', CHETARU_PLUGIN_TEXT_DOMAIN ),
        'section'    => 'chetaru_plugin_section',
        'settings'   => 'chetaru_plugin_options[spot_id]',
    ));
	
	// Textarea
	$wp_customize->add_setting('chetaru_plugin_options[head_code]', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',

    ));

    $wp_customize->add_control('chetaru_plugin_option_head_code', array(
        'label'      => __('Insert HTML Before </head>', CHETARU_PLUGIN_TEXT_DOMAIN ),
        'section'    => 'chetaru_plugin_section',
        'settings'   => 'chetaru_plugin_options[head_code]',
		'type'       => 'textarea',
    ));
	
	// Textarea
	$wp_customize->add_setting('chetaru_plugin_options[body_open_code]', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',

    ));

    $wp_customize->add_control('chetaru_plugin_option_body_open_code', array(
        'label'      => __('Insert HTML after <body>', CHETARU_PLUGIN_TEXT_DOMAIN ),
        'section'    => 'chetaru_plugin_section',
        'settings'   => 'chetaru_plugin_options[body_open_code]',
		'type'       => 'textarea',
    ));
	
	
	// Textarea
	$wp_customize->add_setting('chetaru_plugin_options[footer_code]', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',

    ));

    $wp_customize->add_control('chetaru_plugin_option_footer_code', array(
        'label'      => __('Insert HTML Before </body>', CHETARU_PLUGIN_TEXT_DOMAIN ),
        'section'    => 'chetaru_plugin_section',
        'settings'   => 'chetaru_plugin_options[footer_code]',
		'type'       => 'textarea',
    ));
	

	
}
