<?php
/**
 * the-computer-repair functions and definitions
 *
 * @package The Computer Repair
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */

/* Breadcrumb Begin */
function the_computer_repair_the_breadcrumb() {
	if (!is_home()) {
		echo '<a href="';
			echo esc_url( home_url() );
		echo '">';
			bloginfo('name');
		echo "</a> ";
		if (is_category() || is_single()) {
			the_category(',');
			if (is_single()) {
				echo "<span> ";
					the_title();
				echo "</span> ";
			}
		} elseif (is_page()) {
			echo "<span> ";
				the_title();
		}
	}
} 

/* Theme Setup */
if ( ! function_exists( 'the_computer_repair_setup' ) ) :

function the_computer_repair_setup() {

	$GLOBALS['content_width'] = apply_filters( 'the_computer_repair_content_width', 640 );

	load_theme_textdomain( 'the-computer-repair', get_template_directory() . '/languages' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'woocommerce' );
	add_theme_support( 'wc-product-gallery-zoom' );
	add_theme_support( 'wc-product-gallery-slider' );
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'align-wide' );
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'html5', array( 'comment-list', 'search-form', 'comment-form', ) );
	add_theme_support( 'custom-logo', array(
		'height'      => 240,
		'width'       => 240,
		'flex-height' => true,
	) );
	add_image_size('the-computer-repair-homepage-thumb',240,145,true);

    register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'the-computer-repair' ),
	) );

	add_theme_support( 'custom-background', array(
		'default-color' => 'ffffff'
	) );

	//selective refresh for sidebar and widgets
	add_theme_support( 'customize-selective-refresh-widgets' );

	/*
	 * This theme styles the visual editor to resemble the theme style,
	 * specifically font, colors, icons, and column width.
	 */
	add_editor_style( array( 'css/editor-style.css', the_computer_repair_font_url() ) );

	// Theme Activation Notice
	global $pagenow;

	if ( is_admin() && $pagenow === 'themes.php' && (!isset($_GET['page']) || $_GET['page'] !== 'the_computer_repair_guide')
) {

		add_action('admin_notices', 'the_computer_repair_activation_notice');
	}
}
endif;

add_action( 'after_setup_theme', 'the_computer_repair_setup' );

// Notice after Theme Activation

function the_computer_repair_activation_notice() {

	$the_computer_repair_meta = get_option( 'the_computer_repair_admin_notice' );

	if (!$the_computer_repair_meta) {
			echo '<div id="the-computer-repair-welcome-notice" class="notice notice-success is-dismissible welcome-notice">';
			echo '<div class="notice-row">';
				echo '<div class="notice-img2">';
					echo '<img src="' . esc_url( get_template_directory_uri() . '/screenshot.png' ) . '" width="180" alt="' . esc_attr__( 'The Computer Repair', 'the-computer-repair' ) . '" />';
				echo '</div>';	

				echo '<div class="notice-text">';
					echo '<p class="welcome-text1">'. esc_html__( 'Thanks For Installing The Computer Repair, You Rock !', 'the-computer-repair' ) .'</p>';
					echo '<p class="welcome-text3">'. esc_html__( 'Take benefit of a variety of features, functionalities, elements, and an exclusive set of customization options to build your own professional charity website. Please Click on the link below to know the theme setup information.', 'the-computer-repair' ) .'</p>';
					echo '<span class="import-btn"><a href="'. esc_url( admin_url( 'themes.php?page=the_computer_repair_guide' ) ) .'" class="button button-primary">'. esc_html__( 'Import Demo', 'the-computer-repair' ) .'</a></span>';
					echo '<span class="demo-btn"><a href="'. esc_url( 'https://demos.buywptemplates.com/bwt-computer-repair-pro/' ) .'" class="button button-primary" target=_blank>'. esc_html__( 'Pro Demo', 'the-computer-repair' ) .'</a></span>';
					
					echo '<span class="bundle-btn"><a href="'. esc_url( 'https://demos.buywptemplates.com/demo/docs/free-the-computer-repair/' ) .'" class="button button-primary" target=_blank>'. esc_html__( 'Free Doc', 'the-computer-repair' ) .'</a></span>';
					echo '<span class="upgrade-btn"><a href="'. esc_url( 'https://www.buywptemplates.com/products/computer-repair-wordpress-theme' ) .'" class="button button-primary" target=_blank>'. esc_html__( 'Upgrade To Pro', 'the-computer-repair' ) .'</a></span>';
				echo '</div>';
			echo '</div>';	
		echo '</div>';
	}
}


