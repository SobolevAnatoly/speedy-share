<?php
defined( 'ABSPATH' ) || exit;
define( 'SSHARE_AUTOLOAD', '1.0.0' );

$classmap = array(
	'SSHARE' => SSHARE_PLUGIN_DIR . 'includes/src/',
);

spl_autoload_register(
	function ( string $class_name ) use ( $classmap ) {

		$parts = explode( '\\', $class_name );
		$namespace = array_shift( $parts );
		$classfile = array_pop( $parts ) . '.php';

		if ( ! array_key_exists( $namespace, $classmap ) ) {
			return;
		}

		$path = implode( DIRECTORY_SEPARATOR, $parts );
		$classfile = str_replace( '_', '-', strtolower( $classfile ) );
		$classfile = 'class-' . $classfile;
		$file = $classmap[ $namespace ] . $path . DIRECTORY_SEPARATOR . $classfile;

		if ( ! file_exists( $file ) && ! class_exists( $class_name ) ) {
			return;
		}

		require_once $file;
	}
);
