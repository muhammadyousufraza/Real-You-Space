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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '.-6,L^Jv|W%OLLn@!h(^ocL~-/_xTvmEb%]TFsAAt*e%1~J[r-WJ,5J`-f*%<dO.' );
define( 'SECURE_AUTH_KEY',   'LD8T,ZY2Vwj:ykK/:rSMS+CK(oqM9L7C{obk<^X0`0`9hDt3jBLPfLVW|)7:DHOA' );
define( 'LOGGED_IN_KEY',     'D3:y%@p8{RHtN{K$T&y*AGRAonaH!Iaf{e{=?L&TzLd8,umgwXx`vK75e[?!><z(' );
define( 'NONCE_KEY',         '38OC*-34YE$<DY;_N%.<9ym~{^4#/m1}*6g,SXaKbsomYW8Mxs8umU6XHWalfsy#' );
define( 'AUTH_SALT',         '{0CnI}sP*G|-?b%O@$0A]2I:}x. @mY%Yy$Jo8tX`LJo!.{gl/:7YtlRB}P%,0uq' );
define( 'SECURE_AUTH_SALT',  ',@dg#W)FV~aU<|]Vg7|jI0J&0^%p~^>PQ)DAQlNwa7|(<O?Oh-FAg3i$<h@C+LR:' );
define( 'LOGGED_IN_SALT',    'qrBi=y/gwg$8%/_z@uI6Uh%yhE~R@cv.pJj1_Nl).LM:olLDg;vd2TYMA!:8&vI5' );
define( 'NONCE_SALT',        '#^[/JS{3*iI:KsEV|4`lB6MXfe-Q@mF(P&^uRG(=@@AI?_[:P<D=,W(<2.-S0>Q.' );
define( 'WP_CACHE_KEY_SALT', 'YWpxHP3iYa/{$pyAxlL]-LV q|_~MiXYT5i W)?{?X!CNe|6MBI-nkZ|]#2U$`2%' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