/* Theme Widgets Setup */
function the_computer_repair_widgets_init() {

	register_sidebar( array(
		'name'          => __( 'Blog Sidebar', 'the-computer-repair' ),
		'description'   => __( 'Appears on blog page sidebar', 'the-computer-repair' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Page Sidebar', 'the-computer-repair' ),
		'description'   => __( 'Appears on page sidebar', 'the-computer-repair' ),
		'id'            => 'sidebar-2',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Sidebar 3', 'the-computer-repair' ),
		'description'   => __( 'Appears on page sidebar', 'the-computer-repair' ),
		'id'            => 'sidebar-3',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer Navigation 1', 'the-computer-repair' ),
		'description'   => __( 'Appears on footer 1', 'the-computer-repair' ),
		'id'            => 'footer-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer Navigation 2', 'the-computer-repair' ),
		'description'   => __( 'Appears on footer 2', 'the-computer-repair' ),
		'id'            => 'footer-2',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer Navigation 3', 'the-computer-repair' ),
		'description'   => __( 'Appears on footer 3', 'the-computer-repair' ),
		'id'            => 'footer-3',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer Navigation 4', 'the-computer-repair' ),
		'description'   => __( 'Appears on footer 4', 'the-computer-repair' ),
		'id'            => 'footer-4',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Social Media', 'the-computer-repair' ),
		'description'   => __( 'Appears on Contact section', 'the-computer-repair' ),
		'id'            => 'social-links',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Shop Page Sidebar', 'the-computer-repair' ),
		'description'   => __( 'Appears on shop page', 'the-computer-repair' ),
		'id'            => 'woocommerce-shop-sidebar',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Single Product Sidebar', 'the-computer-repair' ),
		'description'   => __( 'Appears on single product page', 'the-computer-repair' ),
		'id'            => 'woocommerce-single-sidebar',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer Social Icon', 'the-computer-repair' ),
		'description'   => __( 'Appears on right side footer', 'the-computer-repair' ),
		'id'            => 'footer-icon',
		'before_widget' => '<aside id="%1$s" class="widget mb-5 p-3 %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title px-3 py-2">',
		'after_title'   => '</h3>',
	) );

}
add_action( 'widgets_init', 'the_computer_repair_widgets_init' );

