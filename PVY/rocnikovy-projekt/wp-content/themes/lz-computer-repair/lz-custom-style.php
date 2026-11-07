<?php 

	$lz_computer_repair_custom_style = '';

	// Logo Size
	$lz_computer_repair_logo_top_padding = get_theme_mod('lz_computer_repair_logo_top_padding');
	$lz_computer_repair_logo_bottom_padding = get_theme_mod('lz_computer_repair_logo_bottom_padding');
	$lz_computer_repair_logo_left_padding = get_theme_mod('lz_computer_repair_logo_left_padding');
	$lz_computer_repair_logo_right_padding = get_theme_mod('lz_computer_repair_logo_right_padding');

	if( $lz_computer_repair_logo_top_padding != '' || $lz_computer_repair_logo_bottom_padding != '' || $lz_computer_repair_logo_left_padding != '' || $lz_computer_repair_logo_right_padding != ''){
		$lz_computer_repair_custom_style .=' .logo {';
			$lz_computer_repair_custom_style .=' padding-top: '.esc_attr($lz_computer_repair_logo_top_padding).'px; padding-bottom: '.esc_attr($lz_computer_repair_logo_bottom_padding).'px; padding-left: '.esc_attr($lz_computer_repair_logo_left_padding).'px; padding-right: '.esc_attr($lz_computer_repair_logo_right_padding).'px;';
		$lz_computer_repair_custom_style .=' }';
	}

	$lz_computer_repair_logo_size = get_theme_mod('lz_computer_repair_logo_size');
	if( $lz_computer_repair_logo_size != '') {
		if($lz_computer_repair_logo_size == 100) {
			$lz_computer_repair_custom_style .=' .custom-logo-link img {';
				$lz_computer_repair_custom_style .=' width: 350px;';
			$lz_computer_repair_custom_style .=' }';
		} else if($lz_computer_repair_logo_size >= 10 && $lz_computer_repair_logo_size < 100) {
			$lz_computer_repair_custom_style .=' .custom-logo-link img {';
				$lz_computer_repair_custom_style .=' width: '.esc_attr($lz_computer_repair_logo_size).'%;';
			$lz_computer_repair_custom_style .=' }';
		}
	}

	// service section padding
	$lz_computer_repair_service_section_padding = get_theme_mod('lz_computer_repair_service_section_padding');

	if( $lz_computer_repair_service_section_padding != ''){
		$lz_computer_repair_custom_style .=' #our_services {';
			$lz_computer_repair_custom_style .=' padding-top: '.esc_attr($lz_computer_repair_service_section_padding).'px; padding-bottom: '.esc_attr($lz_computer_repair_service_section_padding).'px;';
		$lz_computer_repair_custom_style .=' }';
	}

	// Site Title Font Size
	$lz_computer_repair_site_title_font_size = get_theme_mod('lz_computer_repair_site_title_font_size');
	if( $lz_computer_repair_site_title_font_size != ''){
		$lz_computer_repair_custom_style .=' .logo h1.site-title, .logo p.site-title {';
			$lz_computer_repair_custom_style .=' font-size: '.esc_attr($lz_computer_repair_site_title_font_size).'px;';
		$lz_computer_repair_custom_style .=' }';
	}

	$lz_computer_repair_site_title_color = get_theme_mod('lz_computer_repair_site_title_color');

	if ( $lz_computer_repair_site_title_color != '') {
		$lz_computer_repair_custom_style .=' .logo h1 a, .logo p.site-title a {';
			$lz_computer_repair_custom_style .=' color:'.esc_attr($lz_computer_repair_site_title_color).';';
		$lz_computer_repair_custom_style .=' }';
	}

	// Site Tagline Font Size
	$lz_computer_repair_site_tagline_font_size = get_theme_mod('lz_computer_repair_site_tagline_font_size');
	if( $lz_computer_repair_site_tagline_font_size != ''){
		$lz_computer_repair_custom_style .=' .logo p.site-description {';
			$lz_computer_repair_custom_style .=' font-size: '.esc_attr($lz_computer_repair_site_tagline_font_size).'px;';
		$lz_computer_repair_custom_style .=' }';
	}

	$lz_computer_repair_site_tagline_color = get_theme_mod('lz_computer_repair_site_tagline_color');

	if ( $lz_computer_repair_site_tagline_color != '') {
		$lz_computer_repair_custom_style .=' p.site-description {';
			$lz_computer_repair_custom_style .=' color:'.esc_attr($lz_computer_repair_site_tagline_color).';';
		$lz_computer_repair_custom_style .=' }';
	}

	// Copyright padding
	$lz_computer_repair_copyright_padding = get_theme_mod('lz_computer_repair_copyright_padding');
	if( $lz_computer_repair_copyright_padding != ''){
		$lz_computer_repair_custom_style .=' .site-info {';
			$lz_computer_repair_custom_style .=' padding-top: '.esc_attr($lz_computer_repair_copyright_padding).'px; padding-bottom: '.esc_attr($lz_computer_repair_copyright_padding).'px;';
		$lz_computer_repair_custom_style .=' }';
	}

	$lz_computer_repair_copyright_font_size = get_theme_mod('lz_computer_repair_copyright_font_size');
	if( $lz_computer_repair_copyright_font_size != ''){
		$lz_computer_repair_custom_style .=' .site-info p {';
			$lz_computer_repair_custom_style .=' font-size: '.esc_attr($lz_computer_repair_copyright_font_size).'px;';
		$lz_computer_repair_custom_style .=' }';
	}

	$lz_computer_repair_slider_hide_show = get_theme_mod('lz_computer_repair_slider_hide_show',false);
	if( $lz_computer_repair_slider_hide_show == true){
		$lz_computer_repair_custom_style .=' .page-template-custom-home-page #inner-pages-header {';
			$lz_computer_repair_custom_style .=' display:none;';
		$lz_computer_repair_custom_style .=' }';
	}

	//Top bar color
	$lz_computer_repair_top_icon_color = get_theme_mod('lz_computer_repair_top_icon_color');
	if ( $lz_computer_repair_top_icon_color != '') {
		$lz_computer_repair_custom_style .=' .contact i {';
			$lz_computer_repair_custom_style .=' color:'.esc_attr($lz_computer_repair_top_icon_color).';';
		$lz_computer_repair_custom_style .=' }';
	}

	$lz_computer_repair_top_title_color = get_theme_mod('lz_computer_repair_top_title_color');
	if ( $lz_computer_repair_top_title_color != '') {
		$lz_computer_repair_custom_style .=' .contact p.para-call {';
			$lz_computer_repair_custom_style .=' color:'.esc_attr($lz_computer_repair_top_title_color).';';
		$lz_computer_repair_custom_style .=' }';
	}

	$lz_computer_repair_top_text_color = get_theme_mod('lz_computer_repair_top_text_color');
	if ( $lz_computer_repair_top_text_color != '') {
		$lz_computer_repair_custom_style .=' .contact p, .contact p a {';
			$lz_computer_repair_custom_style .=' color:'.esc_attr($lz_computer_repair_top_text_color).';';
		$lz_computer_repair_custom_style .=' }';
	}

	$lz_computer_repair_top_btn_color = get_theme_mod('lz_computer_repair_top_btn_color');
	$lz_computer_repair_top_btnbg_color = get_theme_mod('lz_computer_repair_top_btnbg_color');
	if ( $lz_computer_repair_top_btn_color != '') {
		$lz_computer_repair_custom_style .=' .article_content .read-btn a, .quote-btn a {';
			$lz_computer_repair_custom_style .=' color:'.esc_attr($lz_computer_repair_top_btn_color).'; background-color:'.esc_attr($lz_computer_repair_top_btnbg_color).';';
		$lz_computer_repair_custom_style .=' }';
	}

	$lz_computer_repair_top_bg_color = get_theme_mod('lz_computer_repair_top_bg_color');
	if ( $lz_computer_repair_top_bg_color != '') {
		$lz_computer_repair_custom_style .=' .top-header {';
			$lz_computer_repair_custom_style .=' background-color:'.esc_attr($lz_computer_repair_top_bg_color).';';
		$lz_computer_repair_custom_style .=' }';
	}

	$lz_computer_repair_bottom_bg_color = get_theme_mod('lz_computer_repair_bottom_bg_color');
	if ( $lz_computer_repair_bottom_bg_color != '') {
		$lz_computer_repair_custom_style .=' .menu-section {';
			$lz_computer_repair_custom_style .=' background-color:'.esc_attr($lz_computer_repair_bottom_bg_color).';';
		$lz_computer_repair_custom_style .=' }';
	}

	//Menu animation
	$lz_computer_repair_dropdown_anim = get_theme_mod('lz_computer_repair_dropdown_anim');

	if ( $lz_computer_repair_dropdown_anim != '') {
		$lz_computer_repair_custom_style .=' .nav-menu ul ul {';
			$lz_computer_repair_custom_style .=' animation:'.esc_attr($lz_computer_repair_dropdown_anim).' 1s ease;';
		$lz_computer_repair_custom_style .=' }';
	}

	//Slider color
	$lz_computer_repair_slider_title_font_size = get_theme_mod('lz_computer_repair_slider_title_font_size');
	if( $lz_computer_repair_slider_title_font_size != ''){
		$lz_computer_repair_custom_style .=' #slider .inner_carousel h1 {';
			$lz_computer_repair_custom_style .=' font-size: '.esc_attr($lz_computer_repair_slider_title_font_size).'px;';
		$lz_computer_repair_custom_style .=' }';
	}

	$lz_computer_repair_slider_text_font_size = get_theme_mod('lz_computer_repair_slider_text_font_size');
	if( $lz_computer_repair_slider_text_font_size != ''){
		$lz_computer_repair_custom_style .=' #slider .inner_carousel p {';
			$lz_computer_repair_custom_style .=' font-size: '.esc_attr($lz_computer_repair_slider_text_font_size).'px;';
		$lz_computer_repair_custom_style .=' }';
	}

	$lz_computer_repair_slider_opacity = get_theme_mod('lz_computer_repair_slider_opacity');
	if ( $lz_computer_repair_slider_opacity != '') {
		$lz_computer_repair_custom_style .=' #slider img {';
			$lz_computer_repair_custom_style .=' opacity:'.esc_attr($lz_computer_repair_slider_opacity).';';
		$lz_computer_repair_custom_style .=' }';
	}

	$lz_computer_repair_slider_color = get_theme_mod('lz_computer_repair_slider_color');
	if ( $lz_computer_repair_slider_color != '') {
		$lz_computer_repair_custom_style .=' #slider .inner_carousel p {';
			$lz_computer_repair_custom_style .=' color:'.esc_attr($lz_computer_repair_slider_color).';';
		$lz_computer_repair_custom_style .=' }';
	}

	$lz_computer_repair_slider_text_color = get_theme_mod('lz_computer_repair_slider_text_color');
	if ( $lz_computer_repair_slider_text_color != '') {
		$lz_computer_repair_custom_style .=' #slider .inner_carousel p {';
			$lz_computer_repair_custom_style .=' color:'.esc_attr($lz_computer_repair_slider_text_color).';';
		$lz_computer_repair_custom_style .=' }';
	}

	$lz_computer_repair_slider_btn_color = get_theme_mod('lz_computer_repair_slider_btn_color');
	if ( $lz_computer_repair_slider_btn_color != '') {
		$lz_computer_repair_custom_style .=' #slider .read-btn a {';
			$lz_computer_repair_custom_style .=' color:'.esc_attr($lz_computer_repair_slider_btn_color).';';
		$lz_computer_repair_custom_style .=' }';
	}

	$lz_computer_repair_slider_btnbg_color = get_theme_mod('lz_computer_repair_slider_btnbg_color');
	if ( $lz_computer_repair_slider_btnbg_color != '') {
		$lz_computer_repair_custom_style .=' #slider .read-btn a:before {';
			$lz_computer_repair_custom_style .=' background-color:'.esc_attr($lz_computer_repair_slider_btnbg_color).';';
		$lz_computer_repair_custom_style .=' }';
	}

	//Service color
	$lz_computer_repair_service_title_font_size = get_theme_mod('lz_computer_repair_service_title_font_size');
	if( $lz_computer_repair_service_title_font_size != ''){
		$lz_computer_repair_custom_style .=' #our_services h2 {';
			$lz_computer_repair_custom_style .=' font-size: '.esc_attr($lz_computer_repair_service_title_font_size).'px;';
		$lz_computer_repair_custom_style .=' }';
	}

	$lz_computer_repair_service_font_size = get_theme_mod('lz_computer_repair_service_font_size');
	if( $lz_computer_repair_service_font_size != ''){
		$lz_computer_repair_custom_style .=' #our_services h3 a {';
			$lz_computer_repair_custom_style .=' font-size: '.esc_attr($lz_computer_repair_service_font_size).'px;';
		$lz_computer_repair_custom_style .=' }';
	}

	$lz_computer_repair_service_text_font_size = get_theme_mod('lz_computer_repair_service_text_font_size');
	if( $lz_computer_repair_service_text_font_size != ''){
		$lz_computer_repair_custom_style .=' #our_services p {';
			$lz_computer_repair_custom_style .=' font-size: '.esc_attr($lz_computer_repair_service_text_font_size).'px;';
		$lz_computer_repair_custom_style .=' }';
	}

	$lz_computer_repair_service_img_size = get_theme_mod('lz_computer_repair_service_img_size');

	if( $lz_computer_repair_service_img_size != ''){
		$lz_computer_repair_custom_style .=' .service-section img {';
			$lz_computer_repair_custom_style .=' width: '.esc_attr($lz_computer_repair_service_img_size).'px; height: '.esc_attr($lz_computer_repair_service_img_size).'px;';
		$lz_computer_repair_custom_style .=' }';
	}

	$lz_computer_repair_service_color = get_theme_mod('lz_computer_repair_service_color');

	if ( $lz_computer_repair_service_color != '') {
		$lz_computer_repair_custom_style .=' #our_services h2 {';
			$lz_computer_repair_custom_style .=' color:'.esc_attr($lz_computer_repair_service_color).';';
		$lz_computer_repair_custom_style .=' }';
	}

	$lz_computer_repair_service_box_title_color = get_theme_mod('lz_computer_repair_service_box_title_color');

	if ( $lz_computer_repair_service_box_title_color != '') {
		$lz_computer_repair_custom_style .=' #our_services h3 a {';
			$lz_computer_repair_custom_style .=' color:'.esc_attr($lz_computer_repair_service_box_title_color).';';
		$lz_computer_repair_custom_style .=' }';
	}

	$lz_computer_repair_service_box_text_color = get_theme_mod('lz_computer_repair_service_box_text_color');

	if ( $lz_computer_repair_service_box_text_color != '') {
		$lz_computer_repair_custom_style .=' #our_services p {';
			$lz_computer_repair_custom_style .=' color:'.esc_attr($lz_computer_repair_service_box_text_color).';';
		$lz_computer_repair_custom_style .=' }';
	}

	$lz_computer_repair_service_boxbg_color = get_theme_mod('lz_computer_repair_service_boxbg_color');

	if ( $lz_computer_repair_service_boxbg_color != '') {
		$lz_computer_repair_custom_style .=' #our_services .service-section {';
			$lz_computer_repair_custom_style .=' background-color:'.esc_attr($lz_computer_repair_service_boxbg_color).';';
		$lz_computer_repair_custom_style .=' }';
	}

	$lz_computer_repair_service_box_hover_bdr_color = get_theme_mod('lz_computer_repair_service_box_hover_bdr_color');

	if ( $lz_computer_repair_service_box_hover_bdr_color != '') {
		$lz_computer_repair_custom_style .=' #our_services .service-section:after, #our_services .service-section:before {';
			$lz_computer_repair_custom_style .=' background-color:'.esc_attr($lz_computer_repair_service_box_hover_bdr_color).';';
		$lz_computer_repair_custom_style .=' }';
	}

	//footer css
	$lz_computer_repair_copyright_text_color = get_theme_mod('lz_computer_repair_copyright_text_color');
	if ( $lz_computer_repair_copyright_text_color != '') {
		$lz_computer_repair_custom_style .=' .site-info p {';
			$lz_computer_repair_custom_style .=' color:'.esc_attr($lz_computer_repair_copyright_text_color).';';
		$lz_computer_repair_custom_style .=' }';
	}

	$lz_computer_repair_copyright_bg_color = get_theme_mod('lz_computer_repair_copyright_bg_color');
	if ( $lz_computer_repair_copyright_bg_color != '') {
		$lz_computer_repair_custom_style .=' .copyright {';
			$lz_computer_repair_custom_style .=' color:'.esc_attr($lz_computer_repair_copyright_bg_color).';';
		$lz_computer_repair_custom_style .=' }';
	}