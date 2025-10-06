<section id="sobre">
	<article>
		<div class="container">
			<?php  
				$args = array(
					'post_type'				 => 'sobre',
					'posts_per_page'         => 1,
				);
			
				$my_query = new WP_Query( $args );
			
				while($my_query->have_posts()) : $my_query->the_post();
				
				$image_info = get_field('legenda_imagem');
				$cards_sobre = get_field('cards_sobre');
				$missao = get_field('missao');
				$visao = get_field('visao');
				$valores = get_field('valores');
				
			?>
			<div class="row">
				<div class="col-sm-12 col-md-6">
					<div class="wrapper-image">
						<?php the_post_thumbnail('medium', array('class' => 'img-responsive')); ?>
						<div class="image-message">
							<img src="<?php echo esc_url($image_info['imagem']['url']); ?>" alt="">
							<h3><?php echo $image_info['titulo']; ?></h3>
							<p><?php echo $image_info['label']; ?></p>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-6">
					<h2><?php the_title(); ?></h2>
					<p><?php the_excerpt(); ?></p>
					<div class="row">
						<?php
							if ($cards_sobre) :
								foreach ($cards_sobre as $card) :
									$card_titulo = $card['titulo'];
									$card_label = $card['label'];
						?>
							<div class="col-sm-6 col-md-6">
								<div class="card-wrapper">
									<h4><?php echo $card_titulo; ?></h4>
									<p><?php echo $card_label; ?></p>
								</div>
							</div>
						<?php
								endforeach;
							endif;
						?>
					</div>
				</div>
			</div>
			<div class="row row-mvv">
				<div class="col-sm-12 col-md-4">
					<div class="mvv">
						<img src="<?php echo esc_url($missao['imagem']['url']); ?>" alt="">
						<h4>Missão</h4>
						<p><?php echo $missao['label']; ?></p>
					</div>
				</div>
				<div class="col-sm-12 col-md-4">
					<div class="mvv">
						<img src="<?php echo esc_url($visao['imagem']['url']); ?>" alt="">
						<h4>Visão</h4>
						<p><?php echo $visao['label']; ?></p>
					</div>
				</div>
				<div class="col-sm-12 col-md-4">
					<div class="mvv">
						<img src="<?php echo esc_url($valores['imagem']['url']); ?>" alt="">
						<h4>Valores</h4>
						<p><?php echo $valores['label']; ?></p>
					</div>
				</div>
			</div>
			<?php endwhile; ?>
		</div>
	</article>
</section>