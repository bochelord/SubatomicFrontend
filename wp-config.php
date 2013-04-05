<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'kthxbyec_wor1');

/** MySQL database username */
define('DB_USER', 'kthxbyec_wor1');

/** MySQL database password */
define('DB_PASSWORD', '7vWaJE91cIH2t6u');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '^AqV!j||QJb.$h7)$EJI^YamO?P70g@4u 7K)<nu 2VnT6KRbt<zWsM+(jZsrg7,');
define('SECURE_AUTH_KEY',  'b?}q{eJT0NQ/h6nGczgwL^CT_A{jp;.Y[[#Wyv!hq6U8N]Okbtf$@|W{ImTge;}Z');
define('LOGGED_IN_KEY',    'O*Ip&h.Kur(It>W-HscEy- D;{,Qb#iM(UI &mWRt3Z(ZX ]M2LZE6Q$Xv+mL^U;');
define('NONCE_KEY',        'p/Gm.tZ3!TYEp!6VAB#R@yu!f%+2ZZ@z)E&1*,IvWAiKF$A/K,XuKf<wM:R[ncJM');
define('AUTH_SALT',        '0n0vnOk^N~6cov;1%KfV2ks6j-|/K;0<tf92LUUdlt*^iY#Wu+$H7`0-8;QVd5gZ');
define('SECURE_AUTH_SALT', 'grx2tt-j1uN~~WF}Jc0#ebcEC3in}hsiF-n,gwBQ&uT0`@]g%J()9Iu9&80H2_%[');
define('LOGGED_IN_SALT',   '=i_4ap&/zcW*XmurO@$3TM8W#6u%o%HqK-*+#6-|j_YA##X:o,-n|Hxh:[ZBuCr7');
define('NONCE_SALT',       'L^ IIY_Pe0b3~e9ffjN7$p.2}]e9,[sEkzula/+uj+[wRVnu^}Sd6;rLiDc/S#[B');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wrd_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
