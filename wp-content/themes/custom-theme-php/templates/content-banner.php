<section id="banner">	
	<article>
		<div class="container">
			<?php  
				$args = array(
					'post_type'				 => 'banner',
					'posts_per_page'         => 1,
				);
			
				$my_query = new WP_Query( $args );
			
				while($my_query->have_posts()) : $my_query->the_post();
				
				$custom_title = get_field('titulo_customizado');
				$cards = get_field('cards_do_banner');
				$botao = get_field('botao');
			?>
				<div class="row">
					<div class="col-sm-12 col-md-6 spacing-wrapper">
						<div class="content-wrapper">
							<div class="title">
								<h2>
									<?php echo $custom_title; ?>
								</h2>
							</div>
							<div class="content">
								<?php the_content(); ?>
							</div>
							<?php
								if($botao['label'] && $botao['link']) :
							?>
								<a class="primary-button" href="<?php echo $botao['link'] ?>" target="_blank">
									<?php echo $botao['label'] ?>
								</a>
							<?php
								endif;
							?>
						</div>
						<div class="cards-wrapper">
							<?php
								if ($cards) :
									foreach ($cards as $card) :
										$image = $card['imagem']['url'];
										$label = $card['label'];
							?>
								<div class="card-item">
									<figure class="card-icon">
										<img src="<?php echo esc_url($image); ?>" alt="">
									</figure>
									<h3 class="card-label">
										<?php echo esc_html($label); ?>
									</h3>
								</div>
							<?php
									endforeach;
								endif;
							?>
						</div>
					</div>
					<div class="col-sm-12 col-md-6">
						<div class="image-wrapper">
							<figure style="background-image: url('<?php the_post_thumbnail_url(); ?>');"></figure>
						</div>
					</div>
				</div>
			<?php endwhile; ?>
		</div>
	</article>
</section>