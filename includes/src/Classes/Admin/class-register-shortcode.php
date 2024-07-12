<?php
/**
 * Registers a Shortcode
 *
 * @category WordPress_Plugin
 * @package  Speedy_Share
 * @author   Anatolii S. <sobbelev.anatoly@gmail.com>
 * @license  https://www.gnu.org/licenses/gpl-2.0.html GPL-2.0-or-later
 * @version  1.0.0
 * @link     https://github.com/SobolevAnatoly/speedy-share
 * @since    1.0.0
 *
 * Description: Registers a Shortcode
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
 */

declare(strict_types=1);

namespace SSHARE\Classes\Admin;

defined( 'ABSPATH' ) || exit;

use SSHARE\Classes\Admin\Template_Render;

class Register_Shortcode {

	public function __construct() {
		error_log( 'Loading ' . __CLASS__ . ' Done' );
		add_shortcode( 'sshare', array( $this, 'shortcode_init' ) );
	}

	public function shortcode_init( array $atts, string $content = '' ) {
		return $this->shortcode_make( $atts, $content );
	}

	public function shortcode_make( $atts, $content ) {
		error_log( print_r( $atts, true ) );
		return Template_Render::render( $atts, $content );
	}

	private function __clone() {
	}

	private function __wakeup() {
	}
}
