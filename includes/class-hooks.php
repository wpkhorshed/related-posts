<?php

defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'RLTP_Hooks' ) ) {
	class RLTP_Class_Hooks {

		protected static $_instance = null;


		public static function instance() {
			if ( is_null( self::$_instance ) ) {
				self::$_instance = new self();
			}

			return self::$_instance;
		}

	}
}

RLTP_Class_Hooks::instance();


