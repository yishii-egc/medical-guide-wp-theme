<?php
require_once 'inc/utils.php';
require_once 'inc/breadcrumbs.php';
require_once 'inc/admin/pickup-post/class-pickup-post.php';

define('MAIN_SITE_URL', 'https://okusuri-shop.com');

add_action( 'wp_enqueue_scripts', 'load_theme_scripts' );
function load_theme_scripts() {

    wp_enqueue_style( 'normalize', 'https://necolas.github.io/normalize.css/7.0.0/normalize.css', array(), null );
    wp_enqueue_style( 'style_pc', get_template_directory_uri().'/css/style_pc.css', array(), null );
    wp_enqueue_style( 'slick', get_template_directory_uri().'/css/slick.css', array(), null );
    wp_enqueue_style( 'responsive', get_template_directory_uri().'/css/responsive.css', array(), null );
    wp_enqueue_style( 'bootstrapcdn', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', array(), null );


    wp_enqueue_script( 'analytics', get_template_directory_uri() . '/js/analytics.js', array(), null, true);
    wp_enqueue_script( 'java-script', get_template_directory_uri() . '/js/java-script.js', array(), null, true);

}


add_action( 'admin_enqueue_scripts', 'admin_load_scripts' );
function admin_load_scripts() {
    wp_enqueue_style( 'admin-style', get_template_directory_uri().'/css/admin-style.css', array(), '4.0.3' );
}



add_action('wp_enqueue_scripts', 'modify_jquery');
function modify_jquery() {
    if (!is_admin()) {
        wp_deregister_script('jquery');
        wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js', array(), '1.11.1');
    }
}



add_action( 'after_setup_theme', 'setup_current_theme' );
function setup_current_theme() {
    load_theme_textdomain( 'shindan', get_template_directory() . '/language' );

    add_theme_support( 'post-thumbnails' );
    add_image_size( 'article', 120, 80, true);
    add_image_size( 'favorite', 450, 300, true);
    add_image_size( 'large', 520, 350);

}


add_filter( 'post_thumbnail_html', 'remove_thumbnail_dimensions', 10 );
function remove_thumbnail_dimensions( $html ) {
    return preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );
}


function load_template_part($template_name, $part_name=null) {
    ob_start();
    get_template_part($template_name, $part_name);
    $var = ob_get_contents();
    ob_end_clean();
    return $var;
}


add_action('admin_head', 'add_custom_tc_button');
function add_custom_tc_button() {
    global $typenow;
    if ( !current_user_can('edit_posts') && !current_user_can('edit_pages') ) {
        return;
    }
    if( ! in_array( $typenow, array( 'post' ) ) )
        return;

    add_editor_style( get_template_directory_uri().'/css/tinymce-custom.css' );
    if ( get_user_option('rich_editing') == 'true') {
        add_filter("mce_external_plugins", "add_custom_tinymce_plugin");
        add_filter('mce_buttons', 'register_custom_tc_button');
    }
}



function add_custom_tinymce_plugin($plugin) {
    return array_merge(
        array(
            'block_link' => get_template_directory_uri() . '/js/tc-buttons/block-link.func.js',
            'quote_button' => get_template_directory_uri() . '/js/tc-buttons/quote.func.js',
            'custom_button' => get_template_directory_uri() . '/js/tc-buttons/button.func.js',
        ),
        $plugin
    );
}

function register_custom_tc_button($buttons) {
    return array_merge($buttons, array(
        'block_link',
        'quote_button',
        'custom_button'
    ));
}


function get_main_categories(){
    return get_terms(
        'category',
        array('parent' => 0)
    );
}

function get_pickup_posts( $posts_per_page = 6 ){
    return  new WP_Query(array(
        'posts_per_page' => $posts_per_page,
        'meta_key' => 'pickup',
        'order' => 'ASC',
    ));
}


function get_posts_by_category( $cat, $posts_per_page = 20 ){
    return  new WP_Query(array(
        'cat' => $cat,
        'posts_per_page' => $posts_per_page,
        'order' => 'ASC',
        'meta_query' => array(
            array(
                'key'=>'pickup',
                'compare' => 'NOT EXISTS',
            )
        )
    ));
}

function get_related_posts( $posts_per_page = 16 ){
    $categories = get_the_category();
    return  new WP_Query(array(
        'cat' => $categories[0]->term_id,
        'post__not_in' => array(get_the_ID()),
        'posts_per_page' => $posts_per_page,
        'order' => 'ASC'
    ));
}


function the_category_title(){
    $category_titles = array(
        'ED' => 'EDとは',
        'ED治療薬' => 'ED治療薬とは',
        'バイアグラ' => 'バイアグラとは'
    );

    $categories =get_the_category(get_the_ID());
    $title = '';
    if(isset($categories[0])){
        $title = array_key_exists($categories[0]->name, $category_titles) ? $category_titles[$categories[0]->name] : $categories[0]->name;
    }
    echo $title;
}


add_action( 'init', 'register_shortcodes');
function register_shortcodes(){
    add_shortcode('rank-products', 'get_rank_products');
    add_shortcode('related-articles', 'get_related_articles');
}


function get_rank_products(){
    return load_template_part('template-parts/content', 'rank-products');
}

function get_related_articles(){
    return load_template_part('template-parts/content', 'related-articles');
}


function the_article_content( ) {
    $content = get_the_content() . '[related-articles]';
    $content = apply_filters( 'the_content', $content );
    $content = str_replace( ']]>', ']]&gt;', $content );
    echo $content;
}