<?php
/**
 * Template Name: Custom Home
 */

get_header(); ?>

<main id="content" role="main">
	<?php do_action( 'lz_computer_repair_above_slider' ); ?>

	<?php if( get_theme_mod('lz_computer_repair_slider_hide_show', false) != false){ ?>
			<?php
    $container_type = get_theme_mod('lz_computer_repair_boxfull_width', ''); // Get the selected container type
	// Define the default container class
	$container_class = '';
	
	// If container or container-fluid is selected, update the container class
	if ($container_type === 'container' || $container_type === 'container-fluid') {
		$container_class = $container_type;
	}
    ?>
	<div class="<?php echo esc_attr($container_class); ?>">
		<section id="slider">
		  	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel"> 
			    <?php $lz_computer_repair_slider_pages = array();
			      	for ( $count = 1; $count <= 4; $count++ ) {
				        $mod = intval( get_theme_mod( 'lz_computer_repair_slider' . $count ));
				        if ( 'page-none-selected' != $mod ) {
				         	 $lz_computer_repair_slider_pages[] = $mod;
				        }
			      	}
			      	if( !empty($lz_computer_repair_slider_pages) ) :
				        $args = array(
				          	'post_type' => 'page',
				          	'post__in' => $lz_computer_repair_slider_pages,
				          	'orderby' => 'post__in'
				        );
			        $query = new WP_Query( $args );
			        if ( $query->have_posts() ) :
			          $i = 1;
			    ?>     
			    <div class="carousel-inner" role="listbox">
			      	<?php  while ( $query->have_posts() ) : $query->the_post(); ?>
			        <div <?php if($i == 1){echo 'class="carousel-item active"';} else{ echo 'class="carousel-item"';}?>>
			          	<a href="<?php echo esc_url( get_permalink() );?>">
			          		<?php if ( has_post_thumbnail() ) {
								$thumbnail_url = get_the_post_thumbnail_url( get_the_ID(), 'full' );
								?>
								<img src="<?php echo esc_url( $thumbnail_url ); ?>" alt="<?php the_title_attribute(); ?>" />
							<?php } else { ?>
								<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/slider.png' ); ?>" alt="<?php the_title_attribute(); ?>" />
							<?php } ?>
			          	</a>
			          	<?php
							$lz_computer_repair_slider_effect = get_theme_mod('lz_computer_repair_slider_effect', '') 
						?>
			          	<div class="carousel-caption <?php echo ($lz_computer_repair_slider_effect); ?>">
				            <div class="inner_carousel">
				              	<h1><?php the_title(); ?></h1>
								  <p><?php $lz_computer_repair_excerpt = get_the_excerpt(); echo esc_html( lz_computer_repair_string_limit_words( $lz_computer_repair_excerpt, esc_attr(get_theme_mod('lz_computer_repair_slider_excerpt_length','15') ) )); ?></p>
				            </div>
				            <div class="read-btn">
				              <a href="<?php the_permalink(); ?>" class="" title="<?php esc_attr_e( 'READ MORE', 'lz-computer-repair' ); ?>"><?php esc_html_e('READ MORE','lz-computer-repair'); ?>
				              </a>
					       	</div>
			          	</div>
			        </div>
			      	<?php $i++; endwhile; 
			      	wp_reset_postdata();?>
			    </div>
			    <?php else : ?>
			    <div class="no-postfound"></div>
			      <?php endif;
			    endif;?>
			    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			      <span class="carousel-control-prev-icon" aria-hidden="true"><i class="fas fa-chevron-left"></i></span>
			    </a>
			    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			      <span class="carousel-control-next-icon" aria-hidden="true"><i class="fas fa-chevron-right"></i></span>
			    </a>
		  	</div>  
		  	<div class="clearfix"></div>
		</section>
	<?php }?>

	<?php do_action('lz_computer_repair_below_slider'); ?>

	<?php /*--our-services --*/?>
	<?php
    $container_type = get_theme_mod('lz_computer_repair_boxfull_width', ''); // Get the selected container type
	// Define the default container class
	$container_class = 'container';
	
	// If container or container-fluid is selected, update the container class
	if ($container_type === 'container' || $container_type === 'container-fluid') {
		$container_class = $container_type;
	}
    ?>
	<div class="<?php echo esc_attr($container_class); ?>">
	<?php if( get_theme_mod('lz_computer_repair_title') != '' || get_theme_mod( 'lz_computer_repair_cat' )!= ''){ ?>
		<section id="our_services">
					<div class="service-box">
					<?php if( get_theme_mod('lz_computer_repair_title') != ''){ ?>
			    		<h2><?php echo esc_html(get_theme_mod('lz_computer_repair_title','')); ?></h2>
			    		<img src="<?php echo esc_url(get_template_directory_uri().'/assets/images/border.png'); ?>" alt="">
			    	<?php }?>
		            <div class="row">
			      		<?php $lz_computer_repair_catData1=  get_theme_mod('lz_computer_repair_cat'); 
			      		if($lz_computer_repair_catData1){ 
			      			$page_query = new WP_Query(array( 'category_name' => esc_html($lz_computer_repair_catData1 ,'lz-computer-repair')));?>
			        		<?php while( $page_query->have_posts() ) : $page_query->the_post(); ?>	
			          			<div class="col-lg-3 col-md-6">
			          				<div class="service-section">
								      	<a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail(); ?></a>
				          				<div class="content-topic">
				          					<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						            		<p><?php $excerpt = get_the_excerpt(); echo esc_html( lz_computer_repair_string_limit_words( $excerpt,10 ) ); ?></p>
			            				</div>
			          				</div>
							    </div>    	
			          		<?php endwhile; 
			          	wp_reset_postdata();
			          	}?>
		      		</div>
				</div>
				<div class="clearfix"></div>
		</section>
	<?php }?>

	<?php do_action('lz_computer_repair_below_our_services_section'); ?>

	<div class="container lz-content">
	  	<?php while ( have_posts() ) : the_post(); ?>
	        <?php the_content(); ?>
	    <?php endwhile; // end of the loop. ?>
	</div>
</main>

<?php get_footer(); ?>