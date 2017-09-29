<?php 
/*
Template name: Шаблон страницы контактов
*/
?>
<?php get_header('page');?>
	<div class="content-main">
       	<div class="content-left">
			<?php if (have_posts() ) : while (have_posts() ) : the_post(); ?>
				<h1><?php the_title(); ?></h1>
					 <div class="contact-form">
						<?php the_content(); ?>
					 </div>
				<?php endwhile; ?>
				<?php else: ?>
				<?php endif; ?>
		</div>
            <div class="sidebar">
	        	<div>
	        	
	        	<?php if (have_posts() ) : while (have_posts() ) : the_post(); ?>
				<h1><?php the_title(); ?></h1>
					 
				<?php the_post_thumbnail(); ?>
				<h1>Contact Details</h1>
				
					<?php $custom_filds = get_post_custom (get_the_ID()); ?>
					<?php foreach ($custom_filds as $key => $value) {
						if(preg_match('#^contact-#', $key))
						{
							echo "<p class='{$key}'>{$value[0]}</p>";
						}
						
					} ?>

				<?php endwhile; ?>
				<?php else: ?>
				<?php endif; ?>
	            </div>
        	</div>
    </div>
<?php get_footer(); ?>

