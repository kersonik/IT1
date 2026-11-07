<?php
//about theme info
add_action( 'admin_menu', 'the_computer_repair_gettingstarted' );
function the_computer_repair_gettingstarted() {
	add_theme_page( esc_html__('About The Computer Repair ', 'the-computer-repair'), esc_html__('Theme Demo Import', 'the-computer-repair'), 'edit_theme_options', 'the_computer_repair_guide', 'the_computer_repair_mostrar_guide');
}

// Add a Custom CSS file to WP Admin Area
function the_computer_repair_admin_theme_style() {
	wp_enqueue_style('the-computer-repair-custom-admin-style', esc_url(get_template_directory_uri()) . '/inc/getstart/getstart.css');
	wp_enqueue_script('the-computer-repair-tabs', esc_url(get_template_directory_uri()) . '/inc/getstart/js/tab.js');

	// Admin notice code START
	wp_register_script('the-computer-repair-notice', esc_url(get_template_directory_uri()) . '/inc/getstart/js/notice.js', array('jquery'), time(), true);
	wp_enqueue_script('the-computer-repair-notice');
	// Admin notice code END
}
add_action('admin_enqueue_scripts', 'the_computer_repair_admin_theme_style');

//guidline for about theme
function the_computer_repair_mostrar_guide() { 
	//custom function about theme customizer
	$the_computer_repair_return = add_query_arg( array()) ;
	$the_computer_repair_theme = wp_get_theme( 'the-computer-repair' );
?>

<div class="wrap getting-started">
	<div class="getting-started__header">
	    <div>
            <h2 class="tgmpa-notice-warning"></h2>
        </div>
	</div>
	<div class="tab-sec">
		<div class="tab">
			<button role="tab" class="tablinks home" onclick="the_computer_repair_openCity(event, 'bwp_getstart')"><?php esc_html_e( 'Getting Started', 'the-computer-repair' ); ?></button>
			<button role="tab" class="tablinks" onclick="the_computer_repair_openCity(event, 'bwp_setup')"><?php esc_html_e( 'Free Theme Information', 'the-computer-repair' ); ?></button>
			<button role="tab" class="tablinks" onclick="the_computer_repair_openCity(event, 'bwp_premium_info')"><?php esc_html_e( 'Premium Theme Information', 'the-computer-repair' ); ?></button>
			<a class="tablinks tablinks-demo" role="tab" href="<?php echo esc_url( THE_COMPUTER_REPAIR_LIVE_DEMO ); ?>" target="_blank">
				<?php esc_html_e( 'Live Demo', 'the-computer-repair' ); ?>
			</a>
			<a class="tablinks tablinks-pro" role="tab" href="<?php echo esc_url( THE_COMPUTER_REPAIR_BUY_NOW ); ?>" target="_blank">
				<?php esc_html_e( 'Buy Pro', 'the-computer-repair' ); ?>
			</a>
		</div>
		<div  id="bwp_getstart" class="tabcontent">
			<div class="row">
				<div class="col-md-5 intro">
					<div class="pad-box">
						<h2><?php esc_html_e( 'Welcome to The Computer Repair ', 'the-computer-repair' ); ?>
						<span><?php esc_html_e( 'Version: ', 'the-computer-repair' ); ?><?php echo esc_html($the_computer_repair_theme['Version']);?></span>
						</h2>
						<span class="intro__version"><?php esc_html_e( 'Congratulations! You are about to use the most easy to use and flexible WordPress theme.', 'the-computer-repair' ); ?>
						</span>
						<div class="powered-by">
							
							<div class="demo-content">
								<?php
									/* Demo Import */
									require get_parent_theme_file_path( '/inc/getstart/demo-content.php' );
								?>
							</div>
							<div id="demo-import-loader">
								<img src="<?php echo esc_url(get_template_directory_uri() . '/inc/getstart/images/spinner.gif'); ?>" alt="<?php echo esc_attr( 'Loading...', 'the-computer-repair'); ?>" />
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-7">
					<div class="install-plugins">
						<img src="<?php echo esc_url(get_template_directory_uri() . '/inc/getstart/images/responsive-free.png'); ?>" alt="<?php echo esc_attr( 'responsive-image', 'the-computer-repair'); ?>" />
					</div>
				</div>
			</div>
			<div class="dashboard__blocks">
				<div class="row">
					<div class="col-md-3">
						<h3><?php esc_html_e( 'Get Support','the-computer-repair'); ?></h3>
						<ol>
							<li><a target="_blank" href="<?php echo esc_url( THE_COMPUTER_REPAIR_SUPPORT ); ?>"><?php esc_html_e( 'Free Theme Support','the-computer-repair'); ?></a></li>
							<li><a target="_blank" href="<?php echo esc_url( THE_COMPUTER_REPAIR_PRO_SUPPORT ); ?>"><?php esc_html_e( 'Premium Theme Support','the-computer-repair'); ?></a></li>
						</ol>
					</div>
					<div class="col-md-3">
						<h3><?php esc_html_e( 'Getting Started','the-computer-repair'); ?></h3>
						<ol>
							<li><?php esc_html_e( 'Start','the-computer-repair'); ?> <a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e( 'Customizing','the-computer-repair'); ?></a> <?php esc_html_e( 'your website.','the-computer-repair'); ?> </li>
						</ol>
					</div>
					<div class="col-md-3">
						<h3><?php esc_html_e( 'Help Docs','the-computer-repair'); ?></h3>
						<ol>
							<li><a target="_blank" href="<?php echo esc_url( THE_COMPUTER_REPAIR_FREE_THEME_DOC ); ?>"><?php esc_html_e( 'Free Theme Documentation','the-computer-repair'); ?></a></li>
							<li><a target="_blank" href="<?php echo esc_url( THE_COMPUTER_REPAIR_PRO_DOC ); ?>"><?php esc_html_e( 'Premium Theme Documentation','the-computer-repair'); ?></a></li>
						</ol>
					</div>
					<div class="col-md-3">
						<h3><?php esc_html_e( 'Buy Premium','the-computer-repair'); ?></h3>
						<ol>
							<a href="<?php echo esc_url( THE_COMPUTER_REPAIR_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Buy Pro', 'the-computer-repair'); ?></a>
						</ol>
					</div>
				</div>
			</div>
		</div>
		<div  id="bwp_setup" class="tabcontent">
			<h2 class="tg-docs-section intruction-title" id="section-4"><?php esc_html_e( '1) Setup The Computer Repair Theme', 'the-computer-repair' ); ?></h2>
			<div class="row">
				<div class="theme-instruction-block col-md-7">
					<div class="pad-box">
						<p><?php esc_html_e( 'Computer repair is a WP theme in high demand as of today and has been extremely beneficial since its inception in the market for the computer repair and services. It is responsive to the core with multipurpose capabilities and is a fine tool for mobile phones, tablet, Mac, Windows. Maintenance, Desktops, Tower PCs, User Analytics, eBay, Software Programmer, gadgets, LED, Projector Repair, motherboards and chips, System Analyst, UX Service Provider, Internet Research, IT Consultant, Video Production, Database Manager video games, game consoles, graphic courses,IT services, tech support, computer repair, device maintenance, electronics, screwdriver set, magnetic repair toolkit, Cables. Data Storage, Pen Drives, consulting, training, help desk, Software Blogging, Call Center Operator IT Solutions, Data science Service, Artificial Intelligence & Machine Learning Service Infrastructure, software cleaning, junk removal, renovation, smartphone repair, tv repair, tech support, calculator, data processor, number cruncher, personal computer, free photos, pc repair, gadget store, retail, store, electronic repair, gsm repair, video camera repair, digital, handyman. Because of the features like user friendliness, CTA, personalization options, testimonial sections, stunning design, flexible and easy to use, SEO friendly, Sticky Post, optimised codes, Featured Images retina ready, Theme Options, Bootstrap framework and much more, it is a much demandable theme for the electronics fixing services as well as cellular repair center. Computer repair is interactive with customization options and secondly it is translation ready making it a preferable choice for the laptop repair service companies and for the companies that are into the business of home repair. If such companies want the online presence and excellence in business, Computer repair theme will play a good role in this. It is good for all repairs like smart phone repair, desktop repair, iPad repair, tablet repair, printer repair, data recovery and game console repair. hardware industry, IT industry, appliance repair, It is very professional, clean, Multilingual friendly, RTL compatible, WooCommerce friendly and possesses design of high quality.', 'the-computer-repair' ); ?><p><br>
						<ol>
							<li><?php esc_html_e( 'Start','the-computer-repair'); ?> <a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e( 'Customizing','the-computer-repair'); ?></a> <?php esc_html_e( 'your website.','the-computer-repair'); ?> </l>
							<li><?php esc_html_e( 'The Computer Repair','the-computer-repair'); ?> <a target="_blank" href="<?php echo esc_url( THE_COMPUTER_REPAIR_FREE_THEME_DOC ); ?>"><?php esc_html_e( 'Documentation','the-computer-repair'); ?></a> </li>
						</ol>
					</div>
				</div>
				<div class="col-md-5">
					<div class="pad-box">
							<img class="logo" src="<?php echo esc_url(get_template_directory_uri() . '/inc/getstart/images/screenshot.png'); ?>"/>
					</div>
				</div>	
			</div>
		</div>
		<div class="col-md-12 text-block tabcontent"  id="bwp_premium_info">
			<h2 class="dashboard-install-title"><?php esc_html_e( '2) Premium Theme Information.','the-computer-repair'); ?></h2>
			<div class="row">
				<div class="col-md-7">
					<img src="<?php echo esc_url(get_template_directory_uri() . '/inc/getstart/images/responsive-pro.png'); ?>" alt="<?php echo esc_attr( 'responsive-image', 'the-computer-repair'); ?>">
					<div class="pad-box">
						<h3><?php esc_html_e( 'Pro Theme Description','the-computer-repair'); ?></h3>
						<p class="pad-box-p"><?php esc_html_e( 'Get the Computer Repair WordPress theme from us at affordable price and this is a very good step for the startup or for any kind of established business related to the Computer Repair or precious or semi-precious metals that include gold and diamonds. One of the best things about this theme is that it is responsive to the core apart from being multipurpose and all this a significant choice to take the Computer Repair business on the path of global expansion. With significant features like CTA, Bootstrap framework, interactive nature as well as clean code, Computer Repair WordPress theme is a preferred choice for making the gift shop or a Computer Repair store with the potential to grow. The best part of this WP theme is that it can be used for any type of online store and not just related to Computer Repair. It is also good for the online store for fashion.', 'the-computer-repair' ); ?><p>
					</div>
				</div>
				<div class="col-md-5 install-plugin-right">
					<div class="pad-box">
						<h3><?php esc_html_e( 'Pro Theme Features','the-computer-repair'); ?></h3>
						<div class="dashboard-install-benefit">
							<ul>
								<li><?php esc_html_e( 'One click demo importer','the-computer-repair'); ?></li>
								<li><?php esc_html_e( 'Global color option','the-computer-repair'); ?></li>
								<li><?php esc_html_e( 'Responsive design','the-computer-repair'); ?></li>
								<li><?php esc_html_e( 'Favicon, logo, title, and tagline customization','the-computer-repair'); ?></li>
								<li><?php esc_html_e( 'Advanced color options and color pallets','the-computer-repair'); ?></li>
								<li><?php esc_html_e( '100+ font family options','the-computer-repair'); ?></li>
								<li><?php esc_html_e( 'Simple menu option','the-computer-repair'); ?></li>
								<li><?php esc_html_e( 'SEO friendly','the-computer-repair'); ?></li>
								<li><?php esc_html_e( 'Pagination option','the-computer-repair'); ?></li>
								<li><?php esc_html_e( 'Compatible with different WordPress famous plugins like contact form 7','the-computer-repair'); ?></li>
								<li><?php esc_html_e( 'Enable-Disable options on all sections','the-computer-repair'); ?></li>
								<li><?php esc_html_e( 'Well sanitized as per WordPress standards.','the-computer-repair'); ?></li>
								<li><?php esc_html_e( 'Responsive Layout for All Devices','the-computer-repair'); ?></li>
								<li><?php esc_html_e( 'Footer customization options','the-computer-repair'); ?></li>
								<li><?php esc_html_e( 'Fully integrated with the latest font awesome','the-computer-repair'); ?></li>
								<li><?php esc_html_e( 'Background image option','the-computer-repair'); ?></li>
								<li><?php esc_html_e( 'Custom Page Templates','the-computer-repair'); ?></li>
								<li><?php esc_html_e( 'Allow To Set Site Title, Tagline, Logo','the-computer-repair'); ?></li>
								<li><?php esc_html_e( 'Sticky post & comment threads','the-computer-repair'); ?></li>
								<li><?php esc_html_e( 'Section reordering','the-computer-repair'); ?></li>
								<li><?php esc_html_e( 'Customizable home page','the-computer-repair'); ?></li>
								<li><?php esc_html_e( 'Footer widgets & editor style','the-computer-repair'); ?></li>
								<li><?php esc_html_e( 'Social media feature','the-computer-repair'); ?></li>
								<li><?php esc_html_e( 'Slider with unlimited number of slides','the-computer-repair'); ?></li>
								<li><?php esc_html_e( 'Our Cleaning Services Section','the-computer-repair'); ?></li>
								<li><?php esc_html_e( 'Testimonial Section','the-computer-repair'); ?></li>
								<li><?php esc_html_e( 'Our Team Section','the-computer-repair'); ?></li>
								<li><?php esc_html_e( 'Counter Section','the-computer-repair'); ?></li>
								<li><?php esc_html_e( 'Our Project Section','the-computer-repair'); ?></li>
								<li><?php esc_html_e( 'Pricing Plan Section','the-computer-repair'); ?></li>
								<li><?php esc_html_e( 'Computer product section','the-computer-repair'); ?></li>
								<li><?php esc_html_e( 'Why choose us section','the-computer-repair'); ?></li>
								<li><?php esc_html_e( 'Book appointment section','the-computer-repair'); ?></li>
								<li><?php esc_html_e( 'Instagram feed','the-computer-repair'); ?></li>
								<li><?php esc_html_e( 'Newsletter section','the-computer-repair'); ?></li>
								<li><?php esc_html_e( 'Blog post section','the-computer-repair'); ?></li>
								<li><?php esc_html_e( 'Contact page template','the-computer-repair'); ?></li>
								<li><?php esc_html_e( 'Shortcodes for the custom post type','the-computer-repair'); ?></li>
								<li><?php esc_html_e( 'Easily Customize WordPress Theme','the-computer-repair'); ?></li>
								<li><?php esc_html_e( 'Change site title color','the-computer-repair'); ?></li>
								<li><?php esc_html_e( 'Custom Widgets','the-computer-repair'); ?></li>										
								<li><?php esc_html_e( 'Advanced Theme Options','the-computer-repair'); ?></li>
								<li><?php esc_html_e( 'Call to Action Buttons','the-computer-repair'); ?></li>
								<li><?php esc_html_e( 'Regular Updates','the-computer-repair'); ?></li>
								<li><?php esc_html_e( 'Full-width template','the-computer-repair'); ?></li>								
								<li><?php esc_html_e( 'Sidebar Widget Area','the-computer-repair'); ?></li>	
								<li><?php esc_html_e( 'Custom Google Fonts','the-computer-repair'); ?></li>	
								<li><?php esc_html_e( 'Custom Link Colors','the-computer-repair'); ?></li>
								<li><?php esc_html_e( 'Home Page Sections','the-computer-repair'); ?></li>
								<li><?php esc_html_e( 'Custom Sections','the-computer-repair'); ?></li>
								<li><?php esc_html_e( 'GPL Compatible','the-computer-repair'); ?></li>								
								<li><?php esc_html_e( 'Excellent Core Web Vitals','the-computer-repair'); ?></li>	
								<li><?php esc_html_e( 'Professional support','the-computer-repair'); ?></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php } ?>