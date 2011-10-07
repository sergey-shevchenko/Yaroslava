<?php
/**
 * Основні параметри WordPress.
 *
 * Цей файл містить наступні параметри: налаштування MySQL, префікс таблиць,
 * Секретні ключі, мова інтерфейсу WordPress і ABSPATH. Додаткову інформацію можна знайти
 * На сторінці {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} кодексу. Установки MySQL можна дізнатися у хостинґ-провайдера.
 *
 * Цей файл використовується сценарієм створення wp-config.php в процесі установки.
 * Необов’язково використовувати веб-інтерфейс, можна скопіювати цей файл
 * З назвою «wp-config.php» і заповнити значення.
 *
 * @package WordPress
 */

// ** Вкажіть налаштування для доступу до БД MySQL ** //
/** Ім’я бази даних WordPress */
define('DB_NAME', 'yaroslava_dev');

/** Користувач БД MySQL */
define('DB_USER', 'root');

/** Пароль користувача БД MySQL */
define('DB_PASSWORD', '');

/** Сервер БД MySQL */
define('DB_HOST', 'localhost');

/** Кодування таблиць БД. */
define('DB_CHARSET', 'utf8');

/** Співставлення символів у БД. Коаще не чіпайте цей рядок. */
define('DB_COLLATE', '');

/**#@+
 * Унікальні ключі і солі для аутентифікації.
 *
 * Змініть значення кожної константи на унікальну фразу.
 * Можна згенерувати їх за допомогою {@link https://api.wordpress.org/secret-key/1.1/salt/ сервісу ключів на WordPress.org}
 * Можна змінити їх, щоб зробити існуючі файли cookies недійсними. Користувачам буде потрібно знову авторизуватися.
 *
 * @ Since 2.6.0
 */
define('AUTH_KEY',         'c>&X+fkxql2r^$E#^Pc<^0~%Rzxufn}KCWQihXYzVQ!Mj}Rpj0KM~m 3PbF[f7TE');
define('SECURE_AUTH_KEY',  'rgvx&W6_&ib uSK&2u!p8^YPgeG@w>&iE4-OyOI%gCF>rE,^hk^H1Y+*+|imNGKy');
define('LOGGED_IN_KEY',    '[s4-*V/YSm^d=ZzSLp6ctGB:i#x2$BRz1z1dYU/20?G}@f9<7jIHWg1n|[gEv$0l');
define('NONCE_KEY',        'izndB._PFb/=F9m)Z5>UDo&i=nipYY1ECGV2`yPaBaLzi^x@/F2~{l(b97(^SQ[+');
define('AUTH_SALT',        '1 {~Ozqv/~g_(]oK#-1_0@8cM[iJq9%=`:q[U7A=!:,s6fc%~vL_Bc@pJAw_^s$s');
define('SECURE_AUTH_SALT', 'Ue{|Um]N3ZGjrbs{[sa2kUUNi_+Ff>O5#2Lv[#2<1|2phLp~MXD7kA{djOK>aqj=');
define('LOGGED_IN_SALT',   'O(_(Dw|vs6Z;Z>J/+=PWE=5kUQqzH>.nqOf<ymfzegnAe+1eOB6Bp%@6GsMHuG8_');
define('NONCE_SALT',       '#j@CHHh0>@bw;hEM0:?nB<#cOo^bw>!l:PQ?LH?GK(Vk_m37w/}Gr/gHIN(<io_b');

/**#@-*/

/**
 * Префікс для бази даних WordPress.
 *
 * Можете змінити, але радимо лишити так, як є.
 * Дозволено тільки латинськи літери, арабські цифри та нижнє підкреслення!
 */
$table_prefix  = 'wp_';

/**
 * Локалізація WordPress, стандартно англійська.
 * Українська локаль вже прописана.
 */
define ('WPLANG', 'uk');

/* Дозволяємо кешування */
define('WP_CACHE', true);

/**
 * Для розробників: Режим відладки WordPress.
 *
 * Змініть «false» на «true».
 * Це рекомендовано при розробці плаґінів і тем. Використовуйте WP_DEBUG
 * для розробки.
 */
#define('WP_DEBUG', false);

/**
 * Додаткові налаштування. Для активації розкоментуйте(приберіть «#» перед рядком)
*/

/* Інтервал автозбереженя публікацій і сторінок(в секундах) */
#define('AUTOSAVE_INTERVAL', 160 );

/* Вимкнення ревізій публікацій і сторінок */
#define('WP_POST_REVISIONS', false );

/* Кількість ревізій публікацій і сторінок */
#define('WP_POST_REVISIONS', 3); // Замініть число «3» на бажану кількість

/* Збільшення максимально дозволеної кількості пам’яті для виконання скриптів */
#define('WP_MEMORY_LIMIT', '64M');

/* Час збереження матеріалів у кошику, у днях */
#define('EMPTY_TRASH_DAYS', 30 );  // Замініть число «30» на бажану кількість днів


/* Все. Готово! Збережіть файл та починайте писати. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
