<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mustakim' );

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
define( 'AUTH_KEY',         '{Yy#mc1l/HL,m{i-s/_$vnf6T~@rdFBHET,D!1S-vctw#XZ4o`kme*AI)5YntJL3' );
define( 'SECURE_AUTH_KEY',  'uB6UUBwfZ9H2_07whA_haw&NU3T2wP<ZH`[6Qbmr:NOPTkfrLDni?pY-yX<[j.$9' );
define( 'LOGGED_IN_KEY',    ',=A<n9o{2pc}?B -vzAf<f6!FRWU8|sd}Dls=C*|XF1U{memBl2`sX,f97LY@t|[' );
define( 'NONCE_KEY',        '[BCetTkag[x++pk,&IGGAgg7C(9++UQ:>i:Q}{G0xx:{=8MXuL3U+?gozLf83a49' );
define( 'AUTH_SALT',        '?PKr,f=}l.DPo1wyqs#AgGUm.45ewVo7@z143Y:D~(A3VIv~1+uuH9z8qvsh~Vt}' );
define( 'SECURE_AUTH_SALT', '=z,5V(cn3Hdc:gsVC<G{EAFyJ/ju]A{- <_5YR^;}>1_G)vs)d9? Vm}g+|m/AF#' );
define( 'LOGGED_IN_SALT',   'gCe L(C-}8t>3[Xcls`)ZdGm^Pt0?%}_+?GR~J4LKDEd;Rr>I#p Io|+Rr?uaa47' );
define( 'NONCE_SALT',       'T!?TI-8zfdM=-p@,jsn=N*]nHRHsG3)tVL24W+zow[-hla+_ysJ*jxyPpH_M;j|&' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
