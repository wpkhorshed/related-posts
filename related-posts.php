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

		public function __construct(){
			$this->include_files();
		}


		public function include_files(){
			require_once RLTP_PLUGIN_DIR .'includes/class-hooks.php';
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