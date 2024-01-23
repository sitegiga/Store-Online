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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'lms_sample' );

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
define( 'AUTH_KEY',         'JOvTTwWe2m[5MBO?H1!xWPF,~ 5gkc*QRK4W{[%6H[}qoL?/gZay}aKZJH@n#<yX' );
define( 'SECURE_AUTH_KEY',  'd`,4dk?A).qL0K;?=}cNFNXK2>E38J/dp=|!G(o7`&<WOQ+GU,v$S^3h+5pK2umC' );
define( 'LOGGED_IN_KEY',    'WmEb<l[g;wxh0W__HN9y%4;B8}gDo]4X5YN(rgU$]lHHNs>i];_jn;a*Sb*N2$we' );
define( 'NONCE_KEY',        '6&)-,Ii<1-+f4bu)*jELnIK_M}ONeyjR-no-6tG2a&/i0h#Dyi!Yo7;huh/n<LAN' );
define( 'AUTH_SALT',        '*{~{K?G%R3Fhq,(!Ab<.l)[nkiTYLesE0[l9_7Wni#Yv{zI%bz*buZC[*/;vi4eS' );
define( 'SECURE_AUTH_SALT', '|tewnCPsbGOxh:b;@5ru_Rz|=-JntGfj>yzGn0tn`^*IvGHF!AM:@F=Rs0>R[faK' );
define( 'LOGGED_IN_SALT',   'UUXxLIw4_a+hf[lB?V<,2R2W.0bknliKqv_Q^rCO`un@x Lp7}a?}T;f-M:/2DAS' );
define( 'NONCE_SALT',       '2P~3+ymx8h;p,rAx4-?GFk[~YPYQklo^mnO^IUw/n-IFFn^+mC{9>tWMh*Z50m<c' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'LMS_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
