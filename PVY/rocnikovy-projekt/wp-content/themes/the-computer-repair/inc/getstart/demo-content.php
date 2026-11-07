<div class="theme-offer">
	<?php 
        // Check if the demo import has been completed
        $the_computer_repair_demo_import_completed = get_option('the_computer_repair_demo_import_completed', false);

        // If the demo import is completed, display the "View Site" button
        if ($the_computer_repair_demo_import_completed) {
        echo '<p class="notice-text">' . esc_html__('Your demo import has been completed successfully.', 'the-computer-repair') . '</p>';
        echo '<span><a href="' . esc_url(home_url()) . '" class="button button-primary site-btn" target="_blank">' . esc_html__('View Site', 'the-computer-repair') . '</a></span>';
        }

		//POST and update the customizer and other related data of POLITICAL CAMPAIGN
        if (isset($_POST['submit'])) {

            // Check if Contact Form 7 is installed and activated
            if (!is_plugin_active('woocommerce/woocommerce.php')) {
              // Install the plugin if it doesn't exist
              $plugin_slug = 'woocommerce';
              $plugin_file = 'woocommerce/woocommerce.php';

              // Check if plugin is installed
              $installed_plugins = get_plugins();
              if (!isset($installed_plugins[$plugin_file])) {
                  include_once(ABSPATH . 'wp-admin/includes/plugin-install.php');
                  include_once(ABSPATH . 'wp-admin/includes/file.php');
                  include_once(ABSPATH . 'wp-admin/includes/misc.php');
                  include_once(ABSPATH . 'wp-admin/includes/class-wp-upgrader.php');

                  // Install the plugin
                  $upgrader = new Plugin_Upgrader();
                  $upgrader->install('https://downloads.wordpress.org/plugin/woocommerce.latest-stable.zip');
              }
              // Activate the plugin
              activate_plugin($plugin_file);
            }

            // ------- Create Nav Menu --------
            $the_computer_repair_menuname = 'Main Menus';
            $the_computer_repair_bpmenulocation = 'primary';
            $the_computer_repair_menu_exists = wp_get_nav_menu_object($the_computer_repair_menuname);

            if (!$the_computer_repair_menu_exists) {
                $the_computer_repair_menu_id = wp_create_nav_menu($the_computer_repair_menuname);

                // Create Home Page
                $the_computer_repair_home_title = 'Home';
                $the_computer_repair_home = array(
                    'post_type' => 'page',
                    'post_title' => $the_computer_repair_home_title,
                    'post_content' => '',
                    'post_status' => 'publish',
                    'post_author' => 1,
                    'post_slug' => 'home'
                );
                $the_computer_repair_home_id = wp_insert_post($the_computer_repair_home);
                // Assign Home Page Template
                add_post_meta($the_computer_repair_home_id, '_wp_page_template', 'page-template/custom-home-page.php');
                // Update options to set Home Page as the front page
                update_option('page_on_front', $the_computer_repair_home_id);
                update_option('show_on_front', 'page');
                // Add Home Page to Menu
                wp_update_nav_menu_item($the_computer_repair_menu_id, 0, array(
                    'menu-item-title' => __('Home', 'the-computer-repair'),
                    'menu-item-classes' => 'home',
                    'menu-item-url' => home_url('/'),
                    'menu-item-status' => 'publish',
                    'menu-item-object-id' => $the_computer_repair_home_id,
                    'menu-item-object' => 'page',
                    'menu-item-type' => 'post_type'
                ));

                // Create About Us Page with Dummy Content
                $the_computer_repair_about_title = 'About Us';
                $the_computer_repair_about_content = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...<br>

                         Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960 with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<br> 

                            There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which dont look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isnt anything embarrassing hidden in the middle of text.<br> 

                            All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.';
                $the_computer_repair_about = array(
                    'post_type' => 'page',
                    'post_title' => $the_computer_repair_about_title,
                    'post_content' => $the_computer_repair_about_content,
                    'post_status' => 'publish',
                    'post_author' => 1,
                    'post_slug' => 'about-us'
                );
                $the_computer_repair_about_id = wp_insert_post($the_computer_repair_about);
                // Add About Us Page to Menu
                wp_update_nav_menu_item($the_computer_repair_menu_id, 0, array(
                    'menu-item-title' => __('About Us', 'the-computer-repair'),
                    'menu-item-classes' => 'about-us',
                    'menu-item-url' => home_url('/about-us/'),
                    'menu-item-status' => 'publish',
                    'menu-item-object-id' => $the_computer_repair_about_id,
                    'menu-item-object' => 'page',
                    'menu-item-type' => 'post_type'
                ));

                // Create Services Page with Dummy Content
                $the_computer_repair_about_title = 'Services';
                $the_computer_repair_about_content = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...<br>

                         Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960 with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<br> 

                            There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which dont look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isnt anything embarrassing hidden in the middle of text.<br> 

                            All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.';
                $the_computer_repair_about = array(
                    'post_type' => 'page',
                    'post_title' => $the_computer_repair_about_title,
                    'post_content' => $the_computer_repair_about_content,
                    'post_status' => 'publish',
                    'post_author' => 1,
                    'post_slug' => 'about-us'
                );
                $the_computer_repair_about_id = wp_insert_post($the_computer_repair_about);
                // Add Services Page to Menu
                wp_update_nav_menu_item($the_computer_repair_menu_id, 0, array(
                    'menu-item-title' => __('Services', 'the-computer-repair'),
                    'menu-item-classes' => 'about-us',
                    'menu-item-url' => home_url('/about-us/'),
                    'menu-item-status' => 'publish',
                    'menu-item-object-id' => $the_computer_repair_about_id,
                    'menu-item-object' => 'page',
                    'menu-item-type' => 'post_type'
                ));

                // Create Projects Page with Dummy Content
                $the_computer_repair_about_title = 'Projects';
                $the_computer_repair_about_content = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...<br>

                         Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960 with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<br> 

                            There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which dont look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isnt anything embarrassing hidden in the middle of text.<br> 

                            All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.';
                $the_computer_repair_about = array(
                    'post_type' => 'page',
                    'post_title' => $the_computer_repair_about_title,
                    'post_content' => $the_computer_repair_about_content,
                    'post_status' => 'publish',
                    'post_author' => 1,
                    'post_slug' => 'about-us'
                );
                $the_computer_repair_about_id = wp_insert_post($the_computer_repair_about);
                // Add Projects Page to Menu
                wp_update_nav_menu_item($the_computer_repair_menu_id, 0, array(
                    'menu-item-title' => __('Projects', 'the-computer-repair'),
                    'menu-item-classes' => 'about-us',
                    'menu-item-url' => home_url('/about-us/'),
                    'menu-item-status' => 'publish',
                    'menu-item-object-id' => $the_computer_repair_about_id,
                    'menu-item-object' => 'page',
                    'menu-item-type' => 'post_type'
                ));

                // Create Pages Page with Dummy Content
                $the_computer_repair_pages_title = 'Pages';
                $the_computer_repair_pages_content = '
                <p>Explore all the pages we have on our website. Find information about our services, company, and more.</p>

                 Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960 with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<br> 

                  All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.';
                $the_computer_repair_pages = array(
                    'post_type' => 'page',
                    'post_title' => $the_computer_repair_pages_title,
                    'post_content' => $the_computer_repair_pages_content,
                    'post_status' => 'publish',
                    'post_author' => 1,
                    'post_slug' => 'pages'
                );
                $the_computer_repair_pages_id = wp_insert_post($the_computer_repair_pages);
                // Add Pages Page to Menu
                wp_update_nav_menu_item($the_computer_repair_menu_id, 0, array(
                    'menu-item-title' => __('Pages', 'the-computer-repair'),
                    'menu-item-classes' => 'pages',
                    'menu-item-url' => home_url('/pages/'),
                    'menu-item-status' => 'publish',
                    'menu-item-object-id' => $the_computer_repair_pages_id,
                    'menu-item-object' => 'page',
                    'menu-item-type' => 'post_type'
                ));

                // Create Blog Page 
                $the_computer_repair_blog_page_title = 'Blog';

                $the_computer_repair_blog_page_query = new WP_Query(array(
                    'post_type'      => 'page',
                    'name'           => sanitize_title($the_computer_repair_blog_page_title),
                    'post_status'    => 'publish',
                    'posts_per_page' => 1
                ));
                if (!$the_computer_repair_blog_page_query->have_posts()) {
                    $the_computer_repair_blog_page = array(
                        'post_type'   => 'page',
                        'post_title'  => $the_computer_repair_blog_page_title,
                        'post_status' => 'publish',
                        'post_author' => 1,
                    );
                    $the_computer_repair_blog_page_id = wp_insert_post($the_computer_repair_blog_page);
                    update_option('page_for_posts', $the_computer_repair_blog_page_id);

                    wp_update_nav_menu_item($the_computer_repair_menu_id, 0, array(
                        'menu-item-title'      => __('Blog', 'the-computer-repair'),
                        'menu-item-url'        => get_permalink($the_computer_repair_blog_page_id),
                        'menu-item-status'     => 'publish',
                        'menu-item-object-id'  => $the_computer_repair_blog_page_id,
                        'menu-item-object'     => 'page',
                        'menu-item-type'       => 'post_type',
                    ));
                }

                // Create Contact Us Page with Dummy Content
                $the_computer_repair_about_title = 'Contact Us';
                $the_computer_repair_about_content = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...<br>

                         Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960 with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<br> 

                            There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which dont look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isnt anything embarrassing hidden in the middle of text.<br> 

                            All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.';
                $the_computer_repair_about = array(
                    'post_type' => 'page',
                    'post_title' => $the_computer_repair_about_title,
                    'post_content' => $the_computer_repair_about_content,
                    'post_status' => 'publish',
                    'post_author' => 1,
                    'post_slug' => 'about-us'
                );
                $the_computer_repair_about_id = wp_insert_post($the_computer_repair_about);
                // Add Contact Us Page to Menu
                wp_update_nav_menu_item($the_computer_repair_menu_id, 0, array(
                    'menu-item-title' => __('Contact Us', 'the-computer-repair'),
                    'menu-item-classes' => 'about-us',
                    'menu-item-url' => home_url('/about-us/'),
                    'menu-item-status' => 'publish',
                    'menu-item-object-id' => $the_computer_repair_about_id,
                    'menu-item-object' => 'page',
                    'menu-item-type' => 'post_type'
                ));

                // Set the menu location if it's not already set
                if (!has_nav_menu($the_computer_repair_bpmenulocation)) {
                    $locations = get_theme_mod('nav_menu_locations'); // Use 'nav_menu_locations' to get locations array
                    if (empty($locations)) {
                        $locations = array();
                    }
                    $locations[$the_computer_repair_bpmenulocation] = $the_computer_repair_menu_id;
                    set_theme_mod('nav_menu_locations', $locations);
                }
                
        }
           
            // Set the demo import completion flag
    		update_option('the_computer_repair_demo_import_completed', true);
    		// Display success message and "View Site" button
    		echo '<p class="notice-text">' . esc_html__('Your demo import has been completed successfully.', 'the-computer-repair') . '</p>';
    		echo '<span><a href="' . esc_url(home_url()) . '" class="button button-primary site-btn" target="_blank">' . esc_html__('View Site', 'the-computer-repair') . '</a></span>';
            //end 


            // Top Bar //
            set_theme_mod( 'the_computer_repair_search_icon', 'fas fa-search' );  
            set_theme_mod( 'the_computer_repair_search_close_icon', 'fa fa-window-close' );  

            set_theme_mod( 'the_computer_repair_location_icon', 'fas fa-map-marker-alt' );  
            set_theme_mod( 'the_computer_repair_location', '123 Dummy street lorem ipsum, USA' );  
            set_theme_mod( 'the_computer_repair_phone_icon', 'fas fa-phone' );  
            set_theme_mod( 'the_computer_repair_call', '+00 1234 567 890' );  
            set_theme_mod( 'the_computer_repair_email_address_icon', 'fas fa-envelope' );  
            set_theme_mod( 'the_computer_repair_email', 'example@gmail.com' );  
            set_theme_mod( 'the_computer_repair_top_btn_text', 'BOOK AN APPOINTMENT' );  
            set_theme_mod( 'the_computer_repair_top_btn_url', '#' );  
            set_theme_mod( 'the_computer_repair_cart_icon', 'fas fa-shopping-basket' );  
            


            // slider section start // 
            set_theme_mod( 'the_computer_repair_slider_button_text', 'Read More' );
            
            for($the_computer_repair_i=1;$the_computer_repair_i<=4;$the_computer_repair_i++){
               $the_computer_repair_slider_title = 'TE OBTINUIT UT ADEPTO SATIS SOMNO';
               $the_computer_repair_slider_content = 'Te obtinuit ut adepto satis somno. Aliisque institoribus iter deliciae vivet vita.';
                  // Create post object
               $my_post = array(
               'post_title'    => wp_strip_all_tags( $the_computer_repair_slider_title ),
               'post_content'  => $the_computer_repair_slider_content,
               'post_status'   => 'publish',
               'post_type'     => 'page',
               );

               // Insert the post into the database
               $the_computer_repair_post_id = wp_insert_post( $my_post );

               if ($the_computer_repair_post_id) {
                 // Set the theme mod for the slider page
                 set_theme_mod('the_computer_repair_slider_page' . $the_computer_repair_i, $the_computer_repair_post_id);

                  $the_computer_repair_image_url = get_template_directory_uri().'/assets/images/slider'.$the_computer_repair_i.'.png';

                $the_computer_repair_image_id = media_sideload_image($the_computer_repair_image_url, $the_computer_repair_post_id, null, 'id');

                    if (!is_wp_error($the_computer_repair_image_id)) {
                        // Set the downloaded image as the post's featured image
                        set_post_thumbnail($the_computer_repair_post_id, $the_computer_repair_image_id);
                    }
                }
            }    
            

            // Our Services Section //
            set_theme_mod( 'the_computer_repair_section_title', 'Our Services' );
            set_theme_mod( 'the_computer_repair_section_text', 'Te obtinuit ut adepto satis somno. Aliisque institoribus iter deliciae vivet vita.' );
            set_theme_mod( 'the_computer_repair_services_button_text', 'Read More' );
            set_theme_mod('the_computer_repair_our_services', 'postcategory1');

            // Define post category names and post titles
            $the_computer_repair_category_names = array('postcategory1', 'postcategory2', 'postcategory3', 'postcategory4');
            $the_computer_repair_title_array = array(
                array("OUR SERVICE TITLE 1", "OUR SERVICE TITLE 2", "OUR SERVICE TITLE 3"),
                array("OUR SERVICE TITLE 1", "OUR SERVICE TITLE 2", "OUR SERVICE TITLE 3"),
                array("OUR SERVICE TITLE 1", "OUR SERVICE TITLE 2", "OUR SERVICE TITLE 3"),
                array("OUR SERVICE TITLE 1", "OUR SERVICE TITLE 2", "OUR SERVICE TITLE 3")
            );

            foreach ($the_computer_repair_category_names as $the_computer_repair_index => $the_computer_repair_category_name) {
                // Create or retrieve the post category term ID
                $the_computer_repair_term = term_exists($the_computer_repair_category_name, 'category');
                if ($the_computer_repair_term === 0 || $the_computer_repair_term === null) {
                    // If the term does not exist, create it
                    $the_computer_repair_term = wp_insert_term($the_computer_repair_category_name, 'category');
                }
                if (is_wp_error($the_computer_repair_term)) {
                    error_log('Error creating category: ' . $the_computer_repair_term->get_error_message());
                    continue; // Skip to the next iteration if category creation fails
                }

                for ($the_computer_repair_i = 0; $the_computer_repair_i < 3; $the_computer_repair_i++) {
                    // Create post content
                    $the_computer_repair_title = $the_computer_repair_title_array[$the_computer_repair_index][$the_computer_repair_i];
                    $the_computer_repair_content = 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s.';

                    // Create post post object
                    $the_computer_repair_my_post = array(
                        'post_title'    => wp_strip_all_tags($the_computer_repair_title),
                        'post_content'  => $the_computer_repair_content,
                        'post_status'   => 'publish',
                        'post_type'     => 'post', // Post type set to 'post'
                    );

                    // Insert the post into the database
                    $the_computer_repair_post_id = wp_insert_post($the_computer_repair_my_post);

                    if (is_wp_error($the_computer_repair_post_id)) {
                        error_log('Error creating post: ' . $the_computer_repair_post_id->get_error_message());
                        continue; // Skip to the next post if creation fails
                    }

                    // Assign the category to the post
                    wp_set_post_categories($the_computer_repair_post_id, array((int)$the_computer_repair_term['term_id']));

                    // Handle the featured image using media_sideload_image
                    $the_computer_repair_image_url = get_template_directory_uri() . '/assets/images/service' . ($the_computer_repair_i + 1) . '.png';
                    $the_computer_repair_image_id = media_sideload_image($the_computer_repair_image_url, $the_computer_repair_post_id, null, 'id');

                    if (is_wp_error($the_computer_repair_image_id)) {
                        error_log('Error downloading image: ' . $the_computer_repair_image_id->get_error_message());
                        continue; // Skip to the next post if image download fails
                    }
                    // Assign featured image to post
                    set_post_thumbnail($the_computer_repair_post_id, $the_computer_repair_image_id);
                }
            }   
            //Copyright Text
            set_theme_mod( 'the_computer_repair_footer_text', 'By VWThemes' );  
     
        }
    ?>
  
	
    <form action="<?php echo esc_url(home_url()); ?>/wp-admin/themes.php?page=the_computer_repair_guide" method="POST" onsubmit="return validate(this);">
    <?php if (!get_option('the_computer_repair_demo_import_completed')) : ?>
        <form method="post">
            <p class="run-import-text"><?php esc_html_e('Click On The Below Run Importer Button To Import Demo Content Of The Computer Repair','the-computer-repair'); ?></p>
            <p><?php esc_html_e('Please back up your website if it’s already live with data. This importer will overwrite your existing settings with the new customizer values for The Computer Repair','the-computer-repair'); ?></p>
            <input class= "run-import" type="submit" name="submit" value="<?php esc_attr_e('Run Importer','the-computer-repair'); ?>" class="button button-primary button-large">
        </form>
    <?php endif; ?>
    </form>
	<script type="text/javascript">
		function validate(valid) {
			 if(confirm("Do you really want to import the theme demo content?")){
                // Show loader
                document.getElementById('demo-import-loader').style.display = 'block';
                // Submit form
			    document.forms[0].submit();
			}
		    else {
			    return false;
		    }
		}
	</script>
</div>

