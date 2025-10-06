<?php
	get_header();
	echo "<main>";
	get_template_part('templates/content-banner');
	get_template_part('templates/content-sobre');
	get_template_part('templates/content-servicos');
	get_template_part('templates/content-cases');
	get_template_part('templates/content-blog');
	/* get_template_part('templates/content-contato'); */
	/* get_template_part('templates/content-mapa'); */
	echo "</main>";
	get_footer();
?>