/* Theme Font URL */
function the_computer_repair_font_url() {
	$font_family   = array(
		'ABeeZee:ital@0;1',
	 	'Abril Fatface',
	 	'Acme',
	 	'Alfa Slab One',
	 	'Allura',
	 	'Anton',
	 	'Architects Daughter',
	 	'Archivo:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
	 	'Arimo:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700',
	 	'Arsenal:ital,wght@0,400;0,700;1,400;1,700',
	 	'Arvo:ital,wght@0,400;0,700;1,400;1,700',
	 	'Alegreya Sans:ital,wght@0,100;0,300;0,400;0,500;0,700;0,800;0,900;1,100;1,300;1,400;1,500;1,700;1,800;1,900',
	 	'Asap:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
	 	'Assistant:wght@200;300;400;500;600;700;800',
	 	'Averia Serif Libre:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700',
	 	'Bangers',
	 	'Boogaloo',
	 	'Bad Script',
	 	'Barlow Condensed:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
	 	'Bitter:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
	 	'Bree Serif',
	 	'BenchNine:wght@300;400;700',
	 	'Cabin:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700',
	 	'Cardo:ital,wght@0,400;0,700;1,400',
	 	'Courgette',
	 	'Caveat Brush',
	 	'Cherry Swash:wght@400;700',
	 	'Cormorant Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700',
	 	'Crimson Text:ital,wght@0,400;0,600;0,700;1,400;1,600;1,700',
	 	'Cuprum:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700',
	 	'Cookie',
	 	'Coming Soon',
	 	'Charm:wght@400;700',
	 	'Chewy',
	 	'Days One',
	 	'DM Serif Display:ital@0;1',
	 	'Dosis:wght@200;300;400;500;600;700;800',
	 	'EB Garamond:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,500;1,600;1,700;1,800',
	 	'Economica:ital,wght@0,400;0,700;1,400;1,700',
	 	'Exo 2:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,400;1,500;1,600;1,700;1,800;1,900',
	 	'Fira Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
	 	'Fredoka One',
	 	'Fjalla One',
	 	'Frank Ruhl Libre:wght@300;400;500;700;900',
	 	'Gabriela',
	 	'Gloria Hallelujah',
	 	'Great Vibes',
	 	'Handlee',
	 	'Hammersmith One',
	 	'Heebo:wght@100;200;300;400;500;600;700;800;900',
	 	'Hind:wght@300;400;500;600;700',
	 	'Inconsolata:wght@200;300;400;500;600;700;800;900',
	 	'Indie Flower',
	 	'IM Fell English SC',
	 	'Julius Sans One',
	 	'Jomhuria',
	 	'Josefin Slab:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700',
	 	'Josefin Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700',
	 	'Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
	 	'Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
	 	'Kaushan Script',
	 	'Krub:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,500;1,600;1,700',
	 	'Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900',
	 	'Lora:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700',
	 	'Libre Baskerville:ital,wght@0,400;0,700;1,400',
	 	'Literata:ital,opsz,wght@0,7..72,200;0,7..72,300;0,7..72,400;0,7..72,500;0,7..72,600;0,7..72,700;0,7..72,800;0,7..72,900;1,7..72,200;1,7..72,300;1,7..72,400;1,7..72,500;1,7..72,600;1,7..72,700;1,7..72,800;1,7..72,900',
	 	'Lobster',
	 	'Lobster Two:ital,wght@0,400;0,700;1,400;1,700',
	 	'Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900',
	 	'Marck Script',
	 	'Marcellus',
	 	'Merienda One',
	 	'Monda:wght@400;700',
	 	'Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
	 	'Mulish:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;0,1000;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900;1,1000',
	 	'Noto Serif:ital,wght@0,400;0,700;1,400;1,700',
	 	'Nunito Sans:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900',
	 	'Open Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800',
	 	'Overpass:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
	 	'Overpass Mono:wght@300;400;500;600;700',
	 	'Oxygen:wght@300;400;700',
	 	'Oswald:wght@200;300;400;500;600;700',
	 	'Orbitron:wght@400;500;600;700;800;900',
	 	'Patua One',
	 	'Pacifico',
	 	'Padauk:wght@400;700',
	 	'Playball',
	 	'Playfair Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900',
	 	'Prompt:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
	 	'PT Sans:ital,wght@0,400;0,700;1,400;1,700',
	 	'PT Serif:ital,wght@0,400;0,700;1,400;1,700',
	 	'Philosopher:ital,wght@0,400;0,700;1,400;1,700',
	 	'Permanent Marker',
	 	'Poiret One',
	 	'Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
	 	'Prata',
	 	'Quicksand:wght@300;400;500;600;700',
	 	'Quattrocento Sans:ital,wght@0,400;0,700;1,400;1,700',
	 	'Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
	 	'Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
	 	'Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900',
	 	'Roboto Condensed:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700',
	 	'Rokkitt:wght@100;200;300;400;500;600;700;800;900',
	 	'Ropa Sans:ital@0;1',
	 	'Russo One',
	 	'Righteous',
	 	'Saira:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
	 	'Satisfy',
	 	'Sen:wght@400;700;800',
	 	'Source Sans Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700;1,900',
	 	'Shadows Into Light Two',
	 	'Shadows Into Light',
	 	'Sacramento',
	 	'Sail',
	 	'Shrikhand',
	 	'Staatliches',
	 	'Stylish',
	 	'Tangerine:wght@400;700',
	 	'Titillium Web:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700',
	 	'Trirong:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
	 	'Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700',
	 	'Unica One',
	 	'VT323',
	 	'Varela Round',
	 	'Vampiro One',
	 	'Vollkorn:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900',
	 	'Volkhov:ital,wght@0,400;0,700;1,400;1,700',
	 	'Work Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
	 	'Yanone Kaffeesatz:wght@200;300;400;500;600;700',
	 	'ZCOOL XiaoWei'
	);

	$query_args = array(
		'family'	=> rawurlencode(implode('|',$font_family)),
	);
	$font_url = add_query_arg($query_args,'//fonts.googleapis.com/css');
	return $font_url;
	$contents = the_computer_repair_wptt_get_webfont_url( esc_url_raw( $fonts_url ) );
}

