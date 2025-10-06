<div id="btn-mobile">
	<div class="btn-mobile-box">
		<div class="btn-mobile-inner"></div>
	</div>
</div>
<div id="menu-lateral">
	<div class="bg"></div>
	<div class="menu-lateral-inner">
		<figure>
			<img class="img-responsive" src="<?php echo WP_TEMPLATE ?>/image/logo-site.png">
		</figure>
		<nav id="menu-mobile">
			<ul>
				<li>
					<a href="<?php echo WP_URL ?>/">
						Home
					</a>
				</li>
				<li>
					<a href="<?php echo WP_URL ?>/sobre-nos">
						Sobre Nós
					</a>
				</li>
				<li>
					<a href="<?php echo WP_URL ?>/blog">
						Blog
					</a>
				</li>
				<li>
					<a href="<?php echo WP_URL ?>/contato">
						Contato
					</a>
				</li>
			</ul>
		</nav>
		<div class="midias">
			<?php global $info; ?>
			<ul>
				<?php if ($info['facebook']): ?>
					<li>
						<a target="_blank" href="<?php echo $info['facebook'] ?>">
							<i class="fab fa-facebook-f"></i>
						</a>
					</li>
				<?php endif ?>
				<?php if ($info['instagram']): ?>
					<li>
						<a target="_blank" href="<?php echo $info['instagram'] ?>">
							<i class="fab fa-instagram"></i>
						</a>
					</li>
				<?php endif ?>
				<?php if ($info['linkedin']): ?>
					<li>
						<a target="_blank" href="<?php echo $info['linkedin'] ?>">
							<i class="fab fa-linkedin-in"></i>
						</a>
					</li>
				<?php endif ?>
				<?php if ($info['whatsapp']): ?>
					<li>
						<a target="_blank" href="https://api.whatsapp.com/send?phone=55<?php echo preg_replace('/\D/', '', $info['whatsapp']); ?>">
							<i class="fab fa-whatsapp"></i>
						</a>
					</li>
				<?php endif ?>
			</ul>
		</div>
	</div>
</div>