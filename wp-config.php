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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '(zvg?9%/+!%QkRI)=pt!XL:u1@a{f#E3~J2u-^:N?pi6dg8qm<3!:k83.~hxkY H' );
define( 'SECURE_AUTH_KEY',  'nEl4vn)>3P2>.gj$s~7`A/l|QhhMD*/Ww~;.k,>64JsGJTmM6t*7w;|osT9JP5Zo' );
define( 'LOGGED_IN_KEY',    'lD(k?=t&K4VS,X*zk VJorC^%k?b6S6-NqI;k#iIS|g&%Bp23V0*-y@jx=WizhZY' );
define( 'NONCE_KEY',        'on)a}Y$foUgW!#gg2Pw9W}fk_erMG.sAn2.:&^9`M$AumvEF{WKOQ-AIuhOY*L38' );
define( 'AUTH_SALT',        '3KyS!Jc#NR?I5Um8]@ZyH<_|!f11vurho6?$?YZsc>nWr~I:G8D*8B=,u]E&M0N$' );
define( 'SECURE_AUTH_SALT', 'y3B:%C4Jc`)<M,5]O<QDlA-CIGojH*b&;.#H[rEfPJS0LGB!CY3`l[^gR-YCL<Cq' );
define( 'LOGGED_IN_SALT',   'W;y2zv!)R;e(!i^Nqu(]>yAZmM O_68jy{jNYJ+niWTec8HqxLELrw*Sz(0`6k3M' );
define( 'NONCE_SALT',       'k6ULT2U&4Z@KOl=0} klPs6j92;jX-b5ZhlgY jtXwNiBF*:(0T6nqPGBN?.Bbau' );

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