/* Theme enqueue scripts */
function the_computer_repair_scripts() {
	wp_enqueue_style( 'the-computer-repair-font', the_computer_repair_font_url(), array() );
	wp_enqueue_style( 'the-computer-repair-block-patterns-style-frontend', get_theme_file_uri('/inc/block-patterns/css/block-frontend.css') );
	wp_enqueue_style( 'the-computer-repair-block-style', get_theme_file_uri('/assets/css/blocks.css') );
	wp_enqueue_style( 'bootstrap-style', get_template_directory_uri().'/assets/css/bootstrap.css' );
	wp_enqueue_style( 'the-computer-repair-basic-style', get_stylesheet_uri() );
	/* Inline style sheet */
	require get_parent_theme_file_path( '/inline-style.php' );
	wp_add_inline_style( 'the-computer-repair-basic-style',$the_computer_repair_custom_css );
	wp_enqueue_style( 'font-awesome-css', get_template_directory_uri().'/assets/css/fontawesome-all.css' );
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.js', array('jquery') ,'',true);
	wp_enqueue_script( 'jquery-superfish-js', get_template_directory_uri() . '/assets/js/jquery.superfish.js', array('jquery') ,'',true);
	wp_enqueue_script( 'the-computer-repair-custom-scripts', get_template_directory_uri() . '/assets/js/custom.js', array('jquery') );

	if (get_theme_mod('animation', true) == true){
		wp_enqueue_script( 'jquery-wow', get_template_directory_uri() . '/assets/js/wow.js', array('jquery') );
		wp_enqueue_style( 'animate-css', get_template_directory_uri().'/assets/css/animate.css' );
	}

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	/* Enqueue the Dashicons script */
	wp_enqueue_style( 'dashicons' );
}
add_action( 'wp_enqueue_scripts', 'the_computer_repair_scripts' );

/**
 * Enqueue block editor style
 */
function the_computer_repair_block_editor_styles() {
	wp_enqueue_style( 'the-computer-repair-font', the_computer_repair_font_url(), array() );
    wp_enqueue_style( 'the-computer-repair-block-patterns-style-editor', get_theme_file_uri( '/inc/block-patterns/css/block-editor.css' ), false, '1.0', 'all' );
    wp_enqueue_style( 'bootstrap-style', get_template_directory_uri().'/assets/css/bootstrap.css' );
}
add_action( 'enqueue_block_editor_assets', 'the_computer_repair_block_editor_styles' );

function the_computer_repair_sanitize_dropdown_pages( $page_id, $setting ) {
  	// Ensure $input is an absolute integer.
  	$page_id = absint( $page_id );
  	// If $page_id is an ID of a published page, return it; otherwise, return the default.
  	return ( 'publish' == get_post_status( $page_id ) ? $page_id : $setting->default );
}

