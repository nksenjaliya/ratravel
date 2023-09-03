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
define( 'DB_NAME', 'ratravel' );

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
define( 'AUTH_KEY',         '+.GI(.b-(^Sqml*0o-w3Ng_8J.&yX{|YBte7x),:i+6=cXsCp!{AbmS%s`ygc)2S' );
define( 'SECURE_AUTH_KEY',  'pR<NDrd! V%}{?I:1j4Zcvl>x$/P~m5<DMMxI3z,uOEiVtD($oGm=.pJm+u~Wrq2' );
define( 'LOGGED_IN_KEY',    '9=U:-9J?sYqK2#h^p(N1|]$BBY14KaVMa4S#s-#?`z`,my,ncwS2Az_{~d{Sk8|4' );
define( 'NONCE_KEY',        '3*b#s}_~e>82zGWAXFcsek}?}<t9$_}eaz;h,+qUCi1ruTt;tG=yc<gXCgLG*qRl' );
define( 'AUTH_SALT',        'd?=_z=TGPP6`]i_6-Jz<U3GxzElAw1h}2UzPNFc&f,QLe=w#[y7+`I}8lbjpGGt3' );
define( 'SECURE_AUTH_SALT', '04vqkvX%S~V_ |lCzHF0mAA<E 4ZlT|)y%v%*_nxY~;X2mKUG|S*jZN7P)lFkyA{' );
define( 'LOGGED_IN_SALT',   '@A(k}y]Gp^td_lRp8!?=.,hnK;~n&`j8Y_v=E8,lXNa|N^U(BiIw;A^A/r<t8L|H' );
define( 'NONCE_SALT',       'M<W~+5GlN!Fu_Mv^xdt~gxs{1M,ccGx5<|+ygH^d0*..RE^Mw45_C/a,|#OiypBA' );

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
