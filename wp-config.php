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
define('DB_NAME', 'miraclq5_wor2');

/** MySQL database username */
define('DB_USER', 'miraclq5_wor2');

/** MySQL database password */
define('DB_PASSWORD', 'xn32uVLk');

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
define('AUTH_KEY',         '~`|S*S`{~+b!e8~Al0>7qA=j>zVN{>~>x,>*s!?KcLILKwFm~_@fpWjr5=-QhV5S');
define('SECURE_AUTH_KEY',  'yi^@)+I=iaUd6ma`c2Z66OJoOeCZZ*=S)yCeA:NaueaS4D-|Lcb+[SwLfX|<R+(+');
define('LOGGED_IN_KEY',    ')v68p:Y<6Qatc],8P@6f9U{7p<@.N1@X+GC@a4HqgM&$[GHOpK96F$jRH?z@[2<i');
define('NONCE_KEY',        '|zo$,5]-]rykKt7?C5K |n=|.w,GJ{`y>zxz12J>mKRWQFq1<;%mlOv-.}~>#)w(');
define('AUTH_SALT',        '2XnZx76vo#W#k:p_J[$qnRk.C$VbG}TqPH>Kto-yy,_4V~StNZDW2Wt FUiN~]gv');
define('SECURE_AUTH_SALT', 'F:&cPFc<oImMmB01BWL}6lf7&O/XoRja2_mw`x3br/zv|6o^@l<SH^^:xceKtK@g');
define('LOGGED_IN_SALT',   'A*H+(X_qF+e(19nJnqqu|}$41hz8#;U<|R upI*oKBi%ZbcR7gZ7VWQ}Jyf@@C6h');
define('NONCE_SALT',       '/3j,`~jQ!s|u@a6aMjzYGl]+%3Dd-[ph^cXTC<3kg>dcMU?zkeE 69jv`X2aH*Qu');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'qqe_';

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
