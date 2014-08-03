        <!-- start footer  -->
        <div class="footer_bg">
            <div class="wrap">
                <div class="footer">
                    <div class="spans_1_of_3">
                        <div class="span_1_of_3 right">
                            <h2>Recent posts</h2>
                            <?php
                            $args = array(
                                'numberposts' => 3,
                                'category' => 2,
                                'orderby' => 'post_date',
                                'order' => 'DESC',
                                'post_type' => 'post',
                                'post_status' => 'publish',
                                'suppress_filters' => true );                            
                            $recentPosts = wp_get_recent_posts( $args );
                            //echo '$recentPosts is '.print_r($recentPosts, true);
                            ?>
                            <ul class="f_nav">
                                <?php
                                foreach($recentPosts as $currentPost){
                                ?>
                                <li>
                                    <a href="/?p=<?php echo $currentPost['ID']; ?>">
                                        <?php 
                                        echo evermore_format_string($currentPost['post_title'], false, true, 120); 
                                        ?>
                                    </a>
                                </li>
                                <?php
                                }
                                ?>                                
                            </ul>
                        </div>
                        <div class="span_1_of_3 right">
                            <?php 
                            if( get_field( "page_excerpt", 40 ) ){
                            ?>                           
                            <h2>About <?php echo get_bloginfo( 'name' ); ?></h2>
                            <?php
                                echo get_field( "page_excerpt", 40 );
                            }
                            ?>                            
                        </div>
                        <div class="span_1_of_3">
                            <h2>social media</h2>
                            <div class="social-media">
                            <?php
                            if( get_field('display_social_media_links_on_footer', 40) && have_rows('display_social_media_links_on_footer_box', 40) ):
                            ?>                                
                            <ul>
                                <li class="rss"><a href="<?php bloginfo('rss2_url'); ?>" target="_blank"></a></li>
                                <?php
                                while ( have_rows('display_social_media_links_on_footer_box', 40) ) : the_row();
                                    $socialMediaType = get_sub_field('social_media_footer_select', 40);                                                                                                
                                    $socialMediaLink = get_sub_field('social_media_footer_link', 40);
                                ?>                            
                                <li class="<?php echo $socialMediaType; ?>"><a href="<?php echo $socialMediaLink; ?>" target="_blank"></a></li>
                                <?php
                                endwhile;
                                ?>
                                
                            </ul>
                            <?php
                            endif;
                            ?>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>	
                    <div class="footer_top">
                        <p class="link"><span>©<?php date('Y'); ?> All rights reserved | <?php echo get_bloginfo( 'name' ); ?></span></p>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript">
        /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
        var disqus_shortname = 'evemoreweddings'; // required: replace example with your forum shortname

        /* * * DON'T EDIT BELOW THIS LINE * * */
        (function () {
            var s = document.createElement('script'); s.async = true;
            s.type = 'text/javascript';
            s.src = '//' + disqus_shortname + '.disqus.com/count.js';
            (document.getElementsByTagName('HEAD')[0] || document.getElementsByTagName('BODY')[0]).appendChild(s);
        }());
        </script>

        <?php
        wp_footer();
        ?>        
    </body>
</html>
