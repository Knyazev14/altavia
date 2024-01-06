<?php
function add_news_category_submenu() {
	add_menu_page(
			'Услуги', 
			'Услуги', 
			'manage_options',
			'edit.php?category_name=services', 
			'',
			'dashicons-format-aside',
			6
	);
}
add_action( 'admin_menu', 'add_news_category_submenu' );
?>