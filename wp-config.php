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
define('DB_NAME', 'wp_club_site');

/** MySQL database username */
define('DB_USER', wp_club_site');

/** MySQL database password */
define('DB_PASSWORD', 'password');

/** MySQL hostname */
define('DB_HOST', 'ec2-23-21-211-172.compute-1.amazonaws.com');

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
define('AUTH_KEY',         ')Ui2v7^Og2vS6q>%c,G6E|Qdm}X0%I.O+A l-6l$)J|zv|R[&8NDUjUVkHV_ MLK');
define('SECURE_AUTH_KEY',  '{e+IK9ovYiN8+jV9=Iq#2]43}YG9Q@@)mPkk_g2+)?{@]7M[?O(=g8x+_z.(#4.B');
define('LOGGED_IN_KEY',    'Pf,)*yiR9(IUXfDac1jvaz8HK*1V3@ra]#9)IYN-7ik*?JSUTHMQQ)H pK^7fkI?');
define('NONCE_KEY',        '@^,. ;}vu>nsHwXuul[$G;g<!pb(wd;LkWouT(P&+<6&7]9+zWh{m[f$s`IpxauI');
define('AUTH_SALT',        '=87Y)O72xWHh*$mVG3/a52E%>+m=$wSyGvSAP(uV*Mp5JgRP9+`|[K+#Fr-atMz#');
define('SECURE_AUTH_SALT', 'e3 ,=*RP&3@_.+^Fl23pG-S(aJ<@zB>~)|iEiNA98tGOc5;?PLqYQ*Q|w5[WW#45');
define('LOGGED_IN_SALT',   'jHrCn2PVHQ+K+HsfbC7I/ypj/r{J[Iwsr7A-z+x9Gr@j`A]4o{t=Ux-i([3I@AOT');
define('NONCE_SALT',       'g.+=@UZckzz-EndmGc<fh-Rc5pfvQHAh@Y>jCG3^LTt,P4QGCdRJFp%Jgx_3@q^i');
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
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
