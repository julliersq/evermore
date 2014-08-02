<?php

//create additional sizes
add_image_size( 'main-page-slider-image', 1663, 832, false );
add_image_size( 'main-page-slider-thumb', 100, 80, true );
add_image_size( 'main-page-gallery', 280, 163, true );

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

?>