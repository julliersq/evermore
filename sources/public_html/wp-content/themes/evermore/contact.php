<?php
/*
  Template Name: Contact Page
 */

$currentPage = get_queried_object();

$pageID = $currentPage->ID;

$addressString = '';

if( get_field( 'address_1' ) ){
    $addressString = get_field( 'address_1' );
}

if( get_field( 'address_2' ) ){
    $addressString .= ','.get_field( 'address_2');
}

if( get_field( 'address_3' ) ){
    $addressString .= ','.get_field( 'address_3' );
}

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
                //if( $addressString != '' ){
                ?>
                <!-- start grids_1_of_3  -->
                <div class="map">
                    <iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA655GgAQHkv90j_XFNz4TfT1PpazD-TAA&zoom=14&q=<?php echo $addressString; ?>"></iframe>
                </div>                
                <?php
                //}
                ?>
                <!-- start main_btm -->
                <div class="contact">
                    <div class="company_address">
                        <p><?php echo $currentPage->post_content; ?></p>
                        <h3><?php echo get_bloginfo( 'name' ); ?></h3>
                        <?php
                        if( get_field( 'address_1' ) ){
                            echo '<p>'.get_field( 'address_1' ).'</p>';
                        }
                        if( get_field( 'address_2' ) ){
                            echo '<p>'.get_field( 'address_2' ).'</p>';
                        }
                        if( get_field( 'address_3' ) ){
                            echo '<p>'.get_field( 'address_3' ).'</p>';
                        }
                        if( get_field( 'phone_number' ) ){
                            echo '<p>Phone: '.get_field( 'phone_number' ).'</p>';
                        }
                        if( get_field( 'fax_number' ) ){
                            echo '<p>Fax: '.get_field( 'fax_number' ).'</p>';
                        }
                        if( get_field( 'address1' ) ){
                            echo '<p>Email: <a href="'.get_field( 'email_contact' ).'">'.get_field( 'email_contact' ).'</a></p>';
                        }
                        
                        ?>
                    </div>
                    <div class="contact-form">
                        <?php
                        echo do_shortcode('[gravityform id=1 title=false description=false ajax=true tabindex=49]');
                        ?>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
<?php
get_footer();
?>