<?php
/**
 * Plugin Name: Related Posts
 * Description: Related Posts
 * Version: 1.0.0
 * Author: khorshedalamwp
 * Text Domain: related-posts
 * License: GPLv2
 */

defined( 'ABSPATH' ) || exit;
defined( 'RLTP_PLUGIN_URL' ) || define( 'RLTP_PLUGIN_URL', WP_PLUGIN_URL . '/' . plugin_basename( dirname( __FILE__ ) ) . '/' );
defined( 'RLTP_PLUGIN_DIR' ) || define( 'RLTP_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
defined( 'RLTP_PLUGIN_FILE' ) || define( 'RLTP_PLUGIN_FILE', plugin_basename( __FILE__ ) );
defined( 'RLTP_PLUGIN_VERSION' ) || define( 'RLTP_PLUGIN_VERSION', '1.0.0' );


if ( ! class_exists( 'RLTP_Related_Posts_Main' ) ) {
	class RLTP_Related_Posts_Main {

		protected static $_instance = null;

		function __construct() {
			$this->include_files();
			$this->define_scripts();
		}

		function define_scripts() {
			add_action( 'admin_enqueue_scripts', array( $this, 'admin_script' ) );
		}


		function admin_script() {
			wp_enqueue_script( 'rltf-jquery', plugins_url( '/assets/admin/js/scripts.js', __FILE__ ), array( 'jquery' ), STDF_PLUGIN_VERSION, true );
			wp_enqueue_style( 'stdf-style-main', RLTP_PLUGIN_URL . 'assets/admin/css/style.css', array(), '1.0.0', 'all' );
		}


		function include_files() {
			require_once RLTP_PLUGIN_DIR . 'includes/class-hooks.php';
		}


		public static function instance() {
			if ( is_null( self::$_instance ) ) {
				self::$_instance = new self();
			}

			return self::$_instance;
		}

	}
}

RLTP_Related_Posts_Main::instance();