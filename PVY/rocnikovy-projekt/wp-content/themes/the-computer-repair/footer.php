<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package The Computer Repair
 */
?>
    <footer role="contentinfo">
        <?php if (get_theme_mod('the_computer_repair_footer_hide_show', true)){ ?>
            <div  id="footer" class="copyright-wrapper">
                <div class="container">
                    <?php
                        $count = 0;
                        
                        if ( is_active_sidebar( 'footer-1' ) ) {
                            $count++;
                        }
                        if ( is_active_sidebar( 'footer-2' ) ) {
                            $count++;
                        }
                        if ( is_active_sidebar( 'footer-3' ) ) {
                            $count++;
                        }
                        if ( is_active_sidebar( 'footer-4' ) ) {
                            $count++;
                        }
                        // $count == 0 none
                        if ( $count == 1 ) {
                            $colmd = 'col-md-12 col-sm-12';
                        } elseif ( $count == 2 ) {
                            $colmd = 'col-md-6 col-sm-6';
                        } elseif ( $count == 3 ) {
                            $colmd = 'col-md-4 col-sm-4';
                        } else {
                            $colmd = 'col-md-3 col-sm-6';
                        }
                    ?>
                    <div class="row wow bounceInUp center delay-1000" data-wow-duration="2s">
                        <div class="<?php echo !is_active_sidebar('footer-1') ? 'footer_hide' : esc_attr($the_computer_repair_colmd); ?> col-lg-3 col-md-3 col-xs-12 footer-block pe-2">
                            <?php if (is_active_sidebar('footer-1')) : ?>
                                <?php dynamic_sidebar('footer-1'); ?>
                            <?php else : ?>
                                <aside id="search" class="widget py-3" role="complementary" aria-label="firstsidebar">
                                    <h3 class="widget-title"><?php esc_html_e( 'Search', 'the-computer-repair' ); ?></h3>
                                    <?php get_search_form(); ?>
                                </aside>
                            <?php endif; ?>
                        </div>
                        <div class="<?php echo !is_active_sidebar('footer-2') ? 'footer_hide' : esc_attr($the_computer_repair_colmd); ?> col-lg-3 col-md-3 col-xs-12 footer-block pe-2">
                            <?php if (is_active_sidebar('footer-2')) : ?>
                                <?php dynamic_sidebar('footer-2'); ?>
                            <?php else : ?>
                                <aside id="archives" class="widget py-3" role="complementary" >
                                    <h3 class="widget-title"><?php esc_html_e( 'Archives', 'the-computer-repair' ); ?></h3>
                                    <ul>
                                        <?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
                                    </ul>
                                </aside>
                            <?php endif; ?>
                        </div> 
                        <div class="<?php echo !is_active_sidebar('footer-3') ? 'footer_hide' : esc_attr($the_computer_repair_colmd); ?> col-lg-3 col-md-3 col-xs-12 footer-block  pe-2">
                            <?php if (is_active_sidebar('footer-3')) : ?>
                                <?php dynamic_sidebar('footer-3'); ?>
                            <?php else : ?>
                                <aside id="meta" class="widget py-3" role="complementary" >
                                    <h3 class="widget-title"><?php esc_html_e( 'Meta', 'the-computer-repair' ); ?></h3>
                                    <ul>
                                        <?php wp_register(); ?>
                                        <li><?php wp_loginout(); ?></li>
                                        <?php wp_meta(); ?>
                                    </ul>
                                </aside>
                            <?php endif; ?>
                        </div>
                        <div class="<?php echo !is_active_sidebar('footer-4') ? 'footer_hide' : esc_attr($the_computer_repair_colmd); ?> col-lg-3 col-md-3 col-xs-12 footer-block  p-0">
                            <?php if (is_active_sidebar('footer-4')) : ?>
                                <?php dynamic_sidebar('footer-4'); ?>
                            <?php else : ?>
                                <aside id="categories" class="widget py-3" role="complementary"> 
                                    <h3 class="widget-title"><?php esc_html_e( 'Categories', 'the-computer-repair' ); ?></h3>          
                                    <ul>
                                        <?php wp_list_categories('title_li=');  ?>
                                    </ul>
                                </aside>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php }?>
        <div class="footer <?php if( get_theme_mod( 'the_computer_repair_copyright_sticky', false) == 1) { ?> copyright-sticky"<?php } else { ?>close-sticky <?php } ?>">
            <?php if (get_theme_mod('the_computer_repair_copyright_hide_show', true)) {?>
                <div id="footer-2">
                  	<div class="copyright container">
                        <p><?php the_computer_repair_credit(); ?> <?php echo esc_html(get_theme_mod('the_computer_repair_footer_text',__('By VWThemes','the-computer-repair'))); ?></p>
                        <?php if(get_theme_mod('the_computer_repair_footer_icon',false) != false) {?>
                            <?php dynamic_sidebar('footer-icon'); ?>
                        <?php }?> 
                        <?php if( get_theme_mod( 'the_computer_repair_hide_show_scroll',true) ==1 || get_theme_mod( 'the_computer_repair_resp_scroll_top_hide_show',true) ==1) { ?>
                            <?php $the_computer_repair_theme_lay = get_theme_mod( 'the_computer_repair_scroll_top_alignment','Right');
                            if($the_computer_repair_theme_lay == 'Left'){ ?>
                              <a href="#" class="scrollup left"><i class="<?php echo esc_attr(get_theme_mod('the_computer_repair_scroll_to_top_icon','fas fa-long-arrow-alt-up')); ?>"></i><span class="screen-reader-text"><?php esc_html_e( 'Scroll Up', 'the-computer-repair' ); ?></span></a>
                            <?php }else if($the_computer_repair_theme_lay == 'Center'){ ?>
                              <a href="#" class="scrollup center"><i class="<?php echo esc_attr(get_theme_mod('the_computer_repair_scroll_to_top_icon','fas fa-long-arrow-alt-up')); ?>"></i><span class="screen-reader-text"><?php esc_html_e( 'Scroll Up', 'the-computer-repair' ); ?></span></a>
                            <?php }else{ ?>
                              <a href="#" class="scrollup"><i class="<?php echo esc_attr(get_theme_mod('the_computer_repair_scroll_to_top_icon','fas fa-long-arrow-alt-up')); ?>"></i><span class="screen-reader-text"><?php esc_html_e( 'Scroll Up', 'the-computer-repair' ); ?></span></a>
                            <?php }?>
                        <?php }?>    
                  	</div>
                  	<div class="clear"></div>
                </div>
            <?php }?>
        </div>    
    </footer>
    <?php if ( get_theme_mod( 'the_computer_repair_progress_bar', 0 ) ) : ?>
        <div id="the_computer_repair_elemento_progress_bar"></div>
    <?php endif; ?>                           
        <?php wp_footer(); ?>

    </body>
</html>