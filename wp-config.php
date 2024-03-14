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
define( 'DB_NAME', 'ultradeking_1' );

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
define( 'AUTH_KEY',         '&Mv]->sSeTUZz9S-3ma`sj4{/.6dLTjv=IHzVS=U2P<20tj*LO4t;&{%l1ZFeAmA' );
define( 'SECURE_AUTH_KEY',  'zJn8`(qHZ$m~<A%*h~Dt(bV{%_g5v+FBFwZKlObdO4(Tw$WJL@`AMpN,2}#as`Ak' );
define( 'LOGGED_IN_KEY',    '4<Go`4G~U}.|pV:q@RG9e&_BO;_UfWMe/6?lMx)0+*kOuz+eCL}I_lucY $?511L' );
define( 'NONCE_KEY',        'p6F^ESVWb/F3auu:)7iRS323[u,S@]N!V7:R Mu$(L0JRp[pilo;Jan+<%#eGRSg' );
define( 'AUTH_SALT',        '4UV;bL;hqn8sWE@78uQA/]RaC;-E>{VTc&1qmWANreja3@N,&/o2=<vR}=_HpkuM' );
define( 'SECURE_AUTH_SALT', 'LmOCD_#NAO7,l<3=p#XgJw&s^FJo>#,,ffdjczz*_m8Aw#+a<3z-R/:i@Qo<.)j@' );
define( 'LOGGED_IN_SALT',   'Q+n90~ueENEKK2i]eb C!Q}>ECgfe(0~@P6M-;,fC$#ZVic?=#vLK*ZbSz0Va,@l' );
define( 'NONCE_SALT',       '% r O$nDh$.kd&6pJ9&~aJb-Yzh#dz-hx/M]=k0tL8jRo#^ep6*5;(P^&rxNwU@V' );

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
