<section class="page" id="page-blog">
	<div class="wrapper">
		<h1 class="text-center title">
			Serviços
		</h1>
	</div>
	<div class="container">
		<div class="row blog-wrapper">
			<div class="col-md-12 col-sm-12 col-12 main" id="main_blog">
				<?php
					$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
					$args = array(
						'paged'                  => $paged,
						'post_type'				 => 'servicos',
						'posts_per_page'         => get_option('posts_per_page'),
					);
				
					$my_query = new WP_Query( $args );
				
					while($my_query->have_posts()) : $my_query->the_post(); 
				?>
					<div class="row">
						<a href="<?php the_permalink( ); ?>">
							<div class="col-md-6 col-sm-12 col-12 imagem">
								<?php the_post_thumbnail('full', array('class' => 'img-responsive')); ?>
							</div>
							<div class="col-md-6 col-sm-12 col-12 texto">
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
		</div>
	</div>
</section>