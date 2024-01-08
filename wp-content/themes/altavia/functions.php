<?php
//Подключение стиоей и скриптов
require_once( dirname(__FILE__) . '/inc/enqueue.php');

//Динамический контент
require_once( dirname(__FILE__) . '/inc/display-content.php');

//Навигация админки
require_once( dirname(__FILE__) . '/inc/admin-navbar.php');

//Загрузка картинок в формате svg
require_once( dirname(__FILE__) . '/inc/svg-fix.php');

add_filter('wpcf7_form_response_output', '__return_empty_string');

show_admin_bar(false);

//Отключаем теги p в формах
add_filter('wpcf7_autop_or_not', '__return_false');


?>