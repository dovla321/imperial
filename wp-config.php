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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'imperial' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         ').V,ftE&$_4Y<;phQltp}:~G7<P_k#E~[q+j!lgn[+@4Yr*Np~m7!/pZq0}07g%,' );
define( 'SECURE_AUTH_KEY',  'lBeSM N=7i wnW+ag8b^nr8( M_u42AIKjY)w?g57kWV[#epP,5f/10<^0<gZNdx' );
define( 'LOGGED_IN_KEY',    'k,ZhW2$ueY!duelu*`3fJygQ@n*h_T?);]V?.UaD8vGp~7ZN^w.S JESvn9(7>kx' );
define( 'NONCE_KEY',        's>y9nWdqQzpo)*52U8xv+D]5oOK/f9!]_]lM3O.qp?&)4`vCC4U-:Q ~X-4c 4y?' );
define( 'AUTH_SALT',        'UNPJ]O]=![A]51;A`4n)I)f:4(|F`3vfc!/Y=e<n>bMoD>y&-5Vx>9]*g^Xcb81r' );
define( 'SECURE_AUTH_SALT', 'Gzot<GjM>Kg4tNZm79[/T(St03C?ycz!YK%D~r+.,w!E=l##s0#6y=CH7g1lV)H-' );
define( 'LOGGED_IN_SALT',   'SRs<cP`CgCSdGog7J_oHMDHPADL1gty(~IwEDgh)v]Ro4tPqtfusJ7(hpa6CTSqQ' );
define( 'NONCE_SALT',       'zo[#[F`:+!PI`sE6?^/^0n[}I?~fN~i2|WZuT`CH]rldzI>Gu{>!.{:9qRzN`~mD' );

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
