<?php
/*
  Template Name: Front Page
 */

get_header();

$currentPage = get_queried_object();

$pageID = $currentPage->ID;
?>
       <?php
       echo do_shortcode('[ngg_images gallery_ids="1" display_type="photocrati-nextgen_basic_slideshow" gallery_width="1663" gallery_height="832"]');
       ?>
        <!-- start main  -->
        <div class="wrap">
            <div class="main">
                <div><?php echo $currentPage->post_content; ?></div>
                <?php                
                if( get_field( 'home_page_enable_three_col') && get_field('column_1_text') ){
                ?>
                <!-- start grids_1_of_3  -->
                <div class="grids_1_of_3">
                    <div class="grid_1_of_3 images_1_of_3">
                        <?php
                        if( get_field('column_1_title') ){
                        ?>
                        <div class="grid3_txt">
                            <h3><?php the_field('column_1_title'); ?></h3>
                        </div>                        
                        <div class="clear"></div>
                        <?php
                        }
                        if( get_field('column_1_text') ){
                        ?>
                        <p><?php the_field('column_1_text'); ?></p>
                        <?php
                        }
                        ?>
                    </div>
                    <?php
                    if( get_field('column_2_text') ){
                    ?>                    
                    <div class="grid_1_of_3 images_1_of_3">
                        <?php
                        if( get_field('column_2_title') ){
                        ?>                        
                        <div class="grid3_txt">
                            <h3><?php the_field('column_2_title'); ?></h3>
                        </div>
                        <div class="clear"></div>
                        <?php
                        }
                        if( get_field('column_2_text') ){
                        ?>
                        <p><?php the_field('column_2_text'); ?></p>
                        <?php
                        }
                        ?>
                    </div>
                    <?php
                    }
                    if( get_field('column_3_text') ){
                    ?>                    
                    <div class="grid_1_of_3 images_1_of_3">
                        <?php
                        if( get_field('column_3_title') ){
                        ?>                        
                        <div class="grid3_txt">
                            <h3><?php the_field('column_3_title'); ?></h3>
                        </div>
                        <div class="clear"></div>
                        <?php
                        }
                        if( get_field('column_3_text') ){
                        ?>
                        <p><?php the_field('column_3_text'); ?></p>
                        <?php
                        }
                        ?>
                    </div>
                    <?php
                    }                    
                    ?>
                    <div class="clear"></div>
                </div>
                <?php
                }
                ?>
                <!-- start main_btm -->
                <div class="main_btm">                    
                    <?php
                    if( get_field('home_page_tag_line') ){
                    ?>
                    <h2><?php the_field('home_page_tag_line'); ?></h2>
                    <?php
                    }
                    ?>                    
                    <!---start-mfp ---->	
                    <div id="small-dialog1" class="mfp-hide">
                        <div class="pop_up">
                            <h2>Lorem ipsum sit amet</h2>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/gallery_zoom.jpg" alt=""/>
                            <p class="para">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet.</p>
                        </div>
                    </div>
                    <!---end-mfp ---->	
                    <!---start-content----->
                    <div class="gallery">
                        <div class="clear"> </div>
                        <div class="container">
                            <ul id="filters" class="clearfix">
                                <li><span class="filter active" data-filter="birthday weddings events">All</span></li>
                                <li><span class="filter" data-filter="birthday">Birthdays</span></li>
                                <li><span class="filter" data-filter="weddings">Weddings</span></li>
                                <li><span class="filter" data-filter="events">Events</span></li>
                                
                            </ul>
                            <div id="portfoliolist">
                                <div class="portfolio birthday" data-cat="birthday">
                                    <div class="portfolio-wrapper">				
                                        <?php echo do_shortcode('[ngg_images gallery_ids="2" display_type="photocrati-nextgen_basic_thumbnails" number_of_columns="4"]'); ?>
                                    </div>
                                </div>				
                                <div class="portfolio weddings" data-cat="weddings">
                                    <div class="portfolio-wrapper">			
                                        <?php echo do_shortcode('[ngg_images gallery_ids="3" display_type="photocrati-nextgen_basic_thumbnails" number_of_columns="4"]'); ?>
                                    </div>
                                </div>		
                                <div class="portfolio events" data-cat="events">
                                    <div class="portfolio-wrapper">						
                                        <?php echo do_shortcode('[ngg_images gallery_ids="4" display_type="photocrati-nextgen_basic_thumbnails" number_of_columns="4"]'); ?>
                                    </div>
                                </div>				
                            </div>
                        </div><!-- container -->
                        <div class="clear"> </div>
                    </div>
                    <!---End-gallery----->
                </div>
            </div>
        </div>
<?php
get_footer();
?>