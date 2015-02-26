<?php
/**
 * Основные параметры WordPress.
 *
 * Этот файл содержит следующие параметры: настройки MySQL, префикс таблиц,
 * секретные ключи, язык WordPress и ABSPATH. Дополнительную информацию можно найти
 * на странице {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Кодекса. Настройки MySQL можно узнать у хостинг-провайдера.
 *
 * Этот файл используется сценарием создания wp-config.php в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать этот файл
 * с именем "wp-config.php" и заполнить значения.
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'site_db_name');

/** Имя пользователя MySQL */
define('DB_USER', 'site_db_user');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'site_db_password');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется снова авторизоваться.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ':d=B:z_p}HM92AE-`GEEE2C_6/y}bh6<)8f*GB8Xjz;Hp|TI#-i;gwXXV;}]0jX%');
define('SECURE_AUTH_KEY',  'dH-kgb5da-c>=;7e2;.[S3RS2e,+^$<?9j|(p6rC+oz#=^-}5{EQ~![(]&h[b]&x');
define('LOGGED_IN_KEY',    'Y-=RMQezBG5q#zwN49?d|p&hdV3[.bQC0ime2ivW51^s7eH[d8fQ.]*fUtc3`SrB');
define('NONCE_KEY',        '__$5zj*-zR(0]Hs)H9-a%[hvcJ_xU|JOB%Y&.cFT%7D2b!2%MAF<-k[V{87K@1Zj');
define('AUTH_SALT',        '/z8}},zB(*g7zIwS&FNMCmi#}b/1|-jB1BmoWc^uS&o{cu#~Pp_DR6-chzf8TrU{');
define('SECURE_AUTH_SALT', 'jlua5mO/V++E}?i]Bska]Ky]Z,]nv^^;Fs 5t@ubI+?Gw)7@A~.W^~&iDi5C^#) ');
define('LOGGED_IN_SALT',   'SYLt+[B8h<fU8pRt<<YJrB`M91]B|8y`sY%sMUUT.cJ F|Z ;U,1U*>+lCT0Zk;r');
define('NONCE_SALT',       'TfeOVQlHbity}I<!.,lB,-W;?1D:|p-RhR;ZFBv2i7}(MqQ!NIT=cj+-?64~ef:v');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько блогов в одну базу данных, если вы будете использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'str_';

/**
 * Язык локализации WordPress, по умолчанию английский.
 *
 * Измените этот параметр, чтобы настроить локализацию. Соответствующий MO-файл
 * для выбранного языка должен быть установлен в wp-content/languages. Например,
 * чтобы включить поддержку русского языка, скопируйте ru_RU.mo в wp-content/languages
 * и присвойте WPLANG значение 'ru_RU'.
 */
define('WPLANG', 'ru_RU');

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Настоятельно рекомендуется, чтобы разработчики плагинов и тем использовали WP_DEBUG
 * в своём рабочем окружении.
 */
/* Только для девсайта! На боевом убрать! */
define('WP_DEBUG', true);
define('SCRIPT_DEBUG', true);
define('WP_POST_REVISIONS', 2);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
