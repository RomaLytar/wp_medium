    <?php get_header('');?>
    <div class="content-main">

    	<div class="content-main-bocks">
        <?php $i=1; ?>
        <?php if (have_posts() ) : while (have_posts() ) : the_post(); ?>
            <div>
                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                <?php $castom_fils = get_post_custom( get_the_ID()); ?>
                <!--Место. дата и билет  -->
                <?php if($castom_fils['place'][0]): ?>
                    <p class="ex-place"><?php echo $castom_fils['place'][0] ?></p>
                <?php endif?>
                <?php if($castom_fils['data'][0]): ?>
                    <p class="ex-date"><?php echo $castom_fils['data'][0] ?></p>
                <?php endif?>
                <?php if($castom_fils['ticket'][0]): ?>
                    <p class="ex-ticket"><?php echo $castom_fils['ticket'][0] ?></p>
                <?php endif?>
                <?php the_excerpt(); ?>
                <p><a href="<?php the_permalink(); ?>" class="read-more">Read more</a></p>
            </div>
            <?php
            if($i == 3 ){
                echo "<div class='clear'></div>";
                $i = 0;
             
            }
            $i++; ?>
<?php endwhile; ?>

<?php else: ?>

<?php endif; ?>


        </div>             
    </div>  
    <?php get_footer(); ?>