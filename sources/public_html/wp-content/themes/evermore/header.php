<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
    <head>
        <title>Evermore Weddings | Home </title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
        <link href="<?php echo get_template_directory_uri(); ?>/css/style.css" rel="stylesheet" type="text/css" media="all" />
        <!-- jQuery -->
        <!-- start slider -->
        <link href="<?php echo get_template_directory_uri(); ?>/css/camera.css" rel="stylesheet" type="text/css" media="all" />
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
        </style>
    </head>
    <body>
        <!-- header_top -->
        <div class="header_top">
            <div class="wrap">
                <div class="header">
                    <div class="social-icons">
                        <ul>
                            <li><a href="#" target="_blank"></a></li>
                            <li><a href="#" target="_blank"></a></li>
                            <li><a href="#" target="_blank"></a></li>
                            <li><a href="#" target="_blank"></a></li>
                        </ul>
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
                        <ul>
                            <li class="active"><a href="index.html">Home</a></li>
                            <li><a href="blog.html">Blog</a></li>
                            <li><a href="portfolio.html">Portfolio</a></li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
