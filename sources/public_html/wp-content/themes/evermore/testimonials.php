<?php
/*
  Template Name: Testimonials Page
 */


$currentPage = get_queried_object();

$pageID = $currentPage->ID;

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
                <h2><?php echo $currentPage->post_title; ?></h2>
                <p><?php the_field( 'page_tagline' ); ?></p>
            </div>
            <div class="main">
                <?php
                if( get_field( 'display_sidebar' ) ){
                ?>
                <div class="content_left">
                    <div class="blog_main">
                <?php
                }
                echo $currentPage->post_content; 
                    $args = array( 
                            'post_type' => 'testimonial',
                            'post_status' => 'publish',
                        );
                    $testimonials = new WP_Query( $args );                    
                    $count_posts = $testimonials->post_count;
                    
                if( $count_posts > 0){
                    echo do_shortcode('[full-testimonials]'); 
                }
                else{
                    echo '<p>There are no testimonials to display.</p>';
                }
                if( get_field( 'display_sidebar' ) ){
                ?>
                    </div>
                </div>    
                <?php
                }
                if( get_field( 'display_sidebar' ) ){
                    get_sidebar(); 
                }
                ?>
                <div class="clear"></div>                
            </div>
        </div>
<?php
get_footer();
?>