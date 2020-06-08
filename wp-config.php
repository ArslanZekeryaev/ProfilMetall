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
define( 'DB_NAME', 'Zekeryaev' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'Zekeryaev' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'florida2000' );

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
define( 'AUTH_KEY',         '~~Rkb{%_mCXKJK8w1?>#of|6W#!(@+*)ut,H9v${L|4}o^:_dQo-}Z3WGg_RME)%' );
define( 'SECURE_AUTH_KEY',  '8?a~58<U_j.rxJK]<./KhHVwC6pqoX:cB2k+r76j2V!)hU9|`AK/?zA@V]Wk<+Lb' );
define( 'LOGGED_IN_KEY',    'Ct1eQBHhD.!)m u^&DB>n0Yl.>?fCPEyjB<s{6U7>F_F[u)GR&.eVM+,JM#eM8nn' );
define( 'NONCE_KEY',        'yM,57mc}r> e2oA:S #<n-e>w$ff}HpY%f)5y0=l7WpB}}EbL7b4Q|^ 39!Fr#:L' );
define( 'AUTH_SALT',        '}RdYJemm,@QACH=up:G}Cja|<t227fZ)6~EOAN(Gh>e2df+Vu4g&:L8pF[!82f^q' );
define( 'SECURE_AUTH_SALT', '<JFBG3W-K-|jgM_p`CZ2n>>)}0`tZ?~&RVI=bZ]=Ik2+d,,lZxoCQ.gwA-u,pfNV' );
define( 'LOGGED_IN_SALT',   'fXs-; Pm_LOn3`vQ?%^@Xvty]Tn.][<==y.4gmm]Nw9{49^dyDSWJM@jm3dlAfi}' );
define( 'NONCE_SALT',       '[A(nQs.$o^T[R%~$w-x*6</,#H:E$r-4QRr.vzGjmbPcFg| Ti`vt&B&l|#:Kml]' );

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
