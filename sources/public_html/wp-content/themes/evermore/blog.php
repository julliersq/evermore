<?php
/*
  Template Name: Blog Page
 */

get_header();
?>
<!-- start slider-->
        <div class="slider_bg">
            <div class="wrap">
            </div>
        </div>
        <!-- start main  -->
        <div class="wrap">
            <div class="blog_slider">
                <h2>Blog</h2>
                <p>Keep in the loop</p>
            </div>
            <div class="main">
                <!-- start content_left  -->
                <div class="content_left">
                    <?php
                    $args = array(
                       'numberposts' => 0,
                       'category' => 2,
                       'orderby' => 'post_date',
                       'order' => 'DESC',
                       'post_type' => 'post',
                       'post_status' => 'publish',
                       'suppress_filters' => true );                            
                    $recentPosts = wp_get_recent_posts( $args );
                    ?>
                    <?php
                    foreach($recentPosts as $currentPost){
                    ?>
                             
                    <div class="blog_main">
                        <h2 class="blog"><?php echo $currentPost['post_title']; ?></h2>
                        <p class="blog_date">
                            <?php echo date('F j, Y', strtotime($currentPost['post_date'])); ?>
                            
                        </p>
                        <?php echo $currentPost['post_content']; ?>

                    </div>
                    <?php
                    }
                    ?>
                    
                </div>
                <?php get_sidebar(); ?>
                <div class="clear"></div>
            </div>
        </div>
<?php
get_footer();
?>