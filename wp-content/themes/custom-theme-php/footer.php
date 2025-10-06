<?php wp_footer(); ?>
<?php global $info; ?>
<footer>
	<div class="container">
		<div class="row itens-footer">
			<div class="col-sm-12 col-md-3">
				<a href="<?php echo WP_URL ?>/">
					<img class="img-responsive" src="<?php echo WP_TEMPLATE ?>/image/white-logo.png">
				</a>
				<p class="footer-text">
					Transformando ideias em soluções digitais inovadoras. Sua parceira estratégica na jornada de transformação digital.
				</p>
				<ul class="contact-list">
					<?php if ($info['endereco']): ?>
						<li>
							<a href="http://maps.google.com/?q=<?php echo $info['endereco']; ?>" target="_blank">
								<img class="img-responsive" src="<?php echo WP_TEMPLATE ?>/image/map-icon.png"> <?php echo $info['endereco']; ?>
							</a>
						</li>
					<?php endif ?>
					<?php if ($info['telefone']): ?>
						<li>
							<a href="tel:<?php echo $info['telefone']; ?>" target="_blank">
								<img class="img-responsive" src="<?php echo WP_TEMPLATE ?>/image/phone-icon.png"> <?php echo $info['telefone']; ?>
							</a>
						</li>
					<?php endif ?>
					<?php if ($info['email']): ?>
						<li>
							<a href="mailto:<?php echo $info['email']; ?>" target="_blank">
								<img class="img-responsive" src="<?php echo WP_TEMPLATE ?>/image/email-icon.png"> <?php echo $info['email']; ?>
							</a>
						</li>
					<?php endif ?>
				</ul>
			</div>
			<div class="col-sm-12 col-md-3">
				<h5>Links Rápidos</h5>
				<ul>
					<li>
						<a href="<?php echo WP_URL ?>/sobre-nos">
							Sobre Nós
						</a>
					</li>
					<li>
						<a href="<?php echo WP_URL ?>/servicos">
							Serviços
						</a>
					</li>
					<li>
						<a href="<?php echo WP_URL ?>/blog">
							Blog
						</a>
					</li>
					<li>
						<a href="<?php echo WP_URL ?>/Carreiras">
							Carreiras
						</a>
					</li>
					<li>
						<a href="<?php echo WP_URL ?>/contato">
							Contato
						</a>
					</li>
				</ul>
			</div>
			<div class="col-sm-12 col-md-3">
				<h5>Serviços</h5>
				<ul>
					<?php
						$servicos_query = new WP_Query([
							'post_type'      => 'servicos',
							'posts_per_page' => 4,
						]);

						if ($servicos_query->have_posts()) :
							while ($servicos_query->have_posts()) :
								$servicos_query->the_post();
					?>
					<li>
						<a href="<?php the_permalink(); ?>">
							<?php the_title(); ?>
						</a>
					</li>
					<?php
							endwhile;
							wp_reset_postdata();
						endif;
					?>
				</ul>
			</div>
			<div class="col-sm-12 col-md-3 col-newsletter">
				<h5>Newsletter</h5>
				<p>Receba insights exclusivos sobre tecnologia e inovação</p>
				<form id="newsletter" class="form-newsletter">
					<input type="email" name="Email" placeholder="Seu e-mail" class="email-input" required>
					<input type="submit" value="Assinar" class="primary-button">
				</form>
				<div class="midias">
					<p>Siga-nos</p>
					<ul>
						<?php if ($info['linkedin']): ?>
							<li>
								<a target="_blank" href="<?php echo $info['linkedin'] ?>">
									<img class="img-responsive" src="<?php echo WP_TEMPLATE ?>/image/linkedin-icon.png">
								</a>
							</li>
						<?php endif ?>
						<?php if ($info['github']): ?>
							<li>
								<a target="_blank" href="<?php echo $info['github'] ?>">
									<img class="img-responsive" src="<?php echo WP_TEMPLATE ?>/image/github-icon.png">
								</a>
							</li>
						<?php endif ?>
						<?php if ($info['twitter']): ?>
							<li>
								<a target="_blank" href="<?php echo $info['twitter'] ?>">
									<img class="img-responsive" src="<?php echo WP_TEMPLATE ?>/image/twitter-icon.png">
								</a>
							</li>
						<?php endif ?>
						<?php if ($info['instagram']): ?>
							<li>
								<a target="_blank" href="<?php echo $info['instagram'] ?>">
									<img class="img-responsive" src="<?php echo WP_TEMPLATE ?>/image/instagram-icon.png">
								</a>
							</li>
						<?php endif ?>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div id="copyright">
		<div class="container">
			<div class="row copyright-wrapper">
				<p>© 2024 TechInova. Todos os direitos reservados.</p>
				<p class="assinatura">
					<a target="_blank" href="<?php echo WP_URL ?>/politica-de-privacidade">
						Política de Privacidade
					</a>
					<a target="_blank" href="<?php echo WP_URL ?>/termos-de-uso">
						Termos de Uso
					</a>
					<a target="_blank" href="<?php echo WP_URL ?>/cookies">
						Cookies
					</a>
				</p>
			</div>
		</div>
	</div>
</footer>
<div class="script">
	<!-- <script type="text/javascript" src="<?php echo WP_TEMPLATE; ?>/bower_components/jquery/dist/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo WP_TEMPLATE; ?>/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo WP_TEMPLATE; ?>/bower_components/font-awesome/js/fontawesome.min.js"></script>
	<script type="text/javascript" src="<?php echo WP_TEMPLATE; ?>/bower_components/lightgallery/dist/js/lightgallery.min.js"></script>
	<script type="text/javascript" src="<?php echo WP_TEMPLATE; ?>/bower_components/jquery-mask-plugin/dist/jquery.mask.min.js"></script>
	<script type="text/javascript" src="<?php echo WP_TEMPLATE; ?>/bower_components/slick-carousel/slick/slick.min.js"></script> -->
	<script type="text/javascript" src="<?php echo WP_TEMPLATE; ?>/script.min.js"></script>
</div>
</div>
</body>
</html>