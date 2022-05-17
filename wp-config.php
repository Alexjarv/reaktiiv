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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '_(jNF3Bj({_g8|pX|>.y(EGD&HGj05(x@2lTyJh67y+Be%RoXkL<Z0oaee@l1z}M' );
define( 'SECURE_AUTH_KEY',  'KJ5?G=nD:zxrD8kHu@!NG,(m &ztq}6U|@unWNK4?P6@.ThGu]tRJIq4mS-%0Mgw' );
define( 'LOGGED_IN_KEY',    'eM-Picleyr7|Q.QQ&9M}^|K*W<@b!.$v=Z^,,;Z0h?09SVZg3#6|d5g/4bdG/LG6' );
define( 'NONCE_KEY',        'KwV0p(blJmoxq8Snu`U(O2,j/0o-H|:+gX|^Vi~CMZVNHK8{w3`P[Xs;-OgMnM??' );
define( 'AUTH_SALT',        '!Dcv]-~b]f(fpGCh.Z_tSW>9s3K=3a&lLKKM+iS*_9Au6VSbZd8L6@0:_X;9W7RQ' );
define( 'SECURE_AUTH_SALT', '~A>7b-}|/v7q=2v{LF9)3N_6?o-H6,xJ=_wOa3U{4#flrM!$-@*eC D1$/0m, z?' );
define( 'LOGGED_IN_SALT',   'jgaBClJ>]CySSum&ghp{k(yuOM,?48P[han7T;3[Z,0xwfM+Qa/hQj?D[#-LKNSO' );
define( 'NONCE_SALT',       '9T-JUqYrfse>.wRgsxlW#~L:+UPy[Vb$nah*WTI9m&9S<E0M!8Bi& >P_Sf=!B4H' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
