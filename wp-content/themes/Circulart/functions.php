<?php
/*
Description: WP Functions - Theme init
Theme: After Party Bogotá
*/
//add image in posts
add_theme_support('post-thumbnails');

define('themeDir', get_template_directory() . '/');
define('themeDirUri', get_template_directory_uri());

/* Jquery + Main */
add_action("wp_enqueue_scripts", "my_jquery_enqueue", 11);

function my_jquery_enqueue() {
    wp_deregister_script('jquery');
    wp_register_script('jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js", false, '2.1.3' , true);
    wp_enqueue_script('jquery');
    wp_enqueue_script( 'main', themeDirUri . '/assets/js/main.js', '', '', true );
}
/* remove emoji comments */
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );


/* Add Menu */
add_action('init', 'register_my_menus');
function register_my_menus()
{
    register_nav_menus(
        array(
            'menuHeader' => __('Menu Header'),
            'menuFooter' => __('Menu Footer')
        )
    );
}

/* Add Space Search Widget */
add_action('widgets_init', 'widgetSearchFooter');
function widgetSearchFooter(){
    register_sidebar(
        array(
            'id' => 'widgetSearch', /* ID unique*/
            'name' => 'widgetSearch',
            'description' => 'widget',
            'before_widget' => '<div class "SearchFooter">',
            'after_widget' => '</div>',
            'before_title' => '<strong>',
            'after_title' => '</strong>',
        )
    );
}
/* Add Custom Search */
add_filter('get_search_form', 'searchCustom');
function searchCustom() {
    $form = '<form role="search" method="get"   action="' . home_url( '/' ) . '" >
    <input type="text" placeholder="Buscar" value="" name="s" >
        <button></button>

    </form>';
    return $form;
}
if( class_exists( 'kdMultipleFeaturedImages' ) ) {

    $args = array(
        'id' => 'featured-image-2',
        'post_type' => 'page',      // Set this to post or page
        'labels' => array(
            'name'      => 'Featured image 2',
            'set'       => 'Set featured image 2',
            'remove'    => 'Remove featured image 2',
            'use'       => 'Use as featured image 2',
        )
    );

    new kdMultipleFeaturedImages( $args );
}
add_theme_support('category-thumbnails');

function et_excerpt_length($length) {
    return 22;
}
add_filter('excerpt_length', 'et_excerpt_length');

/* Add a link  to the end of our excerpt contained in a div for styling purposes and to break to a new line on the page.*/

function et_excerpt_more($more) {
    global $post;
    return '<div class="view-full-post"><a href="'. get_permalink($post->ID) . '" class="view-full-post-btn">VER MAS</a></div>';
}
add_filter('excerpt_more', 'et_excerpt_more');
// Numbered Pagination
if ( !function_exists( 'wpex_pagination' ) ) {

    function wpex_pagination() {

        $prev_arrow = is_rtl() ? '&rarr;' : '&larr;';
        $next_arrow = is_rtl() ? '&larr;' : '&rarr;';

        global $my_query;
        $total = $my_query->max_num_pages;
        $big = 999999999; // need an unlikely integer
        if( $total > 1 )  {
            if( !$current_page = get_query_var('paged') )
                $current_page = 1;
            if( get_option('permalink_structure') ) {
                $format = 'page/%#%/';
            } else {
                $format = '&paged=%#%';
            }
            echo paginate_links(array(
                'base'			=> str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                'format'		=> $format,
                'current'		=> max( 1, get_query_var('paged') ),
                'total' 		=> $total,
                'mid_size'		=> 3,
                'type' 			=> 'list',
                'prev_text'		=> $prev_arrow,
                'next_text'		=> $next_arrow,
            ) );
        }
    }

}
