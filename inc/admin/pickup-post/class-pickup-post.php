<?php
/**
 * Customizes posts columns.
 */
class Pickup_Post {

    const PICKUP_LIMIT = 16;

    public function __construct() {
        if(!current_user_can( 'manage_options' )) return false;

        add_filter('manage_edit-post_columns', array( $this, 'add_column'));
        add_action( 'manage_post_posts_custom_column', array( $this, 'set_content'), 10, 2 );
        add_filter( 'manage_edit-post_sortable_columns', array( $this, 'column_sortable' ));
        add_action( 'pre_get_posts', array( $this, 'pre_get_pickup_posts' ));
        add_action( 'wp_ajax_pickup', array( $this, 'ajax' ));
    }

    /**
     * @return string
     */
    public static function getPath( ) {
        return get_template_directory_uri().'/inc/admin/pickup-post';
    }

    /**
     * @param $columns
     * @return mixed
     */
    public function add_column($columns) {
        wp_enqueue_style( 'pickup-css', self::getPath( ) .'/css/style.css', array(), null );
        wp_enqueue_script( 'pickup-js', self::getPath( ) . '/js/functions.js', array(),null,true);

        $columns['pickup'] =__('Pickup','medical_guide');
        return $columns;
    }

    /**
     * @param $column_name
     * @param $post_id
     */

    public function set_content( $column_name, $post_id ) {
        if ( 'pickup' != $column_name)
            return;

        $is_pickup = get_post_meta($post_id, 'pickup', true);

        if('pickup' == $column_name){
            if(!$is_pickup)
                echo '<a href="javascript:void(0)" data-post-id="'.$post_id.'" class="dashicons dashicons-star-empty" title="'.__('Toggle pickup','medical_guide').'"></a>';
            else
                echo '<a href="javascript:void(0)" data-post-id="'.$post_id.'" class="dashicons dashicons-star-filled" title="'.__('Toggle pickup','medical_guide').'"></a>';

        }


    }

    /**
     * @param $columns
     * @return mixed
     */
    public function column_sortable( $columns ) {
        $columns['pickup'] = 'pickup';
        return $columns;
    }


    /**
     * @param $query
     */
    public function pre_get_pickup_posts( $query ) {
        if( ! is_admin() )
            return;

        $orderby = $query->get( 'orderby');


        if( 'pickup' == $orderby ) {

            $meta_query = array(
                'relation' => 'OR',
                array(
                    'key'=>'pickup',
                    'compare' => 'NOT EXISTS',
                    'value' => ''
                ),
                array(
                    'key' => 'pickup',
                    'value' => true
                )
            );
            $query->set('meta_query',$meta_query);
        }
    }


    public function ajax() {
        $post_id = (int)$_POST['post_id'];
        $response = array();

        $is_pickup = get_post_meta($post_id, 'pickup', true);
        if(!$is_pickup){
            $query = new WP_Query( array('post_type'=> 'quiz', 'meta_key' => 'pickup') );
            if($query->found_posts == self::PICKUP_LIMIT){
                echo json_encode($response = [
                    'error' => sprintf( "Only %s pickup post can be , please remove one", self::PICKUP_LIMIT )
                ]);
                wp_die();
            }
            add_post_meta($post_id, 'pickup' ,true);
            $response['class'] = 'dashicons dashicons-star-filled';
            $response['status'] = 'added';
        }else{
            delete_post_meta($post_id, 'pickup');
            $response['class'] = 'dashicons dashicons-star-empty';
            $response['status'] = 'removed';
        }

        echo json_encode($response);
        wp_die();
    }
}

new Pickup_Post();