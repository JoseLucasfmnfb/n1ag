<?php get_header(); ?>
<?php while (have_posts()) : the_post(); ?>
<section>
	<article class="single">
		<div class="wrapper">
			<?php 
				$title = get_the_title();
				if (!empty(trim($title))) : 
			?>
				<h1 class="text-center title">
					<?php echo esc_html($title); ?>
				</h1>
			<?php endif; ?>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-6 offset-md-3 col-sm-12 col-12 text-center">
					<?php if (has_post_thumbnail()) : ?>
						<?php the_post_thumbnail(full, array('class' => 'img-responsive')); ?>
					<?php endif; ?>
				</div>
				<?php 
					$content = get_the_content(); 
					if (!empty(trim(strip_tags($content)))) : 
				?>
				<div class="col-md-12 col-sm-12 col-12">
					<?php the_content(); ?>
				</div>
				<?php endif; ?>
			</div>
		</div>
	</article>
</section>
<?php endwhile; ?>
<?php get_footer(); ?>