<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wastecost' );

/** MySQL database username */
define( 'DB_USER', 'wastecost' );

/** MySQL database password */
define( 'DB_PASSWORD', '25554@Dev' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '~#}#JA(T|l}5jL.|Ia#vj+XPlg8T1-X1fy9QD4)[z1x2w>@.p1Fu!}{/v_?|y|]O');
define('SECUsRE_AUTH_KEY',  'M>cTyMZto-2QMm+kq8b_;Ao(v;}H}%a}0l|Tu=yWpxU=HYWJti,#5j1jUv/{[z8N');
define('LOGGED_IN_KEY',    'Rk_C u)yz8fBlJ}S?rWeWryqL*Fg[TG7.$JIRiZ3=qW7-RA@wooV%RIdqEP/F|zV');
define('NONCE_KEY',        '|4-R+80G+cMf*8>ZK$`BmA@/virR.yW;UnYrp&l$`/7cG ?!*{oj9x@=+QJLR<mi');
define('AUTH_SALT',        'v)*-J;sc~f?B-z|{!MOZyuQ hOv1S)@{}&g8S{2#PfuTyM#ZhrB<d44x7NycaZjd');
define('SECURE_AUTH_SALT', 'r^X,`;b2fly,_N1Fzpg;H0y.,paC<{XENb++b,/`zQ9*A[-.n]aw23|`|E,q|wAL');
define('LOGGED_IN_SALT',   ',/4>:v-h&XCz|E;Phn&=W0zsQQ_qgY+CSX-IIbEZj#Zm<5, CMw{zm|A_QPW3/e*');
define('NONCE_SALT',       '|9zf|0;:>55&!)V*a]8|7I*`Y_1+zm0)=Sgb_ok39oJI!.3&V,enh;|<PG<P{aH%');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';
define("FS_METHOD", "direct");

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
