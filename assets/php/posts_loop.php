<?php

/**
 * WordPress Main Posts Loop Iterator
 */
class posts_loop implements Iterator {
	public function __construct() {
		//
	}

	function rewind() {
		rewind_posts();
	}

	function current() {
		global $post;
		return $post;
	}

	function key() {
		global $post;
		return $post->ID;
	}

	function next() {
		the_post();
	}

	function valid() {
		return have_posts();
	}
}