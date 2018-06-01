<?php

namespace App;
/**
 * Foundation 6.4 "Navbar" component navwalker drop-in functionality for Sage 9
 * Version: 1.0
 * Author: Kevin Henney
 *
 */

if ( class_exists( '\Walker_Nav_Menu' ) ) {

	class FoundationNavWalker extends \Walker_Nav_Menu {
		/**
		 * @see Walker::start_lvl()
		 * @since 3.0.0
		 *
		 * @param string $output Passed by reference. Used to append additional content.
		 * @param int $depth Depth of page. Used for padding.
		 */
		public function start_lvl( &$output, $depth = 0, $args = array() ) {
			$indent = str_repeat( "\t", $depth );
			$output .= "\n$indent<ul class=\"vertical menu\">\n";
		}
	}
}