<?php 
	if (get_query_var('term')) {
		$tax = array(
				array(
					'taxonomy' 	=> 'categoria',
					'field' 	=> 'slug',
					'terms' 	=> get_query_var('term'),
				),
			);
		$categoria_ = get_term_by('slug', get_query_var('term'), get_query_var('taxonomy'));;
	}
?>
<section class="page" id="page-blog">
	<div class="wrapper">
		<h1 class="text-center title">
			Blog <?php echo $categoria_ ? '- '.$categoria_->name : ''; ?>
		</h1>
	</div>
	<div class="container">
		<div class="row blog-wrapper">
			<div class="col-12 categorias-mobile">
				<button id="menu-categorias">
					<h3>Categorias <i class="fas fa-angle-double-right"></i></h3>
				</button>
				<ul>
					<?php $categorias = get_terms( array('taxonomy' => 'categoria', 'parent' => 0));?>
					<?php foreach ($categorias as $categoria) { ?>
						<li>
							<a href="<?php echo get_term_link($categoria) ?>" class="<?php echo ($categoria->name == $categoria_->name) ? 'active' : ''; ?>">
								<?php echo $categoria->name; ?>
							</a>
						</li>
					<?php }?>
					<li>
						<a href="<?php echo WP_URL ?>/blog">Todas</a>
					</li>
				</ul>
			</div>
			<div class="col-md-9 col-sm-12 col-12 main" id="main_blog">
				<?php
					$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
					$args = array(
						'paged'                  => $paged,
						'post_type'				 => 'post-blog',
						'posts_per_page'         => get_option('posts_per_page'),
						'tax_query'			     => $tax,
					);
				
					$my_query = new WP_Query( $args );
				
					while($my_query->have_posts()) : $my_query->the_post(); 
					$term = get_the_terms($post, 'categoria'); 
				?>
					<div class="row">
						<a href="<?php the_permalink( ); ?>">
							<div class="col-md-6 col-sm-12 col-12 imagem">
								<?php the_post_thumbnail('full', array('class' => 'img-responsive')); ?>
							</div>
							<div class="col-md-6 col-sm-12 col-12 texto">
								<h4><?php echo $term[0]->name; ?></h4>
								<h2><?php the_title( ); ?></h2>
								<p><?php the_excerpt(); ?></p>
							</div>
						</a>
						<div class="col-sm-12 col-12">
							<hr>
						</div>
					</div>
				<?php endwhile; ?>
				<div class="col-sm-12 col-12">
					<div class="row">
						<?php if(function_exists('tw_pagination')) tw_pagination($my_query); ?>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-12 col-12 categorias">
				<h3>Categorias</h3>
				<ul>
					<?php $categorias = get_terms( array('taxonomy' => 'categoria', 'parent' => 0));?>
					<?php foreach ($categorias as $categoria) { ?>
						<li>
							<a href="<?php echo get_term_link($categoria) ?>" class="<?php echo ($categoria->name == $categoria_->name) ? 'active' : ''; ?>">
								<?php echo $categoria->name; ?>
							</a>
						</li>
					<?php }?>
					<li>
						<a href="<?php echo WP_URL ?>/blog">Todas</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</section>