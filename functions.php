<?php 

/* ======================= THEME SETUP =========================== */

if (!function_exists('wppt_theme_setup')):
    function wppt_theme_setup() {

        add_theme_support('post-thumbnails');

        register_nav_menus([
            'primary_menu' => __('Primary menu', 'wppt'),
            'secondary_menu' => __('Secondary menu', 'wppt')
        ]);
    }
endif;

add_action('after_setup_theme', 'wppt_theme_setup');



// ======================= SIDEBARS ================================

function wppt_register_sidebars() {
    register_sidebar( array(
        'name'          => 'Primary sidebar',
        'id'            => 'primary_sidebar',
        'before_widget' => '<div class="widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget__title">',
        'after_title'   => '</h2>',
    ) );
}

add_action( 'widgets_init', 'wppt_register_sidebars' );




/* ======================= TOP MENU CSS CLASSES =========================== */


/* Add specific class for top menu li */

function wppt_add_class_topmenu_li( $classes, $item, $args ) {
    if( $args->theme_location == 'primary_menu') {
        $classes[] = 'top-navigation__item';
    }
    return $classes;

}

add_filter('nav_menu_css_class', 'wppt_add_class_topmenu_li', 1, 3);


/* Add specific class for top menu anchor */

function wppt_add_class_topmenu_a( $atts, $item, $args ) {
    if( $args->theme_location == 'primary_menu' ) {
      $atts['class'] = 'top-navigation__link';
    }
    return $atts;
}

add_filter( 'nav_menu_link_attributes', 'wppt_add_class_topmenu_a', 10, 3 );


/* ======================= END TOP MENU CSS CLASSES =========================== */


/* ======================= FOOTER MENU CSS CLASSES =========================== */


/* Add specific class for top menu li */

function wppt_add_class_footermenu_li( $classes, $item, $args ) {
    if( $args->theme_location == 'secondary_menu') {
        $classes[] = 'footer-menu__item';
    }
    return $classes;

}

add_filter('nav_menu_css_class', 'wppt_add_class_footermenu_li', 1, 3);


/* Add specific class for top menu anchor */

function wppt_add_class_footermenu_a( $atts, $item, $args ) {
    if( $args->theme_location == 'secondary_menu' ) {
      $atts['class'] = 'footer-menu__link';
    }
    return $atts;
}

add_filter( 'nav_menu_link_attributes', 'wppt_add_class_footermenu_a', 10, 3 );


/* ======================= END FOOTER MENU CSS CLASSES =========================== */





function poruszeni_register_styles() {
    wp_enqueue_style('poruszeni-styles', get_template_directory_uri() . "/style.css", array(), '1.0', false);
}
add_action('wp_enqueue_scripts', 'poruszeni_register_styles');

function wppt_add_scripts() {
    wp_register_script('mobile-menu', get_template_directory_uri() . "/js/menu.js", array(), '1.0', true);
    wp_enqueue_script('mobile-menu');
  
}

add_action('wp_enqueue_scripts', 'wppt_add_scripts');




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
