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
define('DB_NAME', 'hotelcat_catamaran');

/** MySQL database username */
define('DB_USER', 'hotelcat_dbuserh');

/** MySQL database password */
define('DB_PASSWORD', 'tNl2uE-iLt@t');

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
define('AUTH_KEY',         'agz]bkVDt%2B*Kk{z!3&pJ?^sm?d2?T+$H0{uMMKUI0?uTf;d%F5ne.,T>dH)By$');
define('SECURE_AUTH_KEY',  'P0AJK g(HP$K<m:N#Z!gBF;>~JYF)m 4CcnyK^nrr;W W}(HTMzC8G6E0lf{GhYY');
define('LOGGED_IN_KEY',    '/fRRIjQvL|;}>E%BZ$*6kruS<,_p$pWGH}Wk9&KB|}P5eOw<P-R![~P`7y7gEDct');
define('NONCE_KEY',        'OeJsp-ED[zI|b^]uT|K1b5`{VZAJp(3w|Km!i5Lcd$URWC6gaXrSy9bO|`t298>R');
define('AUTH_SALT',        '?G*O=3`B;bFiB/2q:M*I+h41v^<^9JH.~Jp/7[b)Me~#K16s;u -jwWvxFZJ@;Y<');
define('SECURE_AUTH_SALT', '#] *wED#,747mb -U!lwMKFF2Q:RbOrx$xOp6j4r6eX_AR5>A0:~.kPJ:ni%;-fY');
define('LOGGED_IN_SALT',   'y3mSE+mahZ+DCH%`3F5u3t&_D|4_o)A[^{2mAzhdq6eu.kR#D4`YMmbW(yWk-mXI');
define('NONCE_SALT',       'l.}3!67s`DZxjjtZu_JNNBK2c,/K9{x}C!#8eL~`$XsJ5[*thL!feoH@]Z-dWmL_');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'hcmr_';

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
