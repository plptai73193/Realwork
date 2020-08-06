<?php

// Post Type Infomation
function cpt_info($cptname,$cptslug,$cpticon,$nocat=false) {
    $labels = array(
        'name'               => _x( $cptname, 'post type general name', 'plpt' ),
        'singular_name'      => _x( $cptname, 'post type singular name', 'plpt' ),
        'menu_name'          => _x( $cptname, 'admin menu', 'plpt' ),
        'name_admin_bar'     => _x( $cptname, 'add new on admin bar', 'plpt' ),
        'add_new'            => _x( 'Add New', $cptname, 'plpt' ),
        'add_new_item'       => __( 'Add New '.$cptname, 'plpt' ),
        'new_item'           => __( 'New Item  '.$cptname, 'plpt' ),
        'edit_item'          => __( 'Edit  '.$cptname, 'plpt' ),
        'view_item'          => __( 'View  '.$cptname, 'plpt' ),
        'all_items'          => __( 'All  '.$cptname, 'plpt' ),
        'search_items'       => __( 'Search  '.$cptname, 'plpt' ),
        'parent_item_colon'  => __( 'Parent: '.$cptname.':', 'plpt' ),
        'not_found'          => __( 'No '.$cptname.' found.', 'plpt' ),
        'not_found_in_trash' => __( 'No '.$cptname.' found in Trash.', 'plpt' )
    );

    $args = array(
        'labels'             => $labels,
        'description'        => __( 'Description.', 'plpt' ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => $cptslug  ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => true,
        'menu_position'      => 6,
        'menu_icon'          => $cpticon,
        'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt', 'page-attributes','post-formats' )
    );

    register_post_type( $cptslug , $args );

    $category_name = $cptname.' Categories'; 
    $category_slug = $cptslug.'-category'; 

    if($nocat!=false) {
        $labels = array(
            'name'              => _x( $category_name, 'taxonomy general name' ),
            'singular_name'     => _x( $category_name, 'taxonomy singular name' ),
            'search_items'      => __( 'Search '.$category_name ),
            'all_items'         => __( 'All '.$category_name ),
            'parent_item'       => __( 'Parent '.$category_name ),
            'parent_item_colon' => __( 'Parent: '.$category_name.':' ),
            'edit_item'         => __( 'Edit  '.$category_name ),
            'update_item'       => __( 'Upadate  '.$category_name ),
            'add_new_item'      => __( 'Add New  '.$category_name ),
            'new_item_name'     => __( 'Name '.$category_name ),
            'menu_name'         => __( $category_name ),
        );

        $args = array(
            'hierarchical'      => true,
            'labels'            => $labels,
            'show_ui'           => true,
            'show_admin_column' => true,
            'query_var'         => true,
            'rewrite'           => true,
            '_builtin'          => false,
            'show_in_nav_menus' => true,
            'sort' => true
        );

        register_taxonomy( $category_slug, array($cptslug), $args );
    }
    
}

// Register Post Type
function post_init() {
    $dashicons = get_template_directory_uri().'/backend/images/cpt.png';
    // cpt_info(__('Works','plpt'), 'works', $dashicons, true);
    // cpt_info(__('Project','plpt'), 'project', $dashicons, true);
}
add_action( 'init', 'post_init' );