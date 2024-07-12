<?php

namespace SSHARE\Classes\Admin;

defined( 'ABSPATH' ) || exit;

class Template_Render {

	private static string $data_atts = '';

	public function __construct() {
	}

	public static function render( array $atts, string $content = '' ): string {
		if ( ! empty( $atts ) ) {
			foreach ( $atts as $key => $value ) {
				self::$data_atts .= 'data-' . $key . '=' . esc_attr( $value ) . ' ';

			}
		}
		$form = '<div {' . self::$data_atts . '>' . self::render_name() . self::render_email() . self::render_file() . '</div>';
		return $form;
	}

	private static function render_content( string $content = '' ) {
		$shortcode_ty_form = "
        <label for='ty' class='filupp'>
          <span class='filupp - file - name js - value'>Browse Files</span>
          <input type='file' name='attachment - file' value='1' id='ty'/>
        </label>";
		return $shortcode_ty_form;
	}

	private static function render_name( string $name = '' ) {
		$shortcode_name = "
        <label for='fname' class='filupp'>
          <span class='filupp-fname'>Name</span>
          <input type='text' name='fname' value='1' id='fname'/>
        </label>
        <label for='surname' class='filupp'>
          <span class='filupp-surname'>Surname</span>
          <input type='text' name='surname' value='1' id='surname'/>
        </label>";
		return $shortcode_name;
	}

	private static function render_email( string $email = '' ) {
		$shortcode_email = "
        <label for='email' class='filupp'>
          <span class='filupp-email'>Email</span>
          <input type='email' name='email' value='' id='email'/>
        </label>";
		return $shortcode_email;
	}

	private static function render_file( string $file = '' ) {
		$shortcode_file = "
        <label for='custom - file - upload' class='filupp'>
          <span class='filupp - file - name js - value'>Browse Files</span>
          <input type='file' name='attachment - file' value='1' id='custom - file - upload'/>
        </label>";
		return $shortcode_file;
	}
}
