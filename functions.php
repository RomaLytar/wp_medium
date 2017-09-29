<?php 
/**
Menu
**/
register_nav_menu('menu','Primary Menu');

/*
Slider
*/
register_sidebar(array(
				'name' => 'Слайдер карусель',
				'id' => 'slider_index',
				'description' => 'Добавте слайдер через виджет "Текст"',
				'before_widget' => '',
				'after_widget' => ''));

/*
Потдержка миниатюры
*/
add_theme_support('post-thumbnails');

/*
Футер
*/
register_sidebar(array(
				'name' => 'Футер',
				'id' => 'footer',
				'description' => 'Добавте ссылки на соц сети',
				'before_widget' => '',
				'after_widget' => ''));
/*
Шорткод Галереи
*/
function them2_gallery($attr, $text=''){
	// получаем массив id картинок
	$img_src = explode(",", $attr ['ids']);
	//шаблон удаления атрибутов высоты и шорины 
	$pattern = '#(width|height)="\d+"#';
	$return = '<ul id="slide_2" class="slidik">';
	//счетчик
	$i = 1;
	foreach ($img_src as $item) {
		// получаем HTML код картинки
		$image_url = wp_get_attachment_image($item, 'full');
		//вырезаем атрибуты высоты и шырины
		$image_url = preg_replace($pattern, "", $image_url);
		//формируем вывод картинок
		if($i == 1) $return .= '<li class="show">'. $image_url .'</li>';
		else $return .= '<li>'. $image_url .'</li>';
		$i++;
		
	}
		$return .= '<a data-slidik="slide_2" class="next" href="#">Next</a>
            <a data-slidik="slide_2" class="prev" href="#">Prev</a>
            <div class="captionWrap"><div data-slidik="slide_2" class="caption"></div></div>
            <div class="portfolio-close"><a href="/"></a></div>
        </ul>';
        echo $return;    
}
add_shortcode('shortcode_gallery','them2_gallery');
