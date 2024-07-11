<?php

/**
 * Register a custom post type called "portafolio".
 *
 * @see get_post_type_labels() for label keys.
 */
function wpdocs_codex_portafolio_init() {
    $labels = array(
        'name'                  => _x( 'Proyectos', 'Post type general name', 'textdomain' ),
        'singular_name'         => _x( 'Proyecto', 'Post type singular name', 'textdomain' ),
        'menu_name'             => _x( 'Proyectos', 'Admin Menu text', 'textdomain' ),
        'name_admin_bar'        => _x( 'Proyecto', 'Agregar nuevo on Toolbar', 'textdomain' ),
        'add_new'               => __( 'Agregar nuevo', 'textdomain' ),
        'add_new_item'          => __( 'Agregar nuevo proyecto', 'textdomain' ),
        'new_item'              => __( 'Nuevo proyecto', 'textdomain' ),
        'edit_item'             => __( 'Editar proyecto', 'textdomain' ),
        'view_item'             => __( 'Ver proyecto', 'textdomain' ),
        'all_items'             => __( 'Todos los proyectos', 'textdomain' ),
        'search_items'          => __( 'Buscar en los proyectos', 'textdomain' ),
        'parent_item_colon'     => __( 'Proyectos padre:', 'textdomain' ),
        'not_found'             => __( 'No se encontraron proyectos.', 'textdomain' ),
        'not_found_in_trash'    => __( 'No se encontraron proyectos en la papelera.', 'textdomain' ),
        'featured_image'        => _x( 'Imagen destacada del proyecto', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'set_featured_image'    => _x( 'Aplicar imagen destacada del proyecto', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'remove_featured_image' => _x( 'Quitar imagen destacada del proyecto', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'use_featured_image'    => _x( 'Usar como imagen de portada', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'archives'              => _x( 'Archivos de proyecto', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'textdomain' ),
        'insert_into_item'      => _x( 'Insertar proyecto', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'textdomain' ),
        'uploaded_to_this_item' => _x( 'Subir al proyecto', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'textdomain' ),
        'filter_items_list'     => _x( 'Filtar lista de proyectos', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'textdomain' ),
        'items_list_navigation' => _x( 'Lista de navegación de proyectos', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'textdomain' ),
        'items_list'            => _x( 'Listo de proyectos', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'textdomain' ),
    );
 
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'proyecto' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_icon'          => 'dashicons-portfolio', 
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt'),
		'taxonomies'  => array( 'category', 'ano' ),
    );
 
    register_post_type( 'proyecto', $args );
}
 
add_action( 'init', 'wpdocs_codex_portafolio_init' );