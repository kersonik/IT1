<?php
/**
 * lz-computer-repair: Customizer
 *
 * @subpackage lz-computer-repair
 * @since 1.0
 */

function lz_computer_repair_customize_register( $wp_customize ) {


	$wp_customize->add_setting('lz_computer_repair_logo_size',array(
		'sanitize_callback'	=> 'lz_computer_repair_sanitize_float'
	));
	$wp_customize->add_control('lz_computer_repair_logo_size',array(
		'label' => __('Logo Size','lz-computer-repair'),
		'type'	=> 'range',
		'section' => 'title_tagline'
	));

	$wp_customize->add_setting('lz_computer_repair_logo_padding',array(
		'sanitize_callback'	=> 'esc_html'
	));
	$wp_customize->add_control('lz_computer_repair_logo_padding',array(
		'label' => __('Logo Padding','lz-computer-repair'),
		'section' => 'title_tagline'
	));

	$wp_customize->add_setting('lz_computer_repair_logo_top_padding',array(
		'default' => '',
		'sanitize_callback'	=> 'lz_computer_repair_sanitize_float'
	));
	$wp_customize->add_control('lz_computer_repair_logo_top_padding',array(
		'type' => 'number',
		'description' => __('Top','lz-computer-repair'),
		'section' => 'title_tagline',
	));

	$wp_customize->add_setting('lz_computer_repair_logo_bottom_padding',array(
		'default' => '',
		'sanitize_callback'	=> 'lz_computer_repair_sanitize_float'
	));
	$wp_customize->add_control('lz_computer_repair_logo_bottom_padding',array(
		'type' => 'number',
		'description' => __('Bottom','lz-computer-repair'),
		'section' => 'title_tagline',
	));

	$wp_customize->add_setting('lz_computer_repair_logo_left_padding',array(
		'default' => '',
		'sanitize_callback'	=> 'lz_computer_repair_sanitize_float'
	));
	$wp_customize->add_control('lz_computer_repair_logo_left_padding',array(
		'type' => 'number',
		'description' => __('Left','lz-computer-repair'),
		'section' => 'title_tagline',
	));

	$wp_customize->add_setting('lz_computer_repair_logo_right_padding',array(
		'default' => '',
		'sanitize_callback'	=> 'lz_computer_repair_sanitize_float'
	));
	$wp_customize->add_control('lz_computer_repair_logo_right_padding',array(
		'type' => 'number',
		'description' => __('Right','lz-computer-repair'),
		'section' => 'title_tagline',
	));

	$wp_customize->add_setting('lz_computer_repair_show_site_title',array(
		'default' => true,
		'sanitize_callback'	=> 'lz_computer_repair_sanitize_checkbox'
	));
	$wp_customize->add_control('lz_computer_repair_show_site_title',array(
		'type' => 'checkbox',
		'label' => __('Show / Hide Site Title','lz-computer-repair'),
		'section' => 'title_tagline'
	));

	$wp_customize->add_setting('lz_computer_repair_site_title_font_size',array(
		'default' => '',
		'sanitize_callback'	=> 'lz_computer_repair_sanitize_float'
	));
	$wp_customize->add_control('lz_computer_repair_site_title_font_size',array(
		'type' => 'number',
		'label' => __('Site Title Font Size','lz-computer-repair'),
		'section' => 'title_tagline',
	));

	$wp_customize->add_setting( 'lz_computer_repair_site_title_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'lz_computer_repair_site_title_color', array(
		'label' => 'Title Color',
		'section' => 'title_tagline',
	)));

	$wp_customize->add_setting('lz_computer_repair_show_tagline',array(
		'default' => true,
		'sanitize_callback'	=> 'lz_computer_repair_sanitize_checkbox'
	));
	$wp_customize->add_control('lz_computer_repair_show_tagline',array(
		'type' => 'checkbox',
		'label' => __('Show / Hide Site Tagline','lz-computer-repair'),
		'section' => 'title_tagline'
	));

	$wp_customize->add_setting('lz_computer_repair_site_tagline_font_size',array(
		'default' => '',
		'sanitize_callback'	=> 'lz_computer_repair_sanitize_float'
	));
	$wp_customize->add_control('lz_computer_repair_site_tagline_font_size',array(
		'type' => 'number',
		'label' => __('Site Tagline Font Size','lz-computer-repair'),
		'section' => 'title_tagline',
	));

	$wp_customize->add_setting( 'lz_computer_repair_site_tagline_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'lz_computer_repair_site_tagline_color', array(
		'label' => 'Tagline Color',
		'section' => 'title_tagline',
	)));

	$wp_customize->add_panel( 'lz_computer_repair_panel_id', array(
		'priority' => 10,
		'capability' => 'edit_theme_options',
		'theme_supports' => '',
		'title' => __( 'Theme Settings', 'lz-computer-repair' ),
	) );

	$wp_customize->add_section( 'lz_computer_repair_theme_options_section', array(
    	'title'      => __( 'General Settings', 'lz-computer-repair' ),
		'priority'   => 30,
		'panel' => 'lz_computer_repair_panel_id'
	) );

	// Add Settings and Controls for Layout
	$wp_customize->add_setting('lz_computer_repair_theme_options',array(
		'default' => 'Right Sidebar',
		'sanitize_callback' => 'lz_computer_repair_sanitize_choices'
	));

	$wp_customize->add_control('lz_computer_repair_theme_options',array(
		'type' => 'radio',
		'label' => __('Do you want this section','lz-computer-repair'),
		'section' => 'lz_computer_repair_theme_options_section',
		'choices' => array(
		   'Left Sidebar' => __('Left Sidebar','lz-computer-repair'),
		   'Right Sidebar' => __('Right Sidebar','lz-computer-repair'),
		   'One Column' => __('One Column','lz-computer-repair'),
		   'Three Columns' => __('Three Columns','lz-computer-repair'),
		   'Four Columns' => __('Four Columns','lz-computer-repair'),
		   'Grid Layout' => __('Grid Layout','lz-computer-repair')
		),
	));

	$wp_customize->add_setting( 'lz_computer_repair_boxfull_width', array(
		'default'           => '',
		'sanitize_callback' => 'lz_computer_repair_sanitize_choices'
	));
	
	$wp_customize->add_control( 'lz_computer_repair_boxfull_width', array(
		'label'    => __( 'Section Width', 'lz-computer-repair' ),
		'section'  => 'lz_computer_repair_theme_options_section',
		'type'     => 'select',
		'choices'  => array(
			'container'  => __('Box Width', 'lz-computer-repair'),
			'container-fluid' => __('Full Width', 'lz-computer-repair'),
			'none' => __('None', 'lz-computer-repair')
		),
	));

	$wp_customize->add_setting( 'lz_computer_repair_dropdown_anim', array(
		'default'           => 'None',
		'sanitize_callback' => 'lz_computer_repair_sanitize_choices'
	));
	$wp_customize->add_control( 'lz_computer_repair_dropdown_anim', array(
		'label'    => __( 'Menu Dropdown Animations', 'lz-computer-repair' ),
		'section'  => 'lz_computer_repair_theme_options_section',
		'type'     => 'select',
		'choices'  => array(
			'bounceInUp'  => __('bounceInUp', 'lz-computer-repair'),
			'fadeInUp' => __('fadeInUp', 'lz-computer-repair'),
			'zoomIn'    => __('zoomIn', 'lz-computer-repair'),
			'None'    => __('None', 'lz-computer-repair')
		),
	));

	// Top Bar
	$wp_customize->add_section( 'lz_computer_repair_contact_details', array(
    	'title'      => __( 'Top Bar', 'lz-computer-repair' ),
		'priority'   => null,
		'panel' => 'lz_computer_repair_panel_id'
	) );
	
	$wp_customize->add_setting('lz_computer_repair_call',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('lz_computer_repair_call',array(
		'label'	=> __('Phone Text','lz-computer-repair'),
		'section'=> 'lz_computer_repair_contact_details',
		'setting'=> 'lz_computer_repair_call',
		'type'=> 'text'
	));

	$wp_customize->add_setting('lz_computer_repair_call1',array(
		'default'=> '',
		'sanitize_callback'	=> 'lz_computer_repair_sanitize_phone_number'
	));	
	$wp_customize->add_control('lz_computer_repair_call1',array(
		'label'	=> __('Phone Number','lz-computer-repair'),
		'section'=> 'lz_computer_repair_contact_details',
		'setting'=> 'lz_computer_repair_call1',
		'type'=> 'text'
	));

	$wp_customize->add_setting('lz_computer_repair_time',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('lz_computer_repair_time',array(
		'label'	=> __('Time Text','lz-computer-repair'),
		'section'=> 'lz_computer_repair_contact_details',
		'setting'=> 'lz_computer_repair_time',
		'type'=> 'text'
	));

	$wp_customize->add_setting('lz_computer_repair_time1',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('lz_computer_repair_time1',array(
		'label'	=> __('Opening Hours','lz-computer-repair'),
		'section'=> 'lz_computer_repair_contact_details',
		'setting'=> 'lz_computer_repair_time1',
		'type'=> 'text'
	));

	$wp_customize->add_setting('lz_computer_repair_btn_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('lz_computer_repair_btn_text',array(
		'label'	=> __('Add Button Text','lz-computer-repair'),
		'section'	=> 'lz_computer_repair_contact_details',
		'setting'	=> 'lz_computer_repair_btn_text',
		'type'	=> 'text'
	));

	$wp_customize->add_setting('lz_computer_repair_btn_link',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('lz_computer_repair_btn_link',array(
		'label'	=> __('Add Button Link','lz-computer-repair'),
		'section'	=> 'lz_computer_repair_contact_details',
		'setting'	=> 'lz_computer_repair_btn_link',
		'type'	=> 'url'
	));

	$wp_customize->add_setting( 'lz_computer_repair_top_icon_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'lz_computer_repair_top_icon_color', array(
		'label' => 'Icons Color',
		'section' => 'lz_computer_repair_contact_details',
	)));

	$wp_customize->add_setting( 'lz_computer_repair_top_title_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'lz_computer_repair_top_title_color', array(
		'label' => 'Title Color',
		'section' => 'lz_computer_repair_contact_details',
	)));

	$wp_customize->add_setting( 'lz_computer_repair_top_text_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'lz_computer_repair_top_text_color', array(
		'label' => 'Text Color',
		'section' => 'lz_computer_repair_contact_details',
	)));

	$wp_customize->add_setting( 'lz_computer_repair_top_btn_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'lz_computer_repair_top_btn_color', array(
		'label' => 'Button Text Color',
		'section' => 'lz_computer_repair_contact_details',
	)));

	$wp_customize->add_setting( 'lz_computer_repair_top_btnbg_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'lz_computer_repair_top_btnbg_color', array(
		'label' => 'Button Bg Color',
		'section' => 'lz_computer_repair_contact_details',
	)));

	$wp_customize->add_setting( 'lz_computer_repair_top_bg_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'lz_computer_repair_top_bg_color', array(
		'label' => 'Topbar Background Color',
		'section' => 'lz_computer_repair_contact_details',
	)));

	$wp_customize->add_setting( 'lz_computer_repair_bottom_bg_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'lz_computer_repair_bottom_bg_color', array(
		'label' => 'Bottom Header Background Color',
		'section' => 'lz_computer_repair_contact_details',
	)));

	//home page slider
	$wp_customize->add_section( 'lz_computer_repair_slider_section' , array(
    	'title'      => __( 'Slider Settings', 'lz-computer-repair' ),
		'priority'   => null,
		'panel' => 'lz_computer_repair_panel_id'
	) );

	$wp_customize->add_setting('lz_computer_repair_slider_hide_show',array(
       	'default' => false,
       	'sanitize_callback'	=> 'lz_computer_repair_sanitize_checkbox'
	));
	$wp_customize->add_control('lz_computer_repair_slider_hide_show',array(
	   	'type' => 'checkbox',
	   	'label' => __('Show / Hide slider','lz-computer-repair'),
	   	'description' => __('Image Size ( 1600px x 550px )','lz-computer-repair'),
	   	'section' => 'lz_computer_repair_slider_section',
	));

	$wp_customize->add_setting( 'lz_computer_repair_slider_effect', array(
		'default'           => '',
		'sanitize_callback' => 'lz_computer_repair_sanitize_choices'
	));
	$wp_customize->add_control( 'lz_computer_repair_slider_effect', array(
		'label'    => __( 'Onload Transactions Effects', 'lz-computer-repair' ),
		'section'  => 'lz_computer_repair_slider_section',
		'type'     => 'select',
		'choices'  => array(
			'bounceInLeft'  => __('bounceInLeft', 'lz-computer-repair'),
			'bounceInRight' => __('bounceInRight', 'lz-computer-repair'),
			'bounceInUp'    => __('bounceInUp', 'lz-computer-repair'),
			'bounceInDown'    => __('bounceInDown', 'lz-computer-repair'),
			'zoomIn'  => __('zoomIn', 'lz-computer-repair'),
			'zoomOut' => __('zoomOut', 'lz-computer-repair'),
			'fadeInDown'    => __('fadeInDown', 'lz-computer-repair'),
			'fadeInUp'    => __('fadeInUp', 'lz-computer-repair'),
			'fadeInLeft'  => __('fadeInLeft', 'lz-computer-repair'),
			'fadeInRight' => __('fadeInRight', 'lz-computer-repair'),
			'flip-up'    => __('flip-up', 'lz-computer-repair'),
			'none'    => __('none', 'lz-computer-repair')
		),
	));

	for ( $count = 1; $count <= 4; $count++ ) {
		$wp_customize->add_setting( 'lz_computer_repair_slider' . $count, array(
			'default'           => '',
			'sanitize_callback' => 'lz_computer_repair_sanitize_dropdown_pages'
		) );
		$wp_customize->add_control( 'lz_computer_repair_slider' . $count, array(
			'label'    => __( 'Select Slide Image Page', 'lz-computer-repair' ),
			'section'  => 'lz_computer_repair_slider_section',
			'type'     => 'dropdown-pages'
		) );
	}

	$wp_customize->add_setting('lz_computer_repair_slider_excerpt_length',array(
		'default' => '15',
		'sanitize_callback'	=> 'lz_computer_repair_sanitize_float'
	));
	$wp_customize->add_control('lz_computer_repair_slider_excerpt_length',array(
		'type' => 'number',
		'label' => __('Slider Excerpt Length','lz-computer-repair'),
		'section' => 'lz_computer_repair_slider_section',
	));

	$wp_customize->add_setting('lz_computer_repair_slider_title_font_size',array(
		'default' => '',
		'sanitize_callback'	=> 'lz_computer_repair_sanitize_float'
	));
	$wp_customize->add_control('lz_computer_repair_slider_title_font_size',array(
		'type' => 'number',
		'label' => __('Title Font Size','lz-computer-repair'),
		'section' => 'lz_computer_repair_slider_section',
	));

	$wp_customize->add_setting('lz_computer_repair_slider_text_font_size',array(
		'default' => '',
		'sanitize_callback'	=> 'lz_computer_repair_sanitize_float'
	));
	$wp_customize->add_control('lz_computer_repair_slider_text_font_size',array(
		'type' => 'number',
		'label' => __('Text Font Size','lz-computer-repair'),
		'section' => 'lz_computer_repair_slider_section',
	));

	$wp_customize->add_setting('lz_computer_repair_slider_opacity',array(
		'default' => '',
		'sanitize_callback'	=> 'lz_computer_repair_sanitize_float'
	));
	$wp_customize->add_control('lz_computer_repair_slider_opacity',array(
		'type' => 'range',
		'label' => __('Image Opacity','lz-computer-repair'),
		'section' => 'lz_computer_repair_slider_section',
		'input_attrs' => array(
			'min' => 0,
			'max' => 1,
			'step' => 0.1,
		),
	));

	$wp_customize->add_setting( 'lz_computer_repair_slider_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'lz_computer_repair_slider_color', array(
		'label' => 'Title Color',
		'section' => 'lz_computer_repair_slider_section',
	)));

	$wp_customize->add_setting( 'lz_computer_repair_slider_text_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'lz_computer_repair_slider_text_color', array(
		'label' => 'Text Color',
		'section' => 'lz_computer_repair_slider_section',
	)));

	$wp_customize->add_setting( 'lz_computer_repair_slider_btn_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'lz_computer_repair_slider_btn_color', array(
		'label' => 'Button Text Color',
		'section' => 'lz_computer_repair_slider_section',
	)));

	$wp_customize->add_setting( 'lz_computer_repair_slider_btnbg_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'lz_computer_repair_slider_btnbg_color', array(
		'label' => 'Button Bg Color',
		'section' => 'lz_computer_repair_slider_section',
	)));

	//	Our Services
	$wp_customize->add_section('lz_computer_repair_service',array(
		'title'	=> __('Our Services','lz-computer-repair'),
		'description'=> __('<b>Note :</b> This section will appear below the slider.','lz-computer-repair'),
		'panel' => 'lz_computer_repair_panel_id',
	));
	
	$wp_customize->add_setting('lz_computer_repair_title',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('lz_computer_repair_title',array(
		'label'	=> __('Section Title','lz-computer-repair'),
		'section'	=> 'lz_computer_repair_service',
		'setting'	=> 'lz_computer_repair_title',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('lz_computer_repair_service_title_font_size',array(
		'default' => '',
		'sanitize_callback'	=> 'lz_computer_repair_sanitize_float'
	));
	$wp_customize->add_control('lz_computer_repair_service_title_font_size',array(
		'type' => 'number',
		'label' => __('Font Size','lz-computer-repair'),
		'section' => 'lz_computer_repair_service',
	));

	$categories = get_categories();
	$cats = array();
	$i = 0;
	$cat_pst[]= 'select';
	foreach($categories as $category){
		if($i==0){
			$default = $category->slug;
			$i++;
		}
		$cat_pst[$category->slug] = $category->name;
	}

	$wp_customize->add_setting('lz_computer_repair_cat',array(
		'default'	=> 'select',
		'sanitize_callback' => 'lz_computer_repair_sanitize_choices',
	));
	$wp_customize->add_control('lz_computer_repair_cat',array(
		'type'    => 'select',
		'choices' => $cat_pst,
		'label' => __('Select Category To Display Post','lz-computer-repair'),
		'section' => 'lz_computer_repair_service',
	));

	$wp_customize->add_setting('lz_computer_repair_service_img_size',array(
		'default' => '',
		'sanitize_callback'	=> 'lz_computer_repair_sanitize_float'
	));
	$wp_customize->add_control('lz_computer_repair_service_img_size',array(
		'type' => 'number',
		'label' => __('Image Size','lz-computer-repair'),
		'section' => 'lz_computer_repair_service',
	));

	$wp_customize->add_setting('lz_computer_repair_service_font_size',array(
		'default' => '',
		'sanitize_callback'	=> 'lz_computer_repair_sanitize_float'
	));
	$wp_customize->add_control('lz_computer_repair_service_font_size',array(
		'type' => 'number',
		'label' => __('Title Font Size','lz-computer-repair'),
		'section' => 'lz_computer_repair_service',
	));

	$wp_customize->add_setting('lz_computer_repair_service_text_font_size',array(
		'default' => '',
		'sanitize_callback'	=> 'lz_computer_repair_sanitize_float'
	));
	$wp_customize->add_control('lz_computer_repair_service_text_font_size',array(
		'type' => 'number',
		'label' => __('Text Font Size','lz-computer-repair'),
		'section' => 'lz_computer_repair_service',
	));

	$wp_customize->add_setting('lz_computer_repair_service_section_padding',array(
       'default' => '',
       'sanitize_callback'	=> 'lz_computer_repair_sanitize_float'
    ));
    $wp_customize->add_control('lz_computer_repair_service_section_padding',array(
       'type' => 'number',
       'label' => __('Section Top Bottom Padding','lz-computer-repair'),
       'section' => 'lz_computer_repair_service',
    ));

	$wp_customize->add_setting( 'lz_computer_repair_service_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'lz_computer_repair_service_color', array(
		'label' => 'Section Title Color',
		'section' => 'lz_computer_repair_service',
	)));

	$wp_customize->add_setting( 'lz_computer_repair_service_box_title_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'lz_computer_repair_service_box_title_color', array(
		'label' => 'Box Title Color',
		'section' => 'lz_computer_repair_service',
	)));

	$wp_customize->add_setting( 'lz_computer_repair_service_box_text_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'lz_computer_repair_service_box_text_color', array(
		'label' => 'Box Text Color',
		'section' => 'lz_computer_repair_service',
	)));

	$wp_customize->add_setting( 'lz_computer_repair_service_boxbg_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'lz_computer_repair_service_boxbg_color', array(
		'label' => 'Box Bg Color',
		'section' => 'lz_computer_repair_service',
	)));

	$wp_customize->add_setting( 'lz_computer_repair_service_box_hover_bdr_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'lz_computer_repair_service_box_hover_bdr_color', array(
		'label' => 'Box Hover Border Color',
		'section' => 'lz_computer_repair_service',
	)));

	//Footer
 	$wp_customize->add_section( 'lz_computer_repair_footer', array(
    	'title'      => __( 'Footer Text', 'lz-computer-repair' ),
		'priority'   => null,
		'panel' => 'lz_computer_repair_panel_id'
	) );

	$wp_customize->add_setting('lz_computer_repair_show_back_totop',array(
 		'default' => true,
   	'sanitize_callback'	=> 'lz_computer_repair_sanitize_checkbox'
	));
	$wp_customize->add_control('lz_computer_repair_show_back_totop',array(
   	'type' => 'checkbox',
   	'label' => __('Show / Hide Back to Top','lz-computer-repair'),
   	'section' => 'lz_computer_repair_footer'
	));

 	$wp_customize->add_setting('lz_computer_repair_footer_link',array(
		'default'	=> 'https://www.luzuk.com/themes/free-lz-computer-repair-wordpress-theme/',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('lz_computer_repair_footer_link',array(
		'label'	=> __('Footer Link','lz-computer-repair'),
		'section'	=> 'lz_computer_repair_footer',
		'setting'	=> 'lz_computer_repair_footer_link',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('lz_computer_repair_footer_copy',array(
		'default'	=> 'Computer Repair WordPress Theme By Luzuk',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('lz_computer_repair_footer_copy',array(
		'label'	=> __('Footer Text','lz-computer-repair'),
		'section'	=> 'lz_computer_repair_footer',
		'setting'	=> 'lz_computer_repair_footer_copy',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('lz_computer_repair_copyright_padding',array(
		'default' => '',
		'sanitize_callback'	=> 'lz_computer_repair_sanitize_float'
 	));
 	$wp_customize->add_control('lz_computer_repair_copyright_padding',array(
		'type' => 'number',
		'label' => __('Copyright Top Bottom Padding','lz-computer-repair'),
		'section' => 'lz_computer_repair_footer',
	));

	$wp_customize->add_setting('lz_computer_repair_copyright_font_size',array(
		'default' => '',
		'sanitize_callback'	=> 'lz_computer_repair_sanitize_float'
	));
	$wp_customize->add_control('lz_computer_repair_copyright_font_size',array(
		'type' => 'number',
		'label' => __('Font Size','lz-computer-repair'),
		'section' => 'lz_computer_repair_footer',
	));

	$wp_customize->add_setting( 'lz_computer_repair_copyright_text_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'lz_computer_repair_copyright_text_color', array(
		'label' => 'Text Color',
		'section' => 'lz_computer_repair_footer',
	)));

	$wp_customize->add_setting( 'lz_computer_repair_copyright_bg_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'lz_computer_repair_copyright_bg_color', array(
		'label' => 'BG Color',
		'section' => 'lz_computer_repair_footer',
	)));

	$wp_customize->get_setting( 'blogname' )->transport          = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport   = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport  = 'postMessage';

	$wp_customize->selective_refresh->add_partial( 'blogname', array(
		'selector' => '.site-title a',
		'render_callback' => 'lz_computer_repair_customize_partial_blogname',
	) );
	$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
		'selector' => '.site-description',
		'render_callback' => 'lz_computer_repair_customize_partial_blogdescription',
	) );
}
add_action( 'customize_register', 'lz_computer_repair_customize_register' );

function lz_computer_repair_customize_partial_blogname() {
	bloginfo( 'name' );
}

function lz_computer_repair_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

function lz_computer_repair_is_static_front_page() {
	return ( is_front_page() && ! is_home() );
}

function lz_computer_repair_is_view_with_layout_option() {
	// This option is available on all pages. It's also available on archives when there isn't a sidebar.
	return ( is_page() || ( is_archive() && ! is_active_sidebar( 'sidebar-1' ) ) );
}

/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class LZ_Computer_Repair_Customize {

	/**
	 * Returns the instance.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object
	 */
	public static function get_instance() {

		static $instance = null;

		if ( is_null( $instance ) ) {
			$instance = new self;
			$instance->setup_actions();
		}

		return $instance;
	}

	/**
	 * Constructor method.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function __construct() {}

	/**
	 * Sets up initial actions.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function setup_actions() {

		// Register panels, sections, settings, controls, and partials.
		add_action( 'customize_register', array( $this, 'sections' ) );

		// Register scripts and styles for the controls.
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_control_scripts' ), 0 );
	}

	/**
	 * Sets up the customizer sections.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object  $manager
	 * @return void
	 */
	public function sections( $manager ) {

		// Load custom sections.
		load_template( trailingslashit( get_template_directory() ) . '/inc/section-pro.php' );

		// Register custom section types.
		$manager->register_section_type( 'LZ_Computer_Repair_Customize_Section_Pro' );

		// Register sections.
		$manager->add_section(
			new LZ_Computer_Repair_Customize_Section_Pro(
				$manager,
				'lz_computer_repair_example_1',
				array(
					'priority' => 9,
					'title'    => esc_html__( 'Computer Pro Theme', 'lz-computer-repair' ),
					'pro_text' => esc_html__( 'Go Pro','lz-computer-repair' ),
					'pro_url'  => esc_url( 'https://www.luzuk.com/products/lz-computer-repair-wordpress-theme/' ),
				)
			)
		);
	}

	/**
	 * Loads theme customizer CSS.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue_control_scripts() {

		wp_enqueue_script( 'lz-computer-repair-customize-controls', trailingslashit( esc_url(get_template_directory_uri()) ) . '/assets/js/customize-controls.js', array( 'customize-controls' ) );

		wp_enqueue_style( 'lz-computer-repair-customize-controls', trailingslashit( esc_url(get_template_directory_uri()) ) . '/assets/css/customize-controls.css' );
	}
}

// Doing this customizer thang!
LZ_Computer_Repair_Customize::get_instance();