<?php 


function wps_files() {
    wp_enqueue_style('normalize-css', 'https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css');
    wp_enqueue_style('font-awsome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css');
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css?family=Roboto+Slab:300,400,700|Roboto:300,400,500,700&display=swap&subset=latin-ext');
    wp_enqueue_style('wps_main_styles', get_stylesheet_uri());
    wp_enqueue_script('hamburger-menu', get_theme_file_uri('/js/menu.js'), NULL, '1.0', true);
    wp_enqueue_script('search-box', get_theme_file_uri('/js/search.js'), NULL, '1.0', true);
}

add_action('wp_enqueue_scripts', 'wps_files');


function wps_features() {
    register_nav_menu('header-menu', 'Header Menu');
    register_nav_menu('footer-right-menu', 'Footer Right Menu');
    register_nav_menu('footer-left-menu', 'Footer Left Menu');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'wps_features');


// ------------- HEADER NAVIGATION CUSTOM STYLES --------------------

function wps_header_menu_li_class( $classes, $item, $args ) {
    if( $args->theme_location == 'header-menu') {
        $classes[] = 'top-navigation__item';
    }
    return $classes;

}

add_filter('nav_menu_css_class', 'wps_header_menu_li_class', 1, 3);

function wps_header_menu_a_class( $atts, $item, $args ) {
    if( $args->theme_location == 'header-menu' ) {
      $atts['class'] = 'top-navigation__link';
    }
    return $atts;
}

add_filter( 'nav_menu_link_attributes', 'wps_header_menu_a_class', 1, 3);

// ------------- FOOTER NAVIGATIONS CUSTOM STYLES --------------------

function wps_footer_menu_li_class( $classes, $item, $args ) {
    if( $args->theme_location == 'footer-left-menu' || $args->theme_location == 'footer-right-menu') {
        $classes[] = 'footer-navigation__item';
    }
    return $classes;

}

add_filter('nav_menu_css_class', 'wps_footer_menu_li_class', 1, 3);

function wps_footer_menu_a_class( $atts, $item, $args ) {
    if( $args->theme_location == 'footer-left-menu' || $args->theme_location == 'footer-right-menu' ) {
      $atts['class'] = 'footer-navigation__link';
    }
    return $atts;
}

add_filter( 'nav_menu_link_attributes', 'wps_footer_menu_a_class', 1, 3 );




function add_post_image_class($content){
    return str_replace('<img', '<img class="post__image"', $content);
}
add_filter('the_content', 'add_post_image_class');


/* ===================== FACEBOOK OPEN GRAPH ========================== */

function wppt_og_fb_image(){
    if( is_single() ) {
        echo '<meta property="og:url" content="'. get_permalink() .'">';
        echo '<meta property="og:image" content="'. get_the_post_thumbnail_url(get_the_ID(),'full')   .'" />';
    } else {
        echo '<meta property="og:url" content="'. get_site_url() .'">';
        echo '<meta property="og:image" content="'. get_site_url() .'/cover.jpg" />';
    }
}

add_action('wp_head', 'wppt_og_fb_image');

/* ===================== END FACEBOOK OPEN GRAPH ========================== */


// function own_the_content($content){
//     return str_replace('<p>', '<p class="post__content">', $content);
// }
// add_filter('the_content', 'own_the_content');


// function wpdocs_excerpt_more( $more ) {
//     return '<p><a class="post__link" href="'.get_the_permalink().'" rel="nofollow">Czytaj dalej</a></p>';
// }
// add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );



?>
