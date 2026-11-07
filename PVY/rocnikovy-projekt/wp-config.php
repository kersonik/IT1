<?php
define('WP_CACHE', true); // WP-Optimize Cache
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
define( 'DB_NAME', 'c183kersonik' );
/** Database username */
define( 'DB_USER', 'c183kersonik' );
/** Database password */
define( 'DB_PASSWORD', 'kokot1234' );
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
define( 'AUTH_KEY',         'DffYU1y`6B{HUs: q<-i5qwmK?S&n},,X!3WQZwa&~+Z_xynbI?@PRUS?o5][7;P' );
define( 'SECURE_AUTH_KEY',  'y]_K4W?{I|=&bFom:?TuuAiF-G/3-(<m9W-!lF}xn6KF9_f&xBcFjyc9#,hcX?aO' );
define( 'LOGGED_IN_KEY',    '`gF{AP0y0O&d(cj <TG9xIR/17F4hyA`cK%o.%^ILAhJ[($q0{n (sV/v;;oE3Kp' );
define( 'NONCE_KEY',        '8|[d+p4*{U^`N$ys/Zw}Ry<OW~BHwN-JCw-`4^d6Xg|w,,9XJ/]WshY@:DIyKJY1' );
define( 'AUTH_SALT',        '&P:W)S({(44BjjFDA$FhOzS.vKwI1zb+D<+<A1OY.ionwu<*DKMfz=WE*;R:Z)D0' );
define( 'SECURE_AUTH_SALT', '|..oM#8a0AW3M5 fo^PM%t*pFySjV1~ fM0k/;(|+WpTg:e^ F65jDXhen9F~%R)' );
define( 'LOGGED_IN_SALT',   '{LT?xg,r`jpm^|JM!POO0`Ja|y@l5o:MIT^83Zj6-l8t_sgMj1,<`pa|#4S6{NBN' );
define( 'NONCE_SALT',       'D/mm]O+e^f5.z1OsI>peK>6K!!/PnBp!^l{w?YaX=1@zl2/ou %)dw@#Ek5[9QiH' );
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