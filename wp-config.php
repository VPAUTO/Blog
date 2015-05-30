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
define('DB_NAME', 'vpauto_blog');

/** MySQL database username */
define('DB_USER', 'vpauto_blog');

/** MySQL database password */
define('DB_PASSWORD', 'sF__SVtG.BnyUy3Yp#_v');

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
define('AUTH_KEY',         'X|5yLx< gs^*wlEV~5Ss|IU!j#/TD~pK,+4*#-u|>n;PWv,u9^7:bov]%JaS=`sX');
define('SECURE_AUTH_KEY',  'PyHFV-]0_FnebjfP_PwPxW$KzMB%#e6(uR}X4]Gbcmz86|{%q+aE]?t|P0)}P}}*');
define('LOGGED_IN_KEY',    '_{*In,>lb{`4J,A:4^W(-hg7BZ0vR+2m=g-<%|+|meE9?NG@MNC_U5@v9rrWZc?m');
define('NONCE_KEY',        'GdC  h+c8@|7W1zMAfazJQPGYsVq9R.w+*kLY`UK(SRk-(R5SWKiW6wAF/U44Vj}');
define('AUTH_SALT',        'c|fv97-!lz 7|wvc_u5>XEl%|`IL~-!|[m~W?{OjGb01nD6.sE?zFQRF*vnmet#!');
define('SECURE_AUTH_SALT', '<]}w8 _AK_P2fC<~}Kc&xP??%J1~wBovK1n?o=NuVk-k<| df+X3b).3|LP`7;k9');
define('LOGGED_IN_SALT',   'o=8u$ODUm;W!K$uAyX}[Ceh4$]RXJVl58Zqh6|s+>eq+(ymXAX+L=.nS:IJ+}]bB');
define('NONCE_SALT',       '{ei|3NAQ`3s7^ EHGqng^ci.L>9N+kbWi9]a:~{^a0|`%mESzH2GKX^3tBy1Qup5');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', 'fr_FR');

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

define('FS_METHOD', 'direct');
