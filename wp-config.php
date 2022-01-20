<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'tuto' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '_hnRbu)qLUMnCS^##i8V./2hnW?`,$(h]7]^^?4#X)o>uG=<)|c[DKL;z0a&GxM~' );
define( 'SECURE_AUTH_KEY',  ';t`x$5A_5*@:NI(te(0.q>+(m8Cu2ynD/IQAD3(04B$fS]0:Az>gjD`c,ll/o(2w' );
define( 'LOGGED_IN_KEY',    'nEhB}Sdvd4pqd:{`q-GAlyP9IFNHMWZBU&XaTdTM+Zd~OhCE#R3+p/e*bLuZGiQx' );
define( 'NONCE_KEY',        '#@@2&1pP1>,1*&jKRPt-~Ir7#oOkwH9T#F~TX^zY*?*ge:r.DX(BNcS/@`_<6V6o' );
define( 'AUTH_SALT',        ']23kx!g^g}zfRlL#*+5vc~c9.QGA pE6tQDd;[Z; KAI<st%O$gzZWHT6MWDzXVL' );
define( 'SECURE_AUTH_SALT', 'IkbZ&Xjj#fqboh{pA,`I::kT>nrSgfsZ{CtO0`[T!>Cx9%{MV4_$gzrtNky_$[]r' );
define( 'LOGGED_IN_SALT',   'pBil?2*qsPwvFy1}XaWd: }3T-_dpR,NV)#0mBg.KD$x{PUOmu{<4^bt(c3}(1Mz' );
define( 'NONCE_SALT',       '=kr ?m+^f3g/e#Ho0+e{b^qV%Hc?9wWjzFd6~]K]F=Zoa&-D*)Fl(OzSDE8[#wcT' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
