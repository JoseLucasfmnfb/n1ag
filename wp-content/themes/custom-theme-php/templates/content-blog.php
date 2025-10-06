<section id="blog">	
	<article>
		<div class="container">
			<?php  
				$args = array(
					'post_type'				 => 'top-post-blog-text',
					'posts_per_page'         => 1,
				);
			
				$my_query = new WP_Query( $args );
			
				while($my_query->have_posts()) : $my_query->the_post();
			?>
				<div class="top-text">
					<h2 class="text-center title"><?php the_title( ); ?></h2>
					<?php echo esc_html(the_excerpt()); ?>
				</div>
			<?php endwhile; ?>
		</div>
		<div class="container conteudo">
			<div class="row blog-wrapper">
				<?php  
					$args = array(
						'post_type'				 => 'post-blog',
						'posts_per_page'         => 3,
					);
				
					$my_query = new WP_Query( $args );
				
					while($my_query->have_posts()) : $my_query->the_post();
					$term = get_the_terms($post, 'categoria'); 
				?>
					<div class="col-md-4 col-sm-12 col-12 item item-1">
						<a href="<?php the_permalink( ); ?>">
							<img class="img-responsive" src="<?php the_post_thumbnail_url( ); ?>" alt="">
							<div class="category-wrapper">
								<h4><?php echo $term[0]->name; ?></h4>
							</div>
							<div class="texto">
								<p><?php echo get_the_date( ); ?></p>
								<h2><?php the_title( ); ?></h2>
								<p><?php echo get_field('texto_do_card'); ?></p>
								<p class="ver-mais">
									Ler mais
									<img class="img-responsive" src="<?php echo WP_TEMPLATE ?>/image/black-right-arrow.png">
								</p>
							</div>
						</a>
					</div>
				<?php endwhile; ?>
			</div>
		</div>
		<div class="container text-center">
			<a class="secondary-button" href="<?php echo WP_URL ?>/blog">
				Ver todos os artigos
				<img class="img-responsive" src="<?php echo WP_TEMPLATE ?>/image/blue-right-arrow.png">
			</a>
		</div>
	</article>
</section>