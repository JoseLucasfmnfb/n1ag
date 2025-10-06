<!DOCTYPE html>
<html>
<head>
	<?php wp_head(); ?>
	<meta charset="utf-8">
	<?php the_css_config(); ?>
	<link rel="stylesheet" type="text/css" href="<?php echo WP_TEMPLATE ?>/style.css">
	<link rel="shortcut icon" type="image/png" href="<?php echo WP_TEMPLATE ?>/image/logo.png">
	<meta name="robots" content="index, follow">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="theme-color" content="<?php echo get_css_config()['--primarycolor'] ?>">
	<meta name="msapplication-navbutton-color" content="<?php echo get_css_config()['--primarycolor'] ?>">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="<?php echo get_css_config()['--primarycolor'] ?>">
	<title><?php echo wp_title('|', true, 'right'); ?></title>
</head>
<body>
<div class="body-wrapper">
<?php global $info; ?>
<script>var info = <?php echo json_encode($info); ?>;</script>
<?php if (is_home()): ?>
	<h1 style="display: none !important;">
		<?php echo WP_NAME; ?>
	</h1>
<?php endif ?>
<header>
	<div class="container">
		<div class="row header-wrapper">
			<div class="col-sm-4 logo">
				<a href="<?php echo WP_URL ?>/">
					<img class="img-responsive" src="<?php echo WP_TEMPLATE ?>/image/logo.png">
				</a>
			</div>
			<div class="col-sm-8">
				<nav id="menu-desktop">
					<ul>
						<li>
							<a href="<?php echo WP_URL ?>/sobre-nos">
								Sobre
							</a>
						</li>
						<li>
							<a href="<?php echo WP_URL ?>/servicos">
								Serviços
							</a>
						</li>
						<li>
							<a href="<?php echo WP_URL ?>/cases">
								Cases
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
						<li>
							<a class="primary-button" href="tel:+55<?php echo $info['whatsapp']; ?>">
								Fale Conosco
							</a>
						</li>
					</ul>
				</nav>
			</div>
		</div>
	</div>
	<?php get_template_part('templates/content-menu-lateral'); ?>
</header>