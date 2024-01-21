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
define( 'DB_NAME', 'wordpress11' );

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
define( 'AUTH_KEY',         'T#NCE$&=3&Dej&NV}Li>|oC(Vx#r1}xHJGjCIGtE7<3I1Jm*pRT# jZOFX|^VCJr' );
define( 'SECURE_AUTH_KEY',  'Q=^T{LR&QJGulGJ;UF:GB?Q./zGR1Ea-d}TF&k:S;H#oj=lc.~6@O;F|pzNSeJKv' );
define( 'LOGGED_IN_KEY',    'mK3HBehZQG>Rt^>h)*,W4<A~$_* 7j/bo$D8Nq7s}o9fZywe$;jj@J#Y%;}6I`sk' );
define( 'NONCE_KEY',        'SdpY)rXiij}~P.h TIm#w#[!:<(&``|Jx:SVN)V3T2g)>IM:tz9T>fFzSEnbq~|&' );
define( 'AUTH_SALT',        'ZvQ:23aGtyj K/A? Nt4cJ,X`Q,d,,hZ`/67G1O87Md1?;d/b(MeSg{E&*p#h`0C' );
define( 'SECURE_AUTH_SALT', 'Q_p{!sg0c1)^1q.5 jZe!HWI@v_Vx_ZNCLXhAno! Cd56.un0s1.Q;~uKzxqMV6j' );
define( 'LOGGED_IN_SALT',   '=T&/fyyRf >p%&$wQi<YAOQS ~4?;,4d>g|0l.$}zn=gc; 01?p_?<ZY.T>1A./C' );
define( 'NONCE_SALT',       'en}Q[4?nd!E%rVJRio^DIKKeFU>[3e=l26e2r01z]BEdV!fk(8iPu0kp.myC|vU3' );

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
