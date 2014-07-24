<?php
/*
  Template Name: Front Page
 */

$sliderList = array(
    0 => array(
        'image' => get_template_directory_uri().'/images/slider1.jpg',
        'thumb' => get_template_directory_uri().'/images/slider_thumb1.jpg',
        'title' => 'place your description text here.great spot to tell about deals.',
    ),
    1 => array(
        'image' => get_template_directory_uri().'/images/slider2.jpg',
        'thumb' => get_template_directory_uri().'/images/slider_thumb2.jpg',
        'title' => 'It uses a light version of jQuery mobile, navigate the slides by swiping with your fingers',
    ), 
    2 => array(
        'image' => get_template_directory_uri().'/images/slider3.jpg',
        'thumb' => get_template_directory_uri().'/images/slider_thumb3.jpg',
        'title' => 'It uses a light version of jQuery mobile, navigate the slides by swiping with your fingers',
    ),     
    3 => array(
        'image' => get_template_directory_uri().'/images/slider4.jpg',
        'thumb' => get_template_directory_uri().'/images/slider_thumb4.jpg',
        'title' => 'It uses a light version of jQuery mobile, navigate the slides by swiping with your fingers',
    ),         
    4 => array(
        'image' => get_template_directory_uri().'/images/slider5.jpg',
        'thumb' => get_template_directory_uri().'/images/slider_thumb5.jpg',
        'title' => 'It uses a light version of jQuery mobile, navigate the slides by swiping with your fingers',
    ),  
    5 => array(
        'image' => get_template_directory_uri().'/images/slider6.jpg',
        'thumb' => get_template_directory_uri().'/images/slider_thumb6.jpg',
        'title' => 'It uses a light version of jQuery mobile, navigate the slides by swiping with your fingers',
    ),      
);






get_header();


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
                <!-- start grids_1_of_3  -->
                <div class="grids_1_of_3">
                    <div class="grid_1_of_3 images_1_of_3">
                        <div class="grid3_img">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/icon1.png" alt=""/>
                        </div>
                        <div class="grid3_txt">
                            <h3>awesome sliders </h3>
                        </div>
                        <div class="clear"></div>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, </p>
                    </div>
                    <div class="grid_1_of_3 images_1_of_3">
                        <div class="grid3_img">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/icon2.png" alt=""/>
                        </div>
                        <div class="grid3_txt">
                            <h3>modern theme</h3>
                        </div>
                        <div class="clear"></div>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, </p>
                    </div>
                    <div class="grid_1_of_3 images_1_of_3 hide">
                        <div class="grid3_img">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/icon3.png" alt=""/>
                        </div>
                        <div class="grid3_txt">
                            <h3>customize it</h3>
                        </div>
                        <div class="clear"></div>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, </p>
                    </div>
                    <div class="clear"></div>
                </div>
                <!-- start main_btm -->
                <div class="main_btm">
                    <h2>make an&nbsp;<span> impression </span>&nbsp; that shines</h2>
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