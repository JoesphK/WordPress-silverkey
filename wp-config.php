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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wpuser' );

/** Database password */
define( 'DB_PASSWORD', 'password' );

/** Database hostname */
define( 'DB_HOST', '10.1.0.25:3306' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         '2{yi0gOJ75B ZkRI$;|&Up,&t]inD,c9<iDDAn)T|M5Jk>3k`AMaX!KkwUTb::98');
define('SECURE_AUTH_KEY',  '9x~ZG_j#9r`=+fZYd%+0Q%h^on`|Hh&>h0<e(p(Rw)OE#?tXub[@-3H$FZ.KlFpV');
define('LOGGED_IN_KEY',    '-%y4DcUv=0c:m(B-=e>7|pol>]xRZdj-@~N(e3;xn<dFIay(kPZo|=,0 v{D=Hw~');
define('NONCE_KEY',        '0cHwvXjR8xn?DeA|(pClOr-h6UHw30_;@MSyWcu@ELnIh6+nRY*hG[b2ouJ>6fli');
define('AUTH_SALT',        '$S%B1qT0T*GWKT DwCk,F08luv)eEd,SurUmac1a$n8YjXN&sdZOsBX1 bQ$Ls?k');
define('SECURE_AUTH_SALT', '+dM- UCn8>-tUJPnWf(1ha3B#_o2${kcdk1;P`S(hiYCS2V.L`K0md]RKCv|yso+');
define('LOGGED_IN_SALT',   'G?|YL8Bo)&x{+Q25KPxWs:ngdhQd-siSuO,f@Oq-qV@I,2<qfH.+AF~+*C2;J<9r');
define('NONCE_SALT',       ':tK(kDk(dfqGyCGeM+&m=Zdq}f5w$#orQn2-k*LGp~8b9>$~%_tV(]Fph;E9@A-g');

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

