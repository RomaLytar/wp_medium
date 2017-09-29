<?php get_header('partfolio-page'); ?>
<div class="fonts" style="background: rgba(0,0,0,0.6); padding: 10px; margin-bottom: 20px;">
	<div class="content-main">
		<?php if (have_posts() ) : while (have_posts() ) : the_post(); ?>
		<h1><?php the_title(); ?></h1>
			<?php the_content(); ?>
			
		<?php endwhile; ?>

		<?php else: ?>

		<?php endif; ?>
	</div>
</div>
<?php get_footer(); ?>