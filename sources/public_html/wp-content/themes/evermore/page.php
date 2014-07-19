<?php
/*
  Template Name: Default Page
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
                <?php echo $currentPage->post_content; ?>                    
            </div>
        </div>
<?php
get_footer();
?>