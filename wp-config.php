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
define('DB_NAME', 'alpha_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '&{oU8tfUFIe%Ezt@K[nt9N?uITlmlb[y-2TgPj4<-&l)K!rduC0kH]0{~tq64];&');
define('SECURE_AUTH_KEY',  'ERVv$yG-x+0N1r9+kiXD0Kka4r{WD3@z|AZ>UB_.gTK&-_;5bCC~1>83zum:Vs:5');
define('LOGGED_IN_KEY',    'f)Da*2j]=p/X09SCHNa)M4tyMY>||%,+!&NY<79yFZtJu{ICrFuA5kiv%1px^`BX');
define('NONCE_KEY',        'fI6X^93[0WG-z54p:^VDxs5h0.UJ6d-34Ax;}+K-KQs2}URqJ6JWxlf_R++zBhAp');
define('AUTH_SALT',        '9&OA#*1rj2qex+`19fTp40bMR2diicGPrCNbI{}d}-QXxiCh*1JKW$cn[6/m<|gC');
define('SECURE_AUTH_SALT', '15<s$*V>K14T<^D?&rgm4cg>I*TjkER|i>^35}E}J J=/Mt3JO+>E{S.w$j$*BvC');
define('LOGGED_IN_SALT',   'AL2B1c>,7d<|wJSV{kw||(tlitme3BQ+O(-~+<#-X[^T9h:s hk(=#vSB;=ia;>j');
define('NONCE_SALT',       'wdw84<zxv/+D$g;@)xMWIGghY0)^jH{Sru1w$s[(yLH7j!<F-a*>TaYXBY$-u+qp');

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
