<?php
if ( !is_user_logged_in() ) {
    ?>

    <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">   
        <!-- 
             'Plain Jane' Mini-Theme running on Easy Pie Maintenance Mode Plugin
             easypiewp.com
        -->
        <head>	
            <title></title>
            <script type="text/javascript">
    //<![CDATA[
                try {
                    if (!window.CloudFlare) {
                        var CloudFlare = [{verbose: 0, p: 0, byc: 0, owlid: "cf", bag2: 1, mirage2: 0, oracle: 0, paths: {cloudflare: "/cdn-cgi/nexp/dokv=88e434a982/"}, atok: "d8574813e4fb8f4ea03dbba43fe62292", petok: "03f08af9a7a1f3c5b08c3084c2d6640f8b0c8be6-1405479187-1800", zone: "evermoreweddings.ca", rocket: "0", apps: {"cdnjs": {"__h": "1", "cdnjs": "MO,GF,FX,CS,JS"}, "abetterbrowser": {"ie": "8"}}}];
                        CloudFlare.push({"apps": {"ape": "b6ab91fcd91fbbb1aebb0a9284573b40"}});
                        !function(a, b) {
                            a = document.createElement("script"), b = document.getElementsByTagName("script")[0], a.async = !0, a.src = "//ajax.cloudflare.com/cdn-cgi/nexp/dokv=97fb4d042e/cloudflare.min.js", b.parentNode.insertBefore(a, b)
                        }()
                    }
                } catch (e) {
                }
                ;
    //]]>
            </script>
            <script type="text/javascript">
            //<![CDATA[
                window.__CF = window.__CF || {};
                window.__CF.AJS = {"cdnjs": {"__h": "1", "cdnjs": "MO,GF,FX,CS,JS"}, "abetterbrowser": {"ie": "8"}};
            //]]>
            </script><script type="text/javascript" src="//ajax.cloudflare.com/cdn-cgi/nexp/dokv=dccf16c0cc/appsh.min.js"></script><script type="text/javascript">__CF.AJS.inith();</script><link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Oswald|Droid+Serif"></link>
            <link rel="stylesheet" type="text/css" href="http://evermoreweddings.ca/wp-content/plugins/easy-pie-maintenance-mode/mini-themes/plain/css/style.css" />

            <style type="text/css">

            </style>
        </head>
        <body>
            <div id="header">            
                <p>Evermore Weddings</p>            
            </div>

            <div id="content">
                <img id="logo-img" src="http://evermoreweddings.ca/wp-content/uploads/2014/07/logo-e1404763352372.png" />
                <h1 id="headline">Under Construction</h1>
                <p id="message">We are working on our site at the moment. Please come back later.</p>
            </div>

            <!-- Removes the image when not defined -->
            <script type="text/javascript">

                var image = document.getElementById("logo-img");

                function ezp_hideImage() {
                    image.style.display = "none";
                }

                if (image.getAttribute('src') == '') {

                    ezp_hideImage();
                }

                image.addEventListener('error', ezp_hideImage, true);

            </script>
            <script type="text/javascript" src="//ajax.cloudflare.com/cdn-cgi/nexp/dokv=73806ac11c/apps1.min.js"></script><script type="text/javascript">__CF.AJS.init1();</script></body>
    </html>


    <?php
    exit;
}
?><!DOCTYPE HTML>
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
        .footer .span_1_of_3 .social-media li.rss a{
            background: url(/wp-content/themes/evermore/images/soc_media.png) 0% 0%;
        }
        .footer .span_1_of_3 .social-media li.twitter a{
            background: url(/wp-content/themes/evermore/images/soc_media.png) 28% 0%;
        }        
        .footer .span_1_of_3 .social-media li.facebook a{
            background: url(/wp-content/themes/evermore/images/soc_media.png) 14% 0%;
        }                
        .footer .span_1_of_3 .social-media li.tumblr a{
            background: url(/wp-content/themes/evermore/images/soc_media.png) 57% 0%;
        }                        
        .footer .span_1_of_3 .social-media li.pinterest a{
            background: url(/wp-content/themes/evermore/images/soc_media.png) 72% 0%;
        }                                
        .footer .span_1_of_3 .social-media li.picasa a{
            background: url(/wp-content/themes/evermore/images/soc_media.png) 0% 50%;
        }                                
        .footer .span_1_of_3 .social-media li.stumbleupon a{
            background: url(/wp-content/themes/evermore/images/soc_media.png) 14% 50%;
        }                                
        .footer .span_1_of_3 .social-media li.skype  a{
            background: url(/wp-content/themes/evermore/images/soc_media.png) 28% 50%;
        }                                
        .footer .span_1_of_3 .social-media li.reddit a{
            background: url(/wp-content/themes/evermore/images/soc_media.png) 42% 50%;
        }                                
        .footer .span_1_of_3 .social-media li.evernote a{
            background: url(/wp-content/themes/evermore/images/soc_media.png) 57% 50%;
        }                                
        .footer .span_1_of_3 .social-media li.digg a{
            background: url(/wp-content/themes/evermore/images/soc_media.png) 100% 50%;
        }                                
        .footer .span_1_of_3 .social-media li.blogger a{
            background: url(/wp-content/themes/evermore/images/soc_media.png) 0% 100%;
        }                                
        .footer .span_1_of_3 .social-media li.flickr a{
            background: url(/wp-content/themes/evermore/images/soc_media.png) 14% 100%;
        }                                
        .footer .span_1_of_3 .social-media li.linkedIn a{
            background: url(/wp-content/themes/evermore/images/soc_media.png) 28% 100%;
        }                                
        .footer .span_1_of_3 .social-media li.googlePlus a{
            background: url(/wp-content/themes/evermore/images/soc_media.png) 42% 100%;
        }                       
        .footer .span_1_of_3 .social-media li.vimeo a{
            background: url(/wp-content/themes/evermore/images/soc_media.png) 86% 0%;
        }                               
        .gallery .container #portfoliolist .slideshowlink{
            display: none;
        }
        #portfoliolist .portfolio{
            width: 100% !important;
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
                        if( get_field('social-media-header-check', 40) && have_rows('social-media-header-box', 40) ):
                        ?>                                
                        <ul>
                            <?php
                            while ( have_rows('social-media-header-box', 40) ) : the_row();
                                $socialMediaType = get_sub_field('social_media_header_select', 40);                                                                                                
                                $socialMediaLink = get_sub_field('social_media_header_link', 40);
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
