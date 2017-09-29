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

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquerypp.custom.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.elastislide.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/jquery.liSlidik.js"></script>
<script type="text/javascript">
			
	$( '#carousel' ).elastislide();
    /*партфолио галерея*/
    $(function(){
    $(window).load(function(){
        $('#slide_2').liSlidik({
            auto:3000,
            duration: 1000
            });
        })
    });
			
</script>
<?php wp_footer(); ?>
</body>
</html>
