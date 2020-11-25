<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'wordpress' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'root' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'zb.o&A?OQ?5g7rp{qkI/YYd/.}3G^iaux>_Od@*4<=;)-Lozo2}LR.@^m^H>bvWL' );
define( 'SECURE_AUTH_KEY',  'Ue9,m yX@}cpn3#g]{.>dSj)8p{Ijck_n]gg*Bofyk6a*EyP,5`d2OJz<to#|9/{' );
define( 'LOGGED_IN_KEY',    '1LLdh3;E,q}wdt1i?lS3Yuf,|se,*&}<R_FT:iBN.uoeL?!h}JEGEC^uH b j-il' );
define( 'NONCE_KEY',        '?Z#z5@L!2;&=GZ6:em2w$H>UThg8i~x:9QD0n*:obj[}y+`Nx4Jf;G6@=Y8&AtL$' );
define( 'AUTH_SALT',        'DP%&YWa{??NgC/{(b!d(x%e4@hNz#H)VQ$l8o?Vc%2DiO5!u~/v2%=zj0dEKC~uK' );
define( 'SECURE_AUTH_SALT', '%2i6]8Ms6/kK@ifKqe^KKSLt(],s[3(27{1FP+[;_9lihz}!$3#w|G}&#7X2Us.[' );
define( 'LOGGED_IN_SALT',   'jk}]DT ]NF76PjHPZy$1UcULx|^0;jYU?X-,yq%|7MD?0ymuP^F},5.]DI4p/J%k' );
define( 'NONCE_SALT',       'eA.jiirn8A:gK=x{!mAjaiqDb5XU>Bwb_i4s?4,$1{c(Vvp:C(lk!C3O67=sLLr@' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'vmet_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
