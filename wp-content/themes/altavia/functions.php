<?php
//Подключение стиоей и скриптов
require_once( dirname(__FILE__) . '/inc/enqueue.php');

//Динамический контент
require_once( dirname(__FILE__) . '/inc/display-content.php');

//Навигация админки
require_once( dirname(__FILE__) . '/inc/admin-navbar.php');

//Загрузка картинок в формате svg
require_once( dirname(__FILE__) . '/inc/svg-fix.php');

show_admin_bar(false);

//Контактные формы
require_once( dirname(__FILE__) . '/inc/forms.php');
?>