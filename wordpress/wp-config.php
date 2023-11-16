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
define( 'DB_NAME', 'mywordpress' );

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
define( 'AUTH_KEY',         '0-R:0V-AFbaY^=5kTQxO1VG347_/y~V PHFAVpQ[Y`Nwp91$r1&VE~>r,gkHUsv+' );
define( 'SECURE_AUTH_KEY',  'wEXx^f&$d:;q~*N3w0<5g>PE_nn5k lPg8WSkr~sPwzE>W`z@,^X>4b=6i@sp4 }' );
define( 'LOGGED_IN_KEY',    'x%edm1O f -pMX[5smE7daRgW9Etd~#G__0sCc*d[GJt-W!8W^`S*0=!@@BBy2{S' );
define( 'NONCE_KEY',        '3b6O0Y^r9:IU%H1D.^TU:rym|u!FHl+JiE}&L.P}P/ch^SkR<Q&ECP9O0BDn#zzz' );
define( 'AUTH_SALT',        'd_k~sQeu0b4JATbeOc.A[?U.0Oo([QrQ+u1lRp 9C-Lf6:}g4QNEA(qrfUCdF+$L' );
define( 'SECURE_AUTH_SALT', 'ItAmj=sW[RdW,;89P2%D}X~pMiz4pfSI#9x@y.NbYp8x^Z?&5IdPq{sU} Pi !H[' );
define( 'LOGGED_IN_SALT',   'p=@[gP[vs<h$-9h3=H, (yznzNbjlaZ~Ws94c!P4~U^*_`9k6yh36.Ft}C?-qRm{' );
define( 'NONCE_SALT',       'Y<{Q-Z6-mNv(Gpfzh5+)_PWXaBU=N;P|`1&^?(%2%(LqfaQIi*.ihz}a~(WG1qn7' );

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
