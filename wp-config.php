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
define( 'DB_NAME', 'proyectotienda' );

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
define( 'AUTH_KEY',         '6x&}f*2&@~(t3|V_tk@g6[H6S4c]2>(=e3oAp8 (Nwd:^1vE=.]XPVXtr|[~mhh0' );
define( 'SECURE_AUTH_KEY',  'lR40lm8p? >?D$qrmW+D<x$H0$?J[`c#ZC)X8&asY>_qrSGj^|lNu{OXjut%D*h$' );
define( 'LOGGED_IN_KEY',    'k3Ox+51i=ZljGN2(H-[}W-&(V6![4>o_#K},[XG.LAx5Af-=CPVDvTn9zC1!1CPv' );
define( 'NONCE_KEY',        'lapUwX/{xu7Z=GEBu1APIyB8CGJ-  Y67g(mI8Y@XLWF9n71b>zfLqqY@Ad(5d/~' );
define( 'AUTH_SALT',        '#>F1#KXH6#b}9s?CjzN8@K1zg,il}$x`1*=f|g,$:0Eo^$y$gwNK@|F;aZj_ShS-' );
define( 'SECURE_AUTH_SALT', ':1$LqouUk}D)B3e79c3 LTUYk+qV5|Xr}IdCss=+H[kWz{LYQJdi>o4ALQBrh2_h' );
define( 'LOGGED_IN_SALT',   '-E4!A6>Jy1H)wrz}~QE0U8-K2-h)>Osg@sogos(Flr(hAP5R{NJoi4M9},:SELd1' );
define( 'NONCE_SALT',       'k{EYzL8?:|txM8n7Q0-;yA+<MV!~{1A|5Op19_^BA_Nq4n5ZoWA]ae*:yRi-D]!#' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_1';

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
