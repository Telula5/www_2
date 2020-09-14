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
define( 'DB_NAME', 'docker' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'tiger' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'database' );

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
define( 'AUTH_KEY',         '57(3K`ll<vT[#~mk,6 266Z[uQZI:A:6k}-}yo*OAuJL&Y;^TKN;ZHP>{Qj`LC0;' );
define( 'SECURE_AUTH_KEY',  '0]-xPJt$+]*I%nDjr3v~i/&.:uCVl=yC8qd=/i1}88CbOY+~MJUsP(T=+5}t}#*<' );
define( 'LOGGED_IN_KEY',    'oFqBt=O,A 3eX@h7]^vK2{x.b$3!P&Y/{<t>HeK9nHHt~-6!W;r8,n0FNPWH%L|?' );
define( 'NONCE_KEY',        '|pfjaoQD ~h}IlQ 8|CRx9}/j^YI`W6t])UXer?r($i$ vfy;FVP`Mu%3g,U:E^=' );
define( 'AUTH_SALT',        '~uZyd#63jC$czH%V2D>u)dq[Xrr>VLz8!SAdm/@U0y^s9+)*lT9OX+G (HNY)+El' );
define( 'SECURE_AUTH_SALT', '_$?38z?;vqC*}>*6&:CQ>j57hZ<roY#t!>w58Vc!+v8]:mp>96gxOgqW;irV~tR>' );
define( 'LOGGED_IN_SALT',   'Ki?L5#se>5GyEJ{J}cY.re[#,MJ8E1([,IL~z6sgNz5Wrb8)#Y>`<PQT^kg`c^Bs' );
define( 'NONCE_SALT',       'zA!&e afWZ/Z~#&PptI52T8P.|tHAyD`~g#Rnh.1Rd5mLRuDnc8O@mLDy3<Gj1/9' );

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
