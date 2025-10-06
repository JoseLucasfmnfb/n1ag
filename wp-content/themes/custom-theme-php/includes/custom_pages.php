<?php
	// page Sobre nós
	if(get_page_by_title('Sobre nós') == NULL) {
		wp_insert_post( array(
		    'post_title' => 'Sobre nós',
		    'post_type'     => 'page',
		    'post_name'  => 'sobre-nos',
		    'comment_status' => 'closed',
		    'ping_status' => 'closed',
		    'post_status' => 'publish',
		    'post_author' => 1,
		    'menu_order' => 0
		));
	}

	// page Blog
	// if(get_page_by_title('Blog') == NULL) {
	// 	wp_insert_post( array(
	// 	    'post_title' => 'Blog',
	// 	    'post_type'     => 'page',
	// 	    'post_name'  => 'blog',
	// 	    'comment_status' => 'closed',
	// 	    'ping_status' => 'closed',
	// 	    'post_status' => 'publish',
	// 	    'post_author' => 1,
	// 	    'menu_order' => 0
	// 	));
	// }

	// page Contato
	if(get_page_by_title('Contato') == NULL) {
		 wp_insert_post( array(
		    'post_title' => 'Contato',
		    'post_type'     => 'page',
		    'post_name'  => 'contato',
		    'comment_status' => 'closed',
		    'ping_status' => 'closed',
		    'post_status' => 'publish',
		    'post_author' => 1,
		    'menu_order' => 0
		));
	}
?>