<?php
/*
  Template Name: Front Page
 */

get_header();

$currentPage = get_queried_object();

$pageID = $currentPage->ID;
?>
        <?php
        if( have_rows('home_page_slides') ):
        ?>        
        <!-- start slider -->
        <div class="slider">
            <div class="fluid_container">
                <div class="camera_wrap camera_magenta_skin" id="camera_wrap_2">
                    <?php
                    while ( have_rows('home_page_slides') ) : the_row();
                        $currentSlide = get_sub_field('slider_image');
                        if($currentSlide){
                    ?>
                    <div data-thumb="<?php echo $currentSlide['sizes']['main-page-slider-thumb']; ?>" data-src="<?php echo $currentSlide['sizes']['main-page-slider-image']; ?>">
                        <div class="camera_caption fadeFromBottom">
                            <?php
                            if( trim($currentSlide['caption']) != '' ){
                            ?>
                            <h2><?php echo $currentSlide['caption']; ?></h2>
                            <?php
                            }                           
                            ?>                            
                        </div>
                    </div>
                    <?php
                        }
                    endwhile;
                    ?>
                </div><!-- #camera_wrap_2 -->
            </div><!-- .fluid_container -->
            <div class="clear"></div>
        </div>
        <?php
        endif;
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
                                <li><span class="filter active" data-filter="app card icon logo web">All</span></li>
                                <li><span class="filter" data-filter="app web">Print</span></li>
                                <li><span class="filter" data-filter="icon web card">Photography</span></li>
                                <li><span class="filter" data-filter="web app icon card">Web</span></li>
                                <li><span class="filter" data-filter="icon app web logo">Animation</span></li>
                            </ul>
                            <div id="portfoliolist">
                                <div class="portfolio logo1" data-cat="logo">
                                    <div class="portfolio-wrapper">				
                                        <a class="popup-with-zoom-anim" href="#small-dialog1">
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/gallery1.jpg"  alt="Image 2" />
                                        </a>
                                        <div class="label">
                                            <div class="label-text">
                                                <a class="text-title">Bird Document</a>
                                                <span class="text-category">Logo</span>
                                            </div>
                                            <div class="label-bg"></div>
                                        </div>
                                    </div>
                                </div>				
                                <div class="portfolio app" data-cat="app">
                                    <div class="portfolio-wrapper">			
                                        <a class="popup-with-zoom-anim" href="#small-dialog1">
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/gallery2.jpg"  alt="Image 2" />
                                        </a>
                                        <div class="label">
                                            <div class="label-text">
                                                <a class="text-title">Visual Infography</a>
                                                <span class="text-category">APP</span>
                                            </div>
                                            <div class="label-bg"></div>
                                        </div>
                                    </div>
                                </div>		
                                <div class="portfolio web" data-cat="web">
                                    <div class="portfolio-wrapper">						
                                        <a class="popup-with-zoom-anim" href="#small-dialog1">
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/gallery3.jpg"  alt="Image 2" />
                                        </a>
                                        <div class="label">
                                            <div class="label-text">
                                                <a class="text-title">Sonor's Design</a>
                                                <span class="text-category">Web design</span>
                                            </div>
                                            <div class="label-bg"></div>
                                        </div>
                                    </div>
                                </div>				
                                <div class="portfolio card" data-cat="card">
                                    <div class="portfolio-wrapper">			
                                        <a class="popup-with-zoom-anim" href="#small-dialog1">
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/gallery4.jpg"  alt="Image 2" />
                                        </a>
                                        <div class="label">
                                            <div class="label-text">
                                                <a class="text-title">Typography Company</a>
                                                <span class="text-category">Business card</span>
                                            </div>
                                            <div class="label-bg"></div>
                                        </div>
                                    </div>
                                </div>	

                                <div class="portfolio app" data-cat="app">
                                    <div class="portfolio-wrapper">
                                        <a class="popup-with-zoom-anim" href="#small-dialog1">
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/gallery5.jpg"  alt="Image 2" />
                                        </a>
                                        <div class="label">
                                            <div class="label-text">
                                                <a class="text-title">Weatherette</a>
                                                <span class="text-category">APP</span>
                                            </div>
                                            <div class="label-bg"></div>
                                        </div>
                                    </div>
                                </div>			

                                <div class="portfolio card" data-cat="card">
                                    <div class="portfolio-wrapper">			
                                        <a class="popup-with-zoom-anim" href="#small-dialog1">
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/gallery6.jpg"  alt="Image 2" />
                                        </a>
                                        <div class="label">
                                            <div class="label-text">
                                                <a class="text-title">BMF</a>
                                                <span class="text-category">Business card</span>
                                            </div>
                                            <div class="label-bg"></div>
                                        </div>
                                    </div>
                                </div>	

                                <div class="portfolio card" data-cat="card">
                                    <div class="portfolio-wrapper">			
                                        <a class="popup-with-zoom-anim" href="#small-dialog1">
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/gallery7.jpg"  alt="Image 2" />
                                        </a>
                                        <div class="label">
                                            <div class="label-text">
                                                <a class="text-title">Techlion</a>
                                                <span class="text-category">Business card</span>
                                            </div>
                                            <div class="label-bg"></div>
                                        </div>
                                    </div>
                                </div>	

                                <div class="portfolio logo1" data-cat="logo">
                                    <div class="portfolio-wrapper">			
                                        <a class="popup-with-zoom-anim" href="#small-dialog1">
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/gallery8.jpg"  alt="Image 2" />
                                        </a>
                                        <div class="label">
                                            <div class="label-text">
                                                <a class="text-title">KittyPic</a>
                                                <span class="text-category">Logo</span>
                                            </div>
                                            <div class="label-bg"></div>
                                        </div>
                                    </div>
                                </div>																																							
                            </div>
                        </div><!-- container -->
                        <script type="text/javascript" src="js/fliplightbox.min.js"></script>
                        <script type="text/javascript">$('body').flipLightBox()</script>
                        <div class="clear"> </div>
                    </div>
                    <!---End-gallery----->
                </div>
            </div>
        </div>
<?php
get_footer();
?>