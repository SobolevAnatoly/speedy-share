<?php
define( 'SSHARE_AUTOLOAD', '1.0.0' );

$classmap = array(
	'SSHARE' => SSHARE_PLUGIN_DIR . 'includes/src/',
);
error_log( print_r( $classmap, true ) );
spl_autoload_register(
	function ( string $classname ) use ( $classmap ) {
		$parts = explode( '\\', $classname );
		error_log( print_r( $parts, true ) );
		$namespace = array_shift( $parts );
		$classfile = array_pop( $parts ) . '.php';

		if ( ! array_key_exists( $namespace, $classmap ) ) {
			return;
		}

		$path = implode( DIRECTORY_SEPARATOR, $parts );
		$file = $classmap[ $namespace ] . $path . DIRECTORY_SEPARATOR . $classfile;
		error_log( print_r( $file, true ) );
		if ( ! file_exists( $file ) && ! class_exists( $classname ) ) {
			return;
		}

		error_log( print_r( $file, true ) );
		require_once $file;
	}
);
