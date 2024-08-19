<?php

defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'RLTP_Hooks' ) ) {
	class RLTP_Class_Hooks {

		protected static $_instance = null;

		function __construct() {
			add_action( 'init', array( $this, 'register_every_things' ) );
		}


		function register_every_things() {
			$args = array(
				'labels'        => array(
					'name'          => esc_html__( 'Vehicles', 'related-posts' ),
					'singular_name' => esc_html__( 'Vehicle', 'related-posts' ),
					'add_new'       => esc_html__( 'Add New Vehicle', 'related-posts' ),
				),
				'public'        => true,
				'menu_position' => 3,
				'show_in_menu'  => true,
				'supports'      => array( 'title', 'editor', 'thumbnail' ),
				'taxonomies'    => array( 'car', 'bi-cycle', 'honda', 'track', 'bus' ),
			);

			register_post_type( 'vehicle', $args );

			register_taxonomy( 'car', 'vehicle', [
				'labels'            => array(
					'name'          => esc_html__( 'Car', 'related-posts' ),
					'singular_name' => esc_html__( 'Car', 'related-posts' )
				),
				'hierarchical'      => true,
				'show_admin_column' => true,
				'rewrite'           => array( 'slug' => 'car' ),
			] );

			register_taxonomy( 'bi-cycle', 'vehicle', [
				'labels'            => array(
					'name'          => esc_html__( 'Bi-Cycle', 'related-posts' ),
					'singular_name' => esc_html__( 'Bi-Cycle', 'related-posts' )
				),
				'hierarchical'      => true,
				'show_admin_column' => true,
				'rewrite'           => array( 'slug' => 'bi-cycle' ),
			] );

			register_taxonomy( 'honda', 'vehicle', [
				'labels'            => array(
					'name'          => esc_html__( 'Honda', 'related-posts' ),
					'singular_name' => esc_html__( 'Honda', 'related-posts' )
				),
				'hierarchical'      => true,
				'show_admin_column' => true,
				'rewrite'           => array( 'slug' => 'honda' ),
			] );

			register_taxonomy( 'track', 'vehicle', [
				'labels'            => array(
					'name'          => esc_html__( 'Track', 'related-posts' ),
					'singular_name' => esc_html__( 'Track', 'related-posts' )
				),
				'hierarchical'      => true,
				'show_admin_column' => true,
				'rewrite'           => array( 'slug' => 'track' ),
			] );

			register_taxonomy( 'bus', 'vehicle', [
				'labels'            => array(
					'name'          => esc_html__( 'Bus', 'related-posts' ),
					'singular_name' => esc_html__( 'Bus', 'related-posts' )
				),
				'hierarchical'      => true,
				'show_admin_column' => true,
				'rewrite'           => array( 'slug' => 'bus' ),
			] );

		}


		public static function instance() {
			if ( is_null( self::$_instance ) ) {
				self::$_instance = new self();
			}

			return self::$_instance;
		}

	}
}

RLTP_Class_Hooks::instance();


