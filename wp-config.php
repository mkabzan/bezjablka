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
define('DB_NAME', 'db-2292');

/** MySQL database username */
define('DB_USER', '2292');

/** MySQL database password */
define('DB_PASSWORD', 'fajnecur12');

/** MySQL hostname */
define('DB_HOST', 'db.ok-hosting.cz');

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
define('AUTH_KEY',         'WVc_+Bp5 |<IM3{ov^5,EI!1n(pit9_rTmhCWDm0GD?G9IBP4cGXQCYA6ME>gM79');
define('SECURE_AUTH_KEY',  '$+[g0`}c2Y@5O+j4[J_i9]84+HmrN2nVXy*vu/J/?chWZ_U0-r7hpWc2d|4B}*ow');
define('LOGGED_IN_KEY',    'Ld!iT#=Wh($a3mz6fv+=<X6q0ES?j;Z$Rn;GC$,x(sFDVmU|Sbw`F/#T]fXPAwHK');
define('NONCE_KEY',        '|@AAcYzk%>5m09ibGm^&`OkuNeKQzZQWNk?^gYcB|TF$tC iS5<Po{;=GID. sv!');
define('AUTH_SALT',        'CaklG9MnSs`M7qbA1A*Fw$aoQbb3H^:LJ6]_TD$.]i8=&:QXMi#6V#~K$,dfu|t ');
define('SECURE_AUTH_SALT', '/g|u`+bZfzX<PyHL3gIF=t2=S568pYv>@5{sR>f}kh/>>ODI1o=Pw4qL6P)=]MCA');
define('LOGGED_IN_SALT',   '|w!|g&RM>97Pv1NW0{-2f .K:P`G@mbU&G!:Nj+#$-vAj57}-zKP0oj].rAO[xBY');
define('NONCE_SALT',       'nI|Av_Ouyb9Ke>wB30$X~W()4/~5Lpw6G,wK.j-S*Y!VIK7z1q-^.cH}t?C+/2.b');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'bj_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', 'cs_CZ');

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
