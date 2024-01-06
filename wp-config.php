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
define( 'DB_USER', 'altavia_user' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'razzylom123' );

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
define( 'AUTH_KEY',         '0N39cESI[]uKE?3;.@TdGN@MM9)}gx_/5dZ4kq;7$54YLiaD`Cf4FrJ^fj@b#N[/' );
define( 'SECURE_AUTH_KEY',  'nHHrixoglE_ lIfiKv y1%1 7zDf(xViF1@L:4,b[rE/D)%p3[*x1#~|?MS7rGL0' );
define( 'LOGGED_IN_KEY',    'wShXCHHHeHXqn|9-qpVUnF*;4yPy7o%c#)!Yi?%CF+E6N+}l:d=pwNW<U5VckBIm' );
define( 'NONCE_KEY',        '~NI`<ro<=bhbhV4%$WNPqxh>eh1O+7BR&H mk`V|;5e3&w[rK0cW$E`5%s?|i~rP' );
define( 'AUTH_SALT',        'R]Enaq}&YJ1z ,:JkOK`dlrns@pO2!KRr}S-Bl14b:UZEy@$pfoy2%&FYb dZ{iZ' );
define( 'SECURE_AUTH_SALT', '_YlfI`S6T72C[FTI;8hVsuC4`;E!w|VeY&et*Av>}[^9(qU&cyTY@D|B>:sh(owF' );
define( 'LOGGED_IN_SALT',   '5P>kp:Y%(|{Z2yt2#zE/?p-H{(o7sM73hwK@qDJTD^&_*[,y;1soqYHA|ut/m=qY' );
define( 'NONCE_SALT',       'j%[v[H2bsv::sVf&qaS&oxk)@l<},BjCZ-c4TH-HFWkl1pQM&_bgY)ttG1qG zhh' );

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
