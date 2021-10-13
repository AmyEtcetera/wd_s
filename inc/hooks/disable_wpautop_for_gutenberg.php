<?php
/**
 * Disables wpautop to remove empty p tags in rendered Gutenberg blocks.
 *
 * @author Corey Collins
 *
 * @package _s
 */
function _s_disable_wpautop_for_gutenberg() {
	// If we have blocks in place, don't add wpautop.
	if ( has_filter( 'the_content', 'wpautop' ) && has_blocks() ) {
		remove_filter( 'the_content', 'wpautop' );
	}
}

add_filter( 'init', '_s_disable_wpautop_for_gutenberg', 9 );
