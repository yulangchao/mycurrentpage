<?php

// Configuration common to all environments
include_once __DIR__ . '/wp-config.common.php';

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', '/var/www/html/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', '9df43ac9b91b6830bdde6a2bc3a2769ccdf5b6106415d391');

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
define('AUTH_KEY',         'n;(c?7l;^PsR{PQZq,.Y%D ?p&n8;]u-G*J?`z3S7Yp:m/d=~uAk!6Lsjr(o_sy+');
define('SECURE_AUTH_KEY',  'I$G@,J2bg-VU8#wunYFG!DAxi&1//g,1^3sQ`_(H }1&vE4<5<y&5}3iN(WVPZ=e');
define('LOGGED_IN_KEY',    '&<pu..W]4},Zx`XO#k)mE6 p =i3paiCm%+|X6%pbOvT3v&{gT0obRBbJv;hgE}:');
define('NONCE_KEY',        '%eD`,0kU/XE],5^l2.95nJ_hy-1<)HBrTQ{impy48c[*Ik3 gh/56Z|KrD}oH*m ');
define('AUTH_SALT',        '+T,MT%[mX%J>NN]fjJF^Zi9W5deycv6I*|=$t:R$jK!iu/L<c$5mKe0~=1>LPuN]');
define('SECURE_AUTH_SALT', '2d/Jn!qLex/J8@K#rM%^]$j=mO3utp&POb1 >@ym2L-$_u5|Ih^)xIR/nc1PZ-d3');
define('LOGGED_IN_SALT',   '.x3tpneBs>QV?_[-6&/P(i&4iDGE%/O hY;wPY4x/%%/P%nn~&0c-<2UAy7/V6~K');
define('NONCE_SALT',       'f;eq?>uwZaa*QA>uBo_<!L&Z17}YID#N72h6(}}D<*VO]W[Se|iF_ys6.f(wEo=j');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

define('VP_ENVIRONMENT', 'default');
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

define('WP_ALLOW_REPAIR', true);

