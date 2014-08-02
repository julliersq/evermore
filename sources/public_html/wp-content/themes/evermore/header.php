<!DOCTYPE HTML>
<html>
    <head>
        <?php
        $currentPage = get_queried_object();
        ?>
        <title><?php echo get_bloginfo( 'name' ); ?> | <?php echo $currentPage->post_title;?></title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
        <link href="<?php echo get_template_directory_uri(); ?>/style.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" media="all" />
        <!-- jQuery -->
        <!-- start slider -->
        <link href="<?php echo get_template_directory_uri(); ?>/css/camera.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" media="all" />
        <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.min.js"></script>
        <script type='text/javascript' src="<?php echo get_template_directory_uri(); ?>/js/jquery.mobile.customized.min.js"></script>
        <script type='text/javascript' src="<?php echo get_template_directory_uri(); ?>/js/jquery.easing.1.3.js"></script> 
        <script type='text/javascript' src="<?php echo get_template_directory_uri(); ?>/js/camera.min.js"></script> 
        <script>
            jQuery(function() {

                jQuery('#camera_wrap_2').camera({
                    loader: 'bar',
                    pagination: false,
                    thumbnails: true
                });
            });
        </script>
        <!-- end slider -->
        <!-- start gallery -->
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.easing.min.js"></script>	
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.mixitup.min.js"></script>
        <script type="text/javascript">
            $(function() {

                var filterList = {
                    init: function() {

                        // MixItUp plugin
                        // http://mixitup.io
                        $('#portfoliolist').mixitup({
                            targetSelector: '.portfolio',
                            filterSelector: '.filter',
                            effects: ['fade'],
                            easing: 'snap',
                            // call the hover effect
                            onMixEnd: filterList.hoverEffect()
                        });

                    },
                    hoverEffect: function() {

                        // Simple parallax effect
                        $('#portfoliolist .portfolio').hover(
                                function() {
                                    $(this).find('.label').stop().animate({bottom: 0}, 200, 'easeOutQuad');
                                    $(this).find('img').stop().animate({top: -30}, 500, 'easeOutQuad');
                                },
                                function() {
                                    $(this).find('.label').stop().animate({bottom: -40}, 200, 'easeInQuad');
                                    $(this).find('img').stop().animate({top: 0}, 300, 'easeOutQuad');
                                }
                        );

                    }

                };

                // Run the show!
                filterList.init();


            });
        </script>
        <!-- Add fancyBox main JS and CSS files -->
        <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.magnific-popup.js" type="text/javascript"></script>
        <link href="<?php echo get_template_directory_uri(); ?>/css/magnific-popup.css" rel="stylesheet" type="text/css">
        <script>
            $(document).ready(function() {
                $('.popup-with-zoom-anim').magnificPopup({
                    type: 'inline',
                    fixedContentPos: false,
                    fixedBgPos: true,
                    overflowY: 'auto',
                    closeBtnInside: true,
                    preloader: false,
                    midClick: true,
                    removalDelay: 300,
                    mainClass: 'my-mfp-zoom-in'
                });
            });
        </script>
        <?php
        wp_head();
        ?>
        <style>
        .contact .gform_wrapper .top_label input.medium, .contact .gform_wrapper .top_label textarea {
            padding-right: 2px;
            margin-bottom: 0;
        }          
        .contact .gform_wrapper textarea, .contact .gform_wrapper input[type=text], .contact .gform_wrapper input[type=url], .contact .gform_wrapper input[type=email], .contact .gform_wrapper input[type=tel], .contact .gform_wrapper input[type=number], .contact .gform_wrapper input[type=password] {
            outline-style: none;
            font-size: 16px;
            font-family: 'Open Sans', sans-serif;
            padding: 8px 2px 8px 8px;
            letter-spacing: normal;
        }      
        #gform_wrapper_1{
            margin-top: 0 !important;
        }
        .header_top .wrap .social-icons li.rss a{
            background: url(/wp-content/themes/evermore/images/soc_icons.png) 100% 0%;
        }
        .header_top .wrap .social-icons li.rss  a:hover{
            background: url(/wp-content/themes/evermore/images/soc_icons.png) 100% 75%;
        }  
        .header_top .wrap .social-icons li.facebook a{
            background: url(/wp-content/themes/evermore/images/soc_icons.png) 34% 0%;
        }
        .header_top .wrap .social-icons li.facebook a:hover{
            background: url(/wp-content/themes/evermore/images/soc_icons.png) 34% 75%;
        }          
        .header_top .wrap .social-icons li.twitter a{
            background: url(/wp-content/themes/evermore/images/soc_icons.png) 0% 0%;
        }
        .header_top .wrap .social-icons li.twitter a:hover{
            background: url(/wp-content/themes/evermore/images/soc_icons.png) 0% 75%;
        }                  
        </style>
    </head>
    <body>
        <!-- header_top -->
        <div class="header_top">
            <div class="wrap">
                <div class="header">
                    <div class="social-icons">
                        <?php
                        if( get_field('social-media-header-check') && have_rows('social-media-header-box') ):
                        ?>                                
                        <ul>
                            <?php
                            while ( have_rows('social-media-header-box') ) : the_row();
                                $socialMediaType = get_sub_field('social_media_header_select');                                                                                                
                                $socialMediaLink = get_sub_field('social_media_header_link');
                            ?>                            
                            <li class="<?php echo $socialMediaType; ?>"><a href="<?php echo $socialMediaLink; ?>" target="_blank"></a></li>
                            <?php
                            endwhile;
                            ?>
                            <li class="rss"><a href="<?php bloginfo('rss2_url'); ?>" target="_blank"></a></li>
                        </ul>
                        <?php
                        endif;
                        ?>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
        <!-- header_btm -->
        <div class="header_btm">
            <div class="wrap">
                <div class="header">
                    <div class="logo">
                        <a href="index.html"><img src="<?php echo get_template_directory_uri(); ?>/images/header_logo.png" alt=""/> </a>
                    </div>
                    <div class="menu">
                        <?php wp_nav_menu( array( 'theme_location' => 'header-menu' , 'container' => false ) ); ?>
                        <?php
                        /*
                        <ul>
                            <li class="active"><a href="index.html">Home</a></li>
                            <li><a href="blog.html">Blog</a></li>
                            <li><a href="portfolio.html">Portfolio</a></li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                         * 
                         */
                        ?>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
