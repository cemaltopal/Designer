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
define( 'DB_NAME', 'designer' );

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
define( 'AUTH_KEY',         '=[L6Oe8f#DW2Fws|C~7l)mMV3w~XE5ZG-M`CwxGGxxu$N#uZg1z]PGSgN&AtBYT1' );
define( 'SECURE_AUTH_KEY',  '47$P(.0{jV?M,<uLNZ=#3Os)/[z[,b;w!}{!`|x)bR}2&tD dJKcqmcg)KO V^ih' );
define( 'LOGGED_IN_KEY',    ',>$s2B+`^aKm^s%L3m9.n&j&._oGYIz!<wq/a4)]7dN`PuW#Yc^R(xg %11s]<:(' );
define( 'NONCE_KEY',        'ZGz )bw H`5txV-iI2W7/Z0k`h4U}^bk0St AY6aJaP>8m|!,b@gV6`|=*d:}DjN' );
define( 'AUTH_SALT',        'vEfc5.9mb]J]b~J~=M{wJ9&|)0WFpVGEs7S3J8( =bi)I r9|qTd2Ffj/ju#W_Ti' );
define( 'SECURE_AUTH_SALT', 'i|2mk5rY|qe~Y:s-[~*,TG(xU>_~[F/3b2RIKM2jzc`tG7}e9Pzl1Wl!:0|<N&&>' );
define( 'LOGGED_IN_SALT',   '.`*B*)ggvlZIA-f9T`2xUL&&j-Pv]/Uvu[#zh5&+MX=(A1&lv[e[gj}8q*r_K(|=' );
define( 'NONCE_SALT',       ']oZYblNqzY(hfFD+t@>5blw4f`%C~to3#4 P?;w#NMa(*cl>oy5F/1C&&K#_:mOO' );

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
