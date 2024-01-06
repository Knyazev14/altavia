<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'altavia_db' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'F1RmQoe9x:v`!HxgV^hCv=$f/|;#!0|uYkb#8^!BRh`k.q4(=4XZ&e9hYafs<,Xe' );
define( 'SECURE_AUTH_KEY',  ' l]Et8_|5&t0l8lo.7$LhBr5cJUD@mmdiH0%n2]aoCKj2CkSpP1h}^O>>op)ixxk' );
define( 'LOGGED_IN_KEY',    ')!HN }[$aGoU%qq^OJ;nkW)Gq},pwm0{i2uqxeZ;^XZ04Tu`#@g,)zQ?|4e75OST' );
define( 'NONCE_KEY',        'voxE6#`lr]@1aZpsYAM]cZ!PNdy&c8f* ZfHfsf9.< SVPuQ/k8n]@|=b^3{b=2|' );
define( 'AUTH_SALT',        '|3PR96MzK|uIEnRh-@DwC>V}CfiyB}EJ4ofiH`droB)|5)wKwjrbpIE}en6:Z*w;' );
define( 'SECURE_AUTH_SALT', '2ljVO&l0BOCYl/{91,xll6){ho!A.!FrYY*DAB_d33bm*PW]SCo9h0UY)Ua]DA^,' );
define( 'LOGGED_IN_SALT',   '%DcIT-XOC&6bnJ)E@kYyh*u2<5*z~6t5GGw*oV*)h>9l&Gx`M,304!q_7LM&UANx' );
define( 'NONCE_SALT',       'Epm5rw8Udj`c$T/MQf@@sN9}?-oFvQFakd4lQH`_3XBZRX9)_b-=%lE,0]S5?5M/' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
