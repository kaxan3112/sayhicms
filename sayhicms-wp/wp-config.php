<?php
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
define('DB_NAME', 'sayhicms_wp');

/** MySQL database username */
define('DB_USER', 'sayhicms_dba');

/** MySQL database password */
define('DB_PASSWORD', '123456');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         ');+5*_RT]QZ64Lr-{+{m4M 43 da3Q;qmCfwgQ`CDZuf|[&.R@Vik52b8%}0Vi+2');
define('SECURE_AUTH_KEY',  'q|JfbLc1TuYbT?-+yck>S,0cO)Xd@WPVb+JqLrl+09[$MuE-g6u~ O.%}y<agy!>');
define('LOGGED_IN_KEY',    '=d/IeBxs$E<ZN74-wr`#mQMhsaujQ3~^L0ILf-h|sJ/+ =fISf%X^tXm-qx`j$F|');
define('NONCE_KEY',        'Bby2|a.|==/[GdSL8<|<8{Dx|m76hPd@`r}I~#.5ibx:G/G<:yXk&W%+__-!*i|0');
define('AUTH_SALT',        '-5A#|W~-yLibr>)_y,+VNnnS5@?chInPsU2@p3;rpf|i*Y]uV2_7ET+W1j$;`sri');
define('SECURE_AUTH_SALT', 'piym#&nUSWpXS1n@z=gt_NC)|*ffLAGk[U3iN/M0{X0bLwjXe|) &`7OrNEH_=p:');
define('LOGGED_IN_SALT',   '>==`1tgO4f<*H<~_GJiPg_0XvJHud7EL;fb*|yy#(,EELPE0GrC+|+}8gkKASvzS');
define('NONCE_SALT',       'X})Gq|TwoYt8|-`OemWC 7(,JGff%:|{5Ol,O&eZe&6<y{G(4KMv-+Ed[W6@|M-s');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'shc_';

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

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
