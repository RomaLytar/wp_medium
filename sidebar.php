        <div class="sidebar">
        	<div>
            <?php $args = array(
            'post_type' => 'post',
            'orderby' => 'rand',
            'category_name' => 'photo-shoot,exhibitions',
            'posts_per_page' => 1); ?>

        <?php $rend_post = new WP_Query($args); ?>
        <?php if ($rend_post->have_posts() ) : while ($rend_post->have_posts() ) : $rend_post->the_post(); ?>
           <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
           <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
           <?php the_excerpt(); ?>
           <p><a href="<?php the_permalink(); ?>" class="read-more">read more</a></p>

<?php endwhile; ?>

<?php else: ?>

<?php endif; ?>
            	<!-- <a href="#"><img src="<?php bloginfo('template_url'); ?>/images/side-img1.jpg" alt="" /></a>
                <h1><a href="#">Skill Set</a></h1>
                <p>Sed dolor ligula, tempus vitae malesuada utescu
congue vitae diam. Integer non nisl est. Suspenisse at diam turpis, ut mattis velit. Praesent vel est non augue pretium condimentum at in mauris. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur in varius ante. Etiam et nisi eget velit dignissim gravida ac nec quam. Aenean imperdiet massa quis diam tempunec.</p>
                <p><a href="#" class="read-more">read more</a></p> -->
            </div>
        </div> 