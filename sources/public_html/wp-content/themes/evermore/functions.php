<?php

//create additional sizes
add_image_size( 'main-page-slider-image', 1663, 832, false );
add_image_size( 'main-page-slider-thumb', 100, 80, true );
add_image_size( 'main-page-gallery', 280, 163, true );


add_action('load-themes.php', 'Init_theme');

function Init_theme() {
    global $pagenow,$wp_roles;    

    if ('themes.php' == $pagenow && isset($_GET['activated'])) { // Test if theme is activate
 
        if ( ! isset( $wp_roles ) )
            $wp_roles = new WP_Roles();

        $editor = $wp_roles->get_role('administrator');
        //Adding a 'new_role' with all admin caps
        $wp_roles->add_role('siteowner', 'Site Owner', $editor->capabilities);

    }
}
 
//remove_role( 'siteowner' );

function evermore_format_string($string, $hasHTML = false, $listToCsv = false, $maxChar = -1, $end = '... ') {

    //list to csv
    if ($listToCsv && preg_match("/<[^<]+>/", $string, $m) != 0) {
        $string = preg_replace("'</li[^>]*?>.*?<li>'si", ", ", $string);
        $string = strip_tags($string, "<a>");
    }

    //strip html first
    if (!$hasHTML) {
        $string = strip_tags($string);
    }

    //truncate
    if ($maxChar > 0) {
        $encoding = 'UTF-8';
        $string = trim($string);

        if ((mb_strlen($string, $encoding)) <= $maxChar) {
            return $string;
        }

        $cutPos = $maxChar;
        $boundaryPos = mb_strrpos(mb_substr($string, 0, mb_strpos($string, ' ', $cutPos)), ' ');
        return mb_substr($string, 0, $boundaryPos === false ? $cutPos : $boundaryPos) . $end;
    }

    return $string;
}

