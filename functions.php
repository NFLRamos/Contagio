<?php

/**
 * Understrap functions and definitions
 *
 * @package understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

$understrap_includes = array(
	'/theme-settings.php',                  // Initialize theme default settings.
	'/setup.php',                           // Theme setup and custom theme supports.
	'/widgets.php',                         // Register widget area.
	'/enqueue.php',                         // Enqueue scripts and styles.
	'/template-tags.php',                   // Custom template tags for this theme.
	'/pagination.php',                      // Custom pagination for this theme.
	'/hooks.php',                           // Custom hooks.
	'/extras.php',                          // Custom functions that act independently of the theme templates.
	'/customizer.php',                      // Customizer additions.
	'/custom-comments.php',                 // Custom Comments file.
	'/jetpack.php',                         // Load Jetpack compatibility file.
	'/class-wp-bootstrap-navwalker.php',    // Load custom WordPress nav walker.
	'/woocommerce.php',                     // Load WooCommerce functions.
	'/editor.php',                          // Load Editor functions.
	'/deprecated.php',                      // Load deprecated functions.
);

foreach ($understrap_includes as $file) {
	$filepath = locate_template('inc' . $file);
	if (!$filepath) {
		trigger_error(sprintf('Error locating /inc%s for inclusion', $file), E_USER_ERROR);
	}
	require_once $filepath;
}

function my_custom_post_service()
{
	$labels = array(
		'name'               => _x('Serviços', 'post type general name'),
		'singular_name'      => _x('Serviço', 'post type singular name'),
		'add_new'            => _x('Adicionar', 'serviço'),
		'add_new_item'       => __('Adicionar serviço'),
		'edit_item'          => __('Editar Serviço'),
		'new_item'           => __('Novo Serviço'),
		'all_items'          => __('Todos os serviços'),
		'view_item'          => __('Ver serviço'),
		'search_items'       => __('Procurar serviços'),
		'not_found'          => __('Serviço não encontrado'),
		'not_found_in_trash' => __('Serviço não encontrado no Lixo'),
		//'parent_item_colon'  => ’,
		'menu_name'          => 'Serviços'
	);
	$args = array(
		'labels'        => $labels,
		'description'   => 'services',
		'public'        => true,
		'menu_position' => 5,
		'supports'      => array('title', 'editor', 'thumbnail', 'excerpt', 'comments'),
		'has_archive'   => true,
	);
	register_post_type('service', $args);
}
add_action('init', 'my_custom_post_service');


function my_custom_post_work()
{
	$labels = array(
		'name'               => _x('Projetos', 'post type general name'),
		'singular_name'      => _x('Projeto', 'post type singular name'),
		'add_new'            => _x('Adicionar', 'projeto'),
		'add_new_item'       => __('Adicionar projeto'),
		'edit_item'          => __('Editar projeto'),
		'new_item'           => __('Novo projeto'),
		'all_items'          => __('Todos os projetos'),
		'view_item'          => __('Ver projeto'),
		'search_items'       => __('Procurar projetos'),
		'not_found'          => __('Projeto não encontrado'),
		'not_found_in_trash' => __('Projeto não encontrado no Lixo'),
		//'parent_item_colon'  => ’,
		'menu_name'          => 'Projetos'
		
	);
	$args = array(
		'labels'        => $labels,
		'description'   => 'works',
		'public'        => true,
		'menu_position' => 5,
		'supports'      => array('title', 'editor', 'thumbnail', 'excerpt', 'comments'),
		'has_archive'   => true,
		'menu_icon'     => 'dashicons-hammer',
	);
	register_post_type('work', $args);
}
add_action('init', 'my_custom_post_work');

function my_custom_post_work_taxonomy()
{

	$labels = array(
		'name' => _x('Categorias', 'taxonomy general name'),
		'singular_name' => _x('Categoria', 'taxonomy singular name'),
		'search_items' =>  __('Procurar Categorias'),
		'all_items' => __('Todas as categorias'),
		'parent_item' => __('Parent Category'),
		'parent_item_colon' => __('Parent Category:'),
		'edit_item' => __('Editar categoria'),
		'update_item' => __('Atualizar categoria'),
		'add_new_item' => __('Adicionar categoria'),
		'new_item_name' => __('Novo nome da categoria'),
		'menu_name' => __('Categorias'),
	);

	register_taxonomy('types', array('work'), array(
		'hierarchical' => true,
		'labels' => $labels,
		'show_ui' => true,
		'show_admin_column' => true,
		'query_var' => true,
		//'rewrite' => array( 'slug' => 'type' ),
	));
}

add_action('init', 'my_custom_post_work_taxonomy');

function the_team()
{
	$labels = array(
		'name'               => _x('Equipa', 'post type general name'),
		'singular_name'      => _x('Equipa', 'post type singular name'),
		'add_new'            => _x('Adicionar', 'membro'),
		'add_new_item'       => __('Adicionar membro'),
		'edit_item'          => __('Editar membro'),
		'new_item'           => __('Novo membro'),
		'all_items'          => __('Todos os membros'),
		'view_item'          => __('Ver membro'),
		'search_items'       => __('Procurar membros'),
		'not_found'          => __('Membro não encontrado'),
		'not_found_in_trash' => __('Membro não encontrado no Lixo'),
		//'parent_item_colon'  => ’,
		'menu_name'          => 'Equipa'
	);
	$args = array(
		'labels'        => $labels,
		'description'   => 'Team',
		'public'        => true,
		'menu_position' => 5,
		'supports'      => array('title', 'editor', 'thumbnail', 'excerpt', 'comments'),
		'has_archive'   => true,
		'menu_icon'     => 'dashicons-groups',
	);
	register_post_type('team', $args);
}
add_action('init', 'the_team');

function partners()
{
	$labels = array(
		'name'               => _x('Parcerias', 'post type general name'),
		'singular_name'      => _x('Parcerias', 'post type singular name'),
		'add_new'            => _x('Adicionar', 'parceria'),
		'add_new_item'       => __('Adicionar parceria'),
		'edit_item'          => __('Editar parceria'),
		'new_item'           => __('Novo parceria'),
		'all_items'          => __('Todos os parcerias'),
		'view_item'          => __('Ver parceria'),
		'search_items'       => __('Procurar parcerias'),
		'not_found'          => __('Parceria não encontrado'),
		'not_found_in_trash' => __('Parceria não encontrado no Lixo'),
		//'parent_item_colon'  => ’,
		'menu_name'          => 'Parcerias'
	);
	$args = array(
		'labels'        => $labels,
		'description'   => 'Partners',
		'public'        => true,
		'menu_position' => 5,
		'supports'      => array('title', 'editor', 'thumbnail', 'excerpt', 'comments'),
		'has_archive'   => true,
	);
	register_post_type('partners', $args);
}
add_action('init', 'partners');