/*radio button sanitization*/
function the_computer_repair_sanitize_choices( $input, $setting ) {
    global $wp_customize;
    $control = $wp_customize->get_control( $setting->id );
    if ( array_key_exists( $input, $control->choices ) ) {
        return $input;
    } else {
        return $setting->default;
    }
}

function the_computer_repair_sanitize_float( $input ) {
	return filter_var($input, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
}

function the_computer_repair_sanitize_number_range( $number, $setting ) {
	$number = absint( $number );
	$atts = $setting->manager->get_control( $setting->id )->input_attrs;
	$min = ( isset( $atts['min'] ) ? $atts['min'] : $number );
	$max = ( isset( $atts['max'] ) ? $atts['max'] : $number );
	$step = ( isset( $atts['step'] ) ? $atts['step'] : 1 );
	return ( $min <= $number && $number <= $max && is_int( $number / $step ) ? $number : $setting->default );
}

function the_computer_repair_sanitize_phone_number( $phone ) {
	return preg_replace( '/[^\d+]/', '', $phone );
}

/* Excerpt Limit Begin */
function the_computer_repair_string_limit_words($string, $word_limit) {
	$words = explode(' ', $string, ($word_limit + 1));
	if(count($words) > $word_limit)
	array_pop($words);
	return implode(' ', $words);
}



// Change number or products per row to 3
add_filter('loop_shop_columns', 'the_computer_repair_loop_columns');
	if (!function_exists('the_computer_repair_loop_columns')) {
	function the_computer_repair_loop_columns() {
		return get_theme_mod( 'the_computer_repair_products_per_row', '3' );
		// 3 products per row
	}
}

//Change number of products that are displayed per page (shop page)
add_filter( 'loop_shop_per_page', 'the_computer_repair_products_per_page' );
function the_computer_repair_products_per_page( $cols ) {
  	return  get_theme_mod( 'the_computer_repair_products_per_page',9);
}

function the_computer_repair_logo_title_hide_show(){
	if(get_theme_mod('the_computer_repair_logo_title_hide_show') == '1' ) {
		return true;
	}
	return false;
}

function the_computer_repair_tagline_hide_show(){
	if(get_theme_mod('the_computer_repair_tagline_hide_show',0) == '1' ) {
		return true;
	}
	return false;
}

add_action( 'wp_ajax_the_computer_repair_reset_all_settings', 'the_computer_repair_reset_all_settings' );
function the_computer_repair_reset_all_settings() {
	remove_theme_mod( 'the_computer_repair_footer_text' );
	wp_send_json_success(
		array(
			'success' => true,
			'message' => "Reset Completed",
		)
	);
}

//Active Callback
function the_computer_repair_default_slider(){
	if(get_theme_mod('the_computer_repair_slider_type', 'Default slider') == 'Default slider' ) {
		return true;
	}
	return false;
}

function the_computer_repair_advance_slider(){
	if(get_theme_mod('the_computer_repair_slider_type', 'Default slider') == 'Advance slider' ) {
		return true;
	}
	return false;
}

function the_computer_repair_blog_post_featured_image_dimension(){
	if(get_theme_mod('the_computer_repair_blog_post_featured_image_dimension') == 'custom' ) {
		return true;
	}
	return false;
}


// edit

if (!function_exists('the_computer_repair_edit_link')) :

    function the_computer_repair_edit_link($view = 'default')
    {
        global $post;
            edit_post_link(
                sprintf(
                    wp_kses(
                    /* translators: %s: Name of current post. Only visible to screen readers */
                        __('Edit <span class="screen-reader-text">%s</span>', 'the-computer-repair'),
                        array(
                            'span' => array(
                                'class' => array(),
                            ),
                        )
                    ),
                    get_the_title()
                ),
                '<span class="edit-link"><i class="fas fa-edit"></i>',
                '</span>'
            );

    }
endif;

/* Implement the Custom Header feature. */
require get_template_directory() . '/inc/custom-header.php';

function the_computer_repair_init_setup() {
	/* Custom template tags for this theme. */
	require get_template_directory() . '/inc/template-tags.php';

	/* Customizer additions. */
	require get_template_directory() . '/inc/customizer.php';

	/* Social Icons */
	require get_template_directory() . '/inc/themes-widgets/social-icon.php';

	/* About US */
	require get_template_directory() . '/inc/themes-widgets/about-us-widget.php';

	/* Contact Us */
	require get_template_directory() . '/inc/themes-widgets/contact-us-widget.php';

	/* Typography */
	require get_template_directory() . '/inc/typography/ctypo.php';

	/* Get Started */
	require get_template_directory() . '/inc/getstart/getstart.php';

	/* Block Pattern */
	require get_template_directory() . '/inc/block-patterns/block-patterns.php';

	/* TGM Plugin Activation */
	require get_template_directory() . '/inc/tgm/tgm.php';

	/* Webfonts */
	require get_template_directory() . '/inc/wptt-webfont-loader.php';

	//define
	define('THE_COMPUTER_REPAIR_FREE_THEME_DOC',__('https://demos.buywptemplates.com/demo/docs/free-the-computer-repair/','the-computer-repair'));
	define('THE_COMPUTER_REPAIR_SUPPORT',__('https://wordpress.org/support/theme/the-computer-repair/','the-computer-repair'));
	define('THE_COMPUTER_REPAIR_PRO_SUPPORT',__('https://www.buywptemplates.com/pages/community','the-computer-repair'));
	define('THE_COMPUTER_REPAIR_REVIEW',__('https://wordpress.org/support/theme/the-computer-repair/reviews/','the-computer-repair'));
	define('THE_COMPUTER_REPAIR_BUY_NOW',__('https://www.buywptemplates.com/products/computer-repair-wordpress-theme','the-computer-repair'));
	define('THE_COMPUTER_REPAIR_LIVE_DEMO',__('https://demos.buywptemplates.com/bwt-computer-repair-pro/','the-computer-repair'));
	define('THE_COMPUTER_REPAIR_PRO_DOC',__('https://demos.buywptemplates.com/demo/docs/computer-repair-pro/','the-computer-repair'));
	define('THE_COMPUTER_REPAIR_FAQ',__('https://www.vwthemes.com/faqs/','the-computer-repair'));
	define('THE_COMPUTER_REPAIR_CHILD_THEME',__('https://developer.wordpress.org/themes/advanced-topics/child-themes/','the-computer-repair'));
	define('THE_COMPUTER_REPAIR_CONTACT',__('https://www.vwthemes.com/contact/','the-computer-repair'));
	define('THE_COMPUTER_REPAIR_CREDIT',__('https://www.buywptemplates.com/products/free-computer-repair-wordpress-theme','the-computer-repair'));

	if ( ! function_exists( 'the_computer_repair_credit' ) ) {
		function the_computer_repair_credit(){
			echo "<a href=".esc_url(THE_COMPUTER_REPAIR_CREDIT)." target='_blank'>".esc_html__('Computer Repair WordPress Theme','the-computer-repair')."</a>";
		}
	}
}
add_action( 'after_setup_theme', 'the_computer_repair_init_setup' );

// Admin notice code START
function the_computer_repair_dismissed_notice() {
	update_option( 'the_computer_repair_admin_notice', true );
}
add_action( 'wp_ajax_the_computer_repair_dismissed_notice', 'the_computer_repair_dismissed_notice' );

//After Switch theme function
add_action('after_switch_theme', 'the_computer_repair_getstart_setup_options');
function the_computer_repair_getstart_setup_options () {
    update_option('the_computer_repair_admin_notice', false );
}
// Admin notice code END
