<div class="footer-wrapper">
	<div class="footer-main">
    	<div class="footer-left">
        	<a href="/"><img src="<?php bloginfo('template_url'); ?>/images/logo-ftr.jpg" alt="" /></a>
            <p>copyright 2017 <a href="#">RomaLytar@gmail.com</a></p>
        </div>
        <div class="footer-right">
        	<?php if(!dynamic_sidebar( 'footer')): ?>
                <p style="color:white">Добавте содиржимое через виджет текст</p>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php wp_footer(); ?>
</body>
</html>
