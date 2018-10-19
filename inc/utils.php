<?php
/**
 * @param $string
 * @param $length
 * @param string $after
 * @return string
 */
function truncateText($string, $length, $after='...')
{
    if (mb_strlen($string, 'utf-8') > $length) {
        return mb_substr($string, 0, $length, 'utf-8') . $after;
    }
    return $string;
}

/**
 * @return bool
 */
function the_pagination(){
    global $wp_query, $total_user_pages;

    $total = $wp_query->max_num_pages;
    $total = ($total == 0 && (isset($total_user_pages)))? $total_user_pages : $total;
    if($total <= 1) return false;

    $big = 999999999; // need an unlikely integer
    $current = max( 1, get_query_var('paged') );
    $prev_url = $current - 1 ;
    $next_url = ($current != $total)? $current + 1 : $current ;

    $pagination = paginate_links( array(
        'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
        'format' => '?paged=%#%',
        'current' => max( 1, get_query_var('paged') ),
        'total' => $total,
        'prev_next' => false,
        'type' => 'array',
        'mid_size' => 10
    ) );

    $html[] = '<div class="pagination">';
    $html[] = '<ul>';
    $html[] = '<li class="prev"><a href="'.esc_url( get_pagenum_link( $prev_url ) ).'" class="back '.($prev_url == 0? 'disabled' : '').'"></a></li>';
    foreach($pagination as $page){
        $html[] = '<li>'. $page .'</li>';
    }
    $html[] = '<li class="separator"></li>';
    $html[] = '<li class="mobile-counter"><span>'.$current.'</span><em>/</em>'. $total .'</li>';
    $html[] = '<li class="next"><a href="'.esc_url( get_pagenum_link( $next_url ) ).'" class="forward '.($prev_url == ($total -1) ? 'disabled' : '').'"></a></li>';
    $html[] = '</ul>';
    $html[] = '</div>';
    $html = implode("\n", $html);
    echo $html;
    wp_reset_query();
    return true;
}

function the_breadcrumbs(){
    if ( function_exists( 'yoast_breadcrumb' ) ) {
        echo str_replace('»', '<span class="separator">»</span>', yoast_breadcrumb('','', false));
    }else{
        simple_breadcrumbs();
    }
}

/**
 * @return string
 */
function get_current_page_classes(){
    global $post;
    $classes = '';
    if(!empty($post->post_name)){
        $classes = $post->post_name . '-page';
    }elseif( is_home( ) || is_front_page( )){
        $classes = 'home-page';
    }
    return $classes;
}

/**
 * @param $name
 * @param string $attr
 */
function the_thumbnail_alt($name, $attr = ''){
    if(has_post_thumbnail()) {
        the_post_thumbnail($name, $attr);
    }else {
        echo '<img src = "'. get_template_directory_uri() . '/img/no-image/'. $name .'.png" alt = "" />';
    }
}

function getTextContent(){
    $content = preg_replace('#<h1>(.*?)</h1>#', '', get_the_content());
    $content = preg_replace('#<h2>(.*?)</h2>#', '',$content);
    $content = preg_replace('#<h3>(.*?)</h3>#', '', $content);
    return strip_tags($content);
}