<?php

$loop = new posts_loop();
foreach ( $loop as $id => $post ) {
	the_title();
}
