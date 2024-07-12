<?php

class Sshare_Autoloader {

	private static $_instance = null;

	private function __construct() {
		spl_autoload_register( array( $this, 'load' ) );
	}

	public static function _instance() {
		if ( ! self::$_instance ) {
			self::$_instance = new Annframe_Autoloader();
		}
		return self::$_instance;
	}

	public function load( $class_name ) {
		$file = str_replace( '_', '-', strtolower( $class_name ) );
		$file = 'class-' . $file;
		if ( is_readable( trailingslashit( YOUR_PLUGIN_PATH . '/classes-dir' ) . $file . '.php' ) ) {
			include_once trailingslashit( YOUR_PLUGIN_PATH . '/classes-dir' ) . $file . '.php';
		}
		return;
	}
}

Sshare_Autoloader::_instance();
