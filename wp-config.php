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
define( 'DB_NAME', 'n1ag_bd' );

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
define( 'AUTH_KEY',         'R6?y^?sC;A*0*-7K@)qEiksWF}!,9o$Eye,b%Mhw!c?,8;j@~G!Zp#2>`QvQ)z{~' );
define( 'SECURE_AUTH_KEY',  'O^EhkT*$Rl)Qf`k{{`icL,^08SG 3hLs<JAh?fx@ cKjW_QfrOpB$A{.2<X4~VaW' );
define( 'LOGGED_IN_KEY',    ';LL/*QS8QQV9}tm I{~u^U1U4Mmc,6|Iz&%c(uTQ#)1)X$x160*[n(#b.5QccavJ' );
define( 'NONCE_KEY',        'tDSl.JeUGYePZFHdAqPozqRNE3/(+7!V{@gyoNFACqYQ@~$Al[CEvSe(uB(/l##.' );
define( 'AUTH_SALT',        'L9dT~ln!M|l^Q4<7m* bmT1}!T#=OE$h4&`$)<&q}+Y#1LBY@9hzVi5%(%^CZiAy' );
define( 'SECURE_AUTH_SALT', '!)e`pho+vU~.X}2T0q+#)UpLOE}eM|yp#qwO%6,U!ub.A8<nvjY;ZBi]5WD,%6A)' );
define( 'LOGGED_IN_SALT',   'qtBKB}9l_YafWTMqfj~JbUp>1JzM x^HgwU[,Kq~Wu0E:bQBVz|QW@)CE0-E@e1}' );
define( 'NONCE_SALT',       '1J432Llu5#|Vb>o{G(4s#?p5Bz[,+DN%!,YCwS5j+=d}ogwC{ehMTkGidNnb=HVU' );

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
