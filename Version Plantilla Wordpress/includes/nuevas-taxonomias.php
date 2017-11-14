<?php

if ( ! function_exists( 'slan_longitudes_taxonomy' ) ) {

// Register Custom Taxonomy
function slan_longitudes_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Longitudes', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Longitud', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Longitudes', 'text_domain' ),
		'all_items'                  => __( 'Ver todos', 'text_domain' ),
		'parent_item'                => __( 'Longitud superior', 'text_domain' ),
		'parent_item_colon'          => __( 'Longitud superior:', 'text_domain' ),
		'new_item_name'              => __( 'Nombre de la nueva longitud', 'text_domain' ),
		'add_new_item'               => __( 'Agregar nueva longitud', 'text_domain' ),
		'edit_item'                  => __( 'Editar longitud', 'text_domain' ),
		'update_item'                => __( 'Actualizar longitud', 'text_domain' ),
		'view_item'                  => __( 'Ver longitud', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separar longitudes con comas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Agregar o eliminar longitudes', 'text_domain' ),
		'choose_from_most_used'      => __( 'Escoge entre los más usados', 'text_domain' ),
		'popular_items'              => __( 'Longitudes populares', 'text_domain' ),
		'search_items'               => __( 'Buscar longitudes', 'text_domain' ),
		'not_found'                  => __( 'No encontrado', 'text_domain' ),
		'no_terms'                   => __( 'No hay longitudes', 'text_domain' ),
		'items_list'                 => __( 'Lista de longitudes', 'text_domain' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'longitudes', array( 'post' ), $args );

}
add_action( 'init', 'slan_longitudes_taxonomy', 0 );

}
