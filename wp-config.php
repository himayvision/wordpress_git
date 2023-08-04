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
define( 'DB_NAME', 'wp_git' );

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
define( 'AUTH_KEY',         'D-Do:J@v/83s51lEn Tb-+wsVRB;}1:{RtI1,x^v]p2^T|] Z;=u7V&@vw)JUZ[3' );
define( 'SECURE_AUTH_KEY',  'wyO]TT}_*ym(},kH=Ve.K42pH}K[wEMyGC($.dItpk<j[32DqH]QRe|gL-SSX>**' );
define( 'LOGGED_IN_KEY',    'kE* :T];- k|,DcE;h8-1xv}*0Qj9lA<-WF3^n_nga`GY|RZv:YBQO4wW<BP.!_)' );
define( 'NONCE_KEY',        'Y@OA2CSEp-xl7T}G1}v0E:xx5Uh7FRZ2?`{x/@qqD/zJ2Z7hiD,PR~g9k<eY<f3f' );
define( 'AUTH_SALT',        'Z^tGviAv#Hc*8Yp+)(lhtp*oYN=ZVwv7P]3A&m,CWPH&<NIi#xW#WR|N w%FX{1H' );
define( 'SECURE_AUTH_SALT', 'p?[U#EhhLX<.^bsTeB#vAK]X&crGKX~>]oj%%[%.)GqsU*J)pxxuB|`!*$w;N[db' );
define( 'LOGGED_IN_SALT',   'b&>}D!(<4b,7%J1$#]<g7{?LnoE[]Jt^R:lMlI~MKZ|Jd[,-=@rwrkmt@IG;2k0D' );
define( 'NONCE_SALT',       '8G5HB!7BAw9?CJqxEt6,5$NomZ=HiLW*Pul0Q~nLG>C0CXw|T>zW4PT[?E/j;d7e' );

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
