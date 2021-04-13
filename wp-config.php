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
define( 'DB_NAME', 'db_portofolioporto' );

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
define( 'AUTH_KEY',         '!w6s)G:w-?3(_o}CBTEWW9OoFy2gdN?zEK$>sTWkN&{,.&iy@mSD3*1,hG7q26.0' );
define( 'SECURE_AUTH_KEY',  'AFj$6h?PnTC;aJ45z^G:Y)pT%(Q%D]CXdkz4M_YB*0gOkalR>v};*BtT%^8@?9&D' );
define( 'LOGGED_IN_KEY',    '/k9U,Jk^j`-t/u>5K3Pru@1ADwM11Gh`44m`{ qMF=mmxL[V{&$-NRQ%#-S:E/bG' );
define( 'NONCE_KEY',        ';<DgDhXA tB-+b3/Os.6hp%,G1r;JI{7L#Vq=ySmT:d$o+kPug$f}^!1 #1hXgb$' );
define( 'AUTH_SALT',        'Q3|1HSzVgtBW%YjEx,$T_(0Mur)&^`AR3:%zx*&&cdN.5|eYj(J(:OhrM*w3~Z([' );
define( 'SECURE_AUTH_SALT', 'cPxQ(UErT<b8o#azh`k!I!@x{7r_;h5-sOTJbQ;{&D|d:=aq@~0G1dZlZk/,>h!D' );
define( 'LOGGED_IN_SALT',   '>2I;C?JLm:(@c?8:r7lpuJ&E}S)7H7}P070:i cSlaPyFS-/2OgH;7)(P:VHsFOg' );
define( 'NONCE_SALT',       'V,RH,jufh~yaHGzohYP%3O.a+q:RVy8p|~x lT1s=[?XX|MS=M}XZK.+!WYyu:Wr' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_port';

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
