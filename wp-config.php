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
define( 'DB_NAME', 'farming' );

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
define( 'AUTH_KEY',         'Y_w_^n-F7uSS;TqnwH%Cp7)k]B: x|iM.UvcD 2Et)H?((,#v<.mOJM5&807(^dd' );
define( 'SECURE_AUTH_KEY',  'WSwuL[JG51lAfzS.!;u=a.u*av0]z9:K6G<>F>Y}Bq(StgS({1+NW3-(/Rva&^ND' );
define( 'LOGGED_IN_KEY',    'Hj?>?&$ =Y46-;5E2I:qdcOb#]@!D5MjT[E0bt*fWAFi529xyl/GdS3Chtc P3.[' );
define( 'NONCE_KEY',        'nUOEQApgVvX]k~(}m >Lma8!~u6{&*V&=M]27yDz2Y?7u0+aj3I%yhW:-|O64^#X' );
define( 'AUTH_SALT',        '_`V>0h?i5TZbc6Q~%@)jko@.BE!9GnBx(Eo%<p-]V4Pdu[YHi^c!L[<SP-DwJ_L0' );
define( 'SECURE_AUTH_SALT', 'JJdV,z#NtaBRYim~g=ve~ ;I!YZxKG;Fq-5R8CucF( vU/70z)^Xo{{W?gZ724l5' );
define( 'LOGGED_IN_SALT',   '?1dJ=?Ir>q<b`2IfU/UDjbA8;Q*B@.BeR#D!tG=o:rwg@z-UUdKER/SH?M(LXqXw' );
define( 'NONCE_SALT',       '&EoZUE<?E$C<7EyMph#s;?E$KVrm~]1;U@_** qiHgjfGK74WNaKD3(q)PYN0_O`' );

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