$args = array(
	'name'          => __( 'Sidebar name', 'theme_text_domain' ),
	'id'            => 'unique-sidebar-id',
	'description'   => '',
        'class'         => '',
	'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget'  => '</li>',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>' );

function register_my_menu() {
    register_nav_menus(array(
            'header-menu' => __('Header Menu'), /*
            'footer-column1' => __('Footer-Column1'),
            'footer-column2' => __('Footer-Column2'),
            'footer-column3' => __('Footer-Column3'), */
            ) );
    
}

add_action('init', 'register_my_menu');


function home_page_add_meta_box($post) {
    if( $post->ID == 71 ){
        add_meta_box( 'evermore_home_page_gallery', 'Home Page Galleries', 'print_homepage_gallery_metabox', 'page', 'normal' );
    }
}
add_action( 'add_meta_boxes_page', 'home_page_add_meta_box' );


function print_homepage_gallery_metabox(){
    global $wpdb;
    
    //get all galleries from database
    $allGalleries = $wpdb->get_results( 
            "SELECT * FROM wp_ngg_gallery"
            , ARRAY_A );
    //echo '$allGalleries is '.print_r($allGalleries, true);
?>
<script type="text/javascript">
function removeHomePageGalleryItem(listItemNumber){    
    jQuery('#evermore-home-page-gallery-table #home-page-gallery-item-'+listItemNumber).remove();
    //change the names of each
    var counter = 1;
    jQuery('#evermore-home-page-gallery-table .home-page-gallery-item').each( function(index, element){
        var currentId = this.id;
        jQuery('#'+currentId+' .home-page-gallery-items').attr('id', 'home-page-gallery-item-'+counter);
        
        jQuery('#'+currentId+' .gallery_labels').attr('for', 'gallery_label_'+counter);
        jQuery('#'+currentId+' .home_page_gallery_labels').attr('name', 'gallery['+counter+'][label]');
        jQuery('#'+currentId+' .gallery_labels').attr('id', 'home_page_gallery_label_'+counter);
        
        jQuery('#'+currentId+' .gallery_id_labels').attr('for', 'home_page_gallery_id_'+counter);
        jQuery('#'+currentId+' select.home_page_gallery_ids').attr('name', 'gallery['+counter+'][id]');
        jQuery('#'+currentId+' select.home_page_gallery_ids').attr('id', 'home_page_gallery_id_'+counter);
                
        $(this).attr('id', 'home-page-gallery-item-'+counter);
        counter++;
    });
}
function addHomePageGalleryItem(){
    //get the number of current items
    var totalItems = jQuery('#evermore-home-page-gallery-table .home-page-gallery-items').length;    
    var nextItemNumber = totalItems+1;
    jQuery('#evermore-home-page-gallery-table').append('    <tr class="home-page-gallery-items" id="home-page-gallery-item-'+nextItemNumber+'"></tr>');
    
    jQuery('#evermore-home-page-gallery-table #home-page-gallery-item-'+nextItemNumber).append('        <th><label class="gallery_labels" for="gallery_label_'+nextItemNumber+'">Tab Label</label> <input  class="home_page_gallery_labels" type="text" name="gallery['+nextItemNumber+'][label]" id="home_page_gallery_label_'+nextItemNumber+'" value="" /></th>');
    jQuery('#evermore-home-page-gallery-table #home-page-gallery-item-'+nextItemNumber).append('        <td><label class="gallery_id_labels" for="home_page_gallery_id_'+nextItemNumber+'">Select Gallery</label></td>');
    jQuery('#evermore-home-page-gallery-table #home_page_gallery_id_1').clone().appendTo(jQuery('#evermore-home-page-gallery-table #home-page-gallery-item-'+nextItemNumber+' td') );
    jQuery('#evermore-home-page-gallery-table #home-page-gallery-item-'+nextItemNumber+' td select').attr('name', 'gallery['+nextItemNumber+'][id]');
    jQuery('#evermore-home-page-gallery-table #home-page-gallery-item-'+nextItemNumber+' td select').attr('id', 'home_page_gallery_id_'+nextItemNumber);
    jQuery('#evermore-home-page-gallery-table #home-page-gallery-item-'+nextItemNumber).append('<td><input type="button" onclick="removeHomePageGalleryItem('+nextItemNumber+');" value="Remove" /></td>');
    
    if( nextItemNumber >= 5 ){
        jQuery('#home_page_gallery_add_item').hide();
    }
}
</script>
<p>Select the galleries you would like to add to the homepage. You can add up to 5 galleries.</p>
<?php
$homePageGalleries = json_decode(get_post_meta( 71, 'home_page_galleries', true ), true);
?>
<table id="evermore-home-page-gallery-table">
    <?php
    $galleryCounter = 1;
    foreach($homePageGalleries as $currentGallerySaved){
    ?>
    <tr class="home-page-gallery-items" id="home-page-gallery-item-<?php echo $galleryCounter; ?>">
        <th>
            <label class="gallery_labels" for="gallery_label_<?php echo $galleryCounter; ?>">Tab Label</label> <input  class="home_page_gallery_labels" type="text" name="gallery[<?php echo $galleryCounter; ?>][label]" id="home_page_gallery_label_<?php echo $galleryCounter; ?>" value="<?php echo $currentGallerySaved['label']; ?>" />
        </th>
        <td>
            <label class="gallery_id_labels" for="home_page_gallery_id_<?php echo $galleryCounter; ?>">Select Gallery</label>
            <select class="home_page_gallery_ids" id="home_page_gallery_id_<?php echo $galleryCounter; ?>" name="gallery[<?php echo $galleryCounter; ?>][id]" class="home_page_gallery_ids">
                <?php
                foreach($allGalleries as $currentGallery){
                    echo '<option value="'.$currentGallery['gid'].'"';
                    if( $currentGallery['gid'] == $currentGallerySaved['id'] ){
                        echo ' selected="selected" ';
                    }
                    echo '>'.$currentGallery['title'].'</option>';
                }
                ?>        
            </select>            
        </td>
        <td><input type="button" onclick="removeHomePageGalleryItem(<?php echo $galleryCounter; ?>);" value="Remove" /></td>
    </tr>    
    <?php
        $galleryCounter++;
    }
    ?>   
</table>
<input type="button" id="home_page_gallery_add_item" value="Add another gallery" onclick="addHomePageGalleryItem();"/>
<?php
}

add_action( 'save_post', 'save_homepage_galleries' );

function save_homepage_galleries($postId){
    $homePageGalleries = array();
    if( $postId == 71 && isset($_POST['gallery']) ){
        $galleryCounter = 0;
        foreach($_POST['gallery'] as $currentGallery){
            $homePageGalleries[$galleryCounter]['label'] = $currentGallery['label'];
            $homePageGalleries[$galleryCounter]['id'] = $currentGallery['id'];
            $galleryCounter++;
        }
        if( count($homePageGalleries) > 0 ){
            update_post_meta($postId, 'home_page_galleries', json_encode($homePageGalleries) );
        }
        
    }
}

function my_dequeue_styles() {
	wp_dequeue_style( 'gctwidgetstyles' );
}
add_action( 'wp_enqueue_scripts', 'my_dequeue_styles', 99 );
?>