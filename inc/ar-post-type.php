<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_action( 'init', 'my_custom_init' );
function my_custom_init() {

	register_post_type( 'camere', array(
		'labels'             => array(
			'name'              => 'Camere', // Основное название типа записи
			'singular_name'     => 'Camera', // отдельное название записи типа Book
			'add_new'           => __( 'Aggiungi Camera' ),
			'add_new_item'      => __( 'Aggiungi Camera' ),
			'edit_item'         => __( 'Modifica Camera' ),
			'new_item'          => __( 'Nuova Camera' ),
			'view_item'         => __( 'Vedi' ),
			'search_items'      => __( 'Cerca' ),
			'parent_item_colon' => '',
			'menu_name'         => 'Camere'
		),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => false,
		// 'publicly_queryable'  => false,
		'hierarchical'       => false,
		'menu_position'      => 20,
		'menu_icon'          => 'dashicons-admin-home',
		'supports'           => array( 'title', 'thumbnail' )
	) );
}