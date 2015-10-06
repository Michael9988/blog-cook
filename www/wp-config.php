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
define('DB_NAME', 'blog-cook');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '_[FQC.bWY+uga}{{3[GJvhHyC|TsQP;R_5O`i_)!P0afv|fWG}}.]N@ij?=%oF+g');
define('SECURE_AUTH_KEY',  'TW+}j[1{f?z6!Yf)Ax;[!P-#2|aqR--DoX@+hB-C.:ze=Z=WgnT0F1<d*97aTB=k');
define('LOGGED_IN_KEY',    'vh@g<S(7u6ze1VR+cd*mG~[k}~U#M?@ %. 6]y`^+?m^|;%**@DTF-=!LH;WE`w^');
define('NONCE_KEY',        '-SQ+9jfZ/k}>+w52-WL)R1^A=K*8(ekvdOiqx$Z[O)n{#.DIDo~F5I]>6Bw3ZDRD');
define('AUTH_SALT',        '*}K@e>m;BEQ3)i+IF]+L<. yRhvHU:f6U|+(U>_aJFV:`KWFS9m[duN+*Cy{ZTR&');
define('SECURE_AUTH_SALT', 'x5VKHRsL9oO,}tZ[%TZ8t*A/>$j&U2v8ex(hj{V#+rkqzfnd:tC=.g)u*CU;g$q6');
define('LOGGED_IN_SALT',   'al+?qNL/!ijO959]+C-X+e0`qeTk+d+);==[b-`cf*[Lmv?(3%cYYD-MQiOI]q5z');
define('NONCE_SALT',       'UF+@b(^B58K|-95(  !ymd8PC+}q*<huO[4.8$pCamx!|6kSFhbN>X7yS?S1&{~K');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'bc_';

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
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
