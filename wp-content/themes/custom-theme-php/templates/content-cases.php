<section id="cases">	
	<article>
		<div class="container">
			<?php  
				$args = array(
					'post_type'				 => 'cases-sucesso-top',
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
			<div class="row">
				<?php
                    function get_iniciais($nome) {
                        $partes = explode(' ', trim($nome));
                        $iniciais = '';

                        foreach ($partes as $parte) {
                            if ($parte !== '') {
                                $iniciais .= mb_strtoupper(mb_substr($parte, 0, 1));
                            }
                        }

                        return $iniciais;
                    }

					$args = array(
						'post_type'				 => 'cases-sucesso',
						'posts_per_page'         => 3,
					);
				
					$my_query = new WP_Query( $args );
				
					while($my_query->have_posts()) : $my_query->the_post();
                    $reate = get_field('nota');
                    $user_image = get_the_post_thumbnail_url();
                    $nome = get_field('nome');
                    $iniciais = get_iniciais($nome);
				?>
					<div class="col-md-4 col-sm-12 col-12">
						<div class="item">
                            <div class="case-icon">
                                <img class="img-responsive" src="<?php echo WP_TEMPLATE ?>/image/case-icon.png">
                            </div>
                            <div class="nota">
                                <?php
                                    $icone = WP_TEMPLATE . '/image/star-icon.png';
                                    for ($i = 0; $i < intval($reate); $i++) {
                                        echo '<img class="img-responsive" src="' . esc_url($icone) . '" alt="Nota">';
                                    }
                                ?>
                            </div>
                            <?php echo esc_html(the_excerpt()); ?>
                            <div class="user-wrapper">
                                <div class="user-image">
                                    <?php if ($user_image) : ?>
                                        <img class="img-responsive" src="<?php echo esc_url($user_image); ?>" alt="<?php echo esc_attr($nome); ?>">
                                    <?php else : ?>
                                        <div class="user-iniciais">
                                            <?php echo esc_html($iniciais); ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                                <div class="user-infos">
                                    <p class="user-name"><?php echo get_field('nome'); ?></p>
                                    <p class="user-info"><?php echo get_field('info_do_usuario'); ?></p>
                                    <p class="business-name"><?php echo get_field('nome_da_empresa'); ?></p>
                                </div>
                            </div>
                        </div>
					</div>
				<?php endwhile; ?>
			</div>
		</div>
	</article>
</section>