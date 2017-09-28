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

