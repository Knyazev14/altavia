<?php
//Подключение стиоей и скриптов
require_once( dirname(__FILE__) . '/inc/enqueue.php');

//Динамический контент
require_once( dirname(__FILE__) . '/inc/display-content.php');

show_admin_bar(false);

add_filter('wpcf7_autop_or_not', '__return_false');
?>