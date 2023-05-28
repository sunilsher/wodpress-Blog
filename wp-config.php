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
define( 'DB_NAME', 'myblog' );

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
define( 'AUTH_KEY',         '2B(4=/NuXv7XoP&}4%T3>J((Ki6kX.QyPgjzIRB$joj(bLh)wFe7bMi@);M9uyD ' );
define( 'SECURE_AUTH_KEY',  'dR<*6`G11*-;v)ZOtj$XroG6ymm8m^>j)Zf{&fs,?u-L?Z@}$Z2llxIGbb%qgNp4' );
define( 'LOGGED_IN_KEY',    'iil} 4)!7t7Y5tD]Pq]rA6y:%-8PVBf1-vZhq1R&TvZ#8P=aB<&Ohh-18CQ2<nIP' );
define( 'NONCE_KEY',        'bWYW5yv-rk|gbVit,4^pAU<[)*;Y 17EK0+(kfucLH+KI*W1qHIO^0DrEx}sd_p%' );
define( 'AUTH_SALT',        'm&.+%;R(UPJIlr]~^dGGBs,$[<>A7LJVQLE@fX%}W:_8x!G4djsIO4h#vU qub;8' );
define( 'SECURE_AUTH_SALT', '5`;P~Fwu6),DIzO)UyHM`3k a+&d I]0G6bgXMLi3:-tN(4aE+Cdf 5$XK;/;E>k' );
define( 'LOGGED_IN_SALT',   '1}]S]Pu7~,mVD)A32Ft0|HJS`xp2/A,ae<gVC4no7nE3ZRhe,`5||]q9%7ut+N@M' );
define( 'NONCE_SALT',       'oZ{=#c|baWX|g_(v1_B<u^!,]rwE.>]l;sRp3{~|s>XBd$b%bQ6,Mr(A3#1tx[CH' );

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
