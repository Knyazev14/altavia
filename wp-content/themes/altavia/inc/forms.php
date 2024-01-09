<?php 
//Отключаем оповещение при отправке
add_filter('wpcf7_form_response_output', '__return_empty_string');

//Отключаем теги p в формах
add_filter('wpcf7_autop_or_not', '__return_false');







?>