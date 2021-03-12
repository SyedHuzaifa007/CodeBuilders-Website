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
define( 'DB_NAME', 'word2' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'QHqH[q/^zt);xwfz+};qnyC^B10spT&YR9v6iDx27xR*LXWF#iaJk;@x*x|s*ee1' );
define( 'SECURE_AUTH_KEY',  'n2MWGW2($,g8+3d{%N^Yi)tShqe^Cd}[(VS]~g$Zx]|_|].O>Wy$IxK$cXeMn_L2' );
define( 'LOGGED_IN_KEY',    ',+R-!Ihh|H[ODtU{1?dzBoyVSr#A+~,,=,Syw-reWOrk@d)cOMSI$6eJzA33@*T ' );
define( 'NONCE_KEY',        'd4idE*ovw*F&qA6h`sU@)C}>kQ#_$LHmFzP{)$1%pY0:l~PFQ%kj^h$$+M`a=cVe' );
define( 'AUTH_SALT',        '_@<Qu(zEc^60}B|q/uv*+ 2D<fW@[jL/&2S8@Bx#y;U!Sz^J.Yfc.n=O_x|fI=h@' );
define( 'SECURE_AUTH_SALT', 'uvDm32rM({I8xv1G?4Ll_P*d=V(?xKyhpZfZl1Md/}_76`OtQMRo?>z~EK_c!A<w' );
define( 'LOGGED_IN_SALT',   '~wc3N]=eW.kN YOIZc:SMkc4Cl}kvW+lRe8_G=L!uJHVvIUcm(uZ6(}H3ZM*&?:~' );
define( 'NONCE_SALT',       't@D#!?gB3KoSQ=AOeA(KSD?LGf1:bx[!;fMt4-Nsw,5YFOl<6xdM60epn}_Qv?7z' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
