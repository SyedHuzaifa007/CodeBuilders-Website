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
define( 'AUTH_KEY',         'a)fkqhwb7aX.JWE!}<HXI>pW2SWK<Y+@A&<,B% STs+/&T4ajl[5p|ZZfuBX<^C`' );
define( 'SECURE_AUTH_KEY',  '^REz +J%X#Sr|!sZq@U-UKGFJe l9i+H;]QGpo@gYgj{6b4]]u)zj?#>y$LvlUrh' );
define( 'LOGGED_IN_KEY',    'Mr5ykzOA=3i| (%0 9m=0rBYIo<BE?f(TdTn^E{fuJfv eKPO]?!Is*?#F)-J%eB' );
define( 'NONCE_KEY',        '}HF!PeS}x3o6K)/+d5QvnYx_?x%0K~`Gm66c`2qXj_-.-!iU]vr03$dPrZw`[-H/' );
define( 'AUTH_SALT',        ')95Y#j*#C{ax|a8lAd9E4 TMgmQiOsnP]jP6Jw6$+qhk ]2_?$e: eXJjA6v @=V' );
define( 'SECURE_AUTH_SALT', 'KQ+rQ*,%QaW~lF#i,x|Wn/@Z3{1 fV[rkB]i=D<AK^txpMzNm0Pa}:=8jxDh!,{k' );
define( 'LOGGED_IN_SALT',   '|oG]Tcm:a1u)B-VEJYAa%qPU:[Y8wOMv1tN,@ePs<Nfl24G0Vq.=Q#R.@ny-:MV_' );
define( 'NONCE_SALT',       'PanxQ8lWYr5Z8bER(L}L66<#p:S!%&yNC#=UB}6b.k!u.D,WjK.W|=<3AS?qfF{|' );

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
