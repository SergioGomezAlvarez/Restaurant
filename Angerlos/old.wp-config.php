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
define( 'DB_NAME', 'AngerloDBWP' );

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
define( 'AUTH_KEY',         'yC1.|hT2<^NN)Nq!A6}fee0aR)B1Qpyqcv#f5ZItq?b4Ff|Z9C]>?,*9eH|c9)Wa' );
define( 'SECURE_AUTH_KEY',  '3G}!?*p&6mzX{glvW0P{t*OyzJ VE;O1}53]Xz.h_utV$/&g@qY,~$tWV%cd@:|#' );
define( 'LOGGED_IN_KEY',    'pMOmNi?X=JuxFT*R*)Yhbx@p6-hgUZy@NbkLkN)E?{pN E^KG,3=*1sf=#CXAeKe' );
define( 'NONCE_KEY',        'n*#n(/0ls4to`x$43|SYW[gUcNID<N9q(J]tz1cN<?kz*VrTR<{i:2daFiN:VHI<' );
define( 'AUTH_SALT',        'S8,?w&F0<>[d0{rf|EvoUSJx;r1N/53evWDnUy40PzY-7[x3x=l3~wriWIuC^(ZZ' );
define( 'SECURE_AUTH_SALT', '7&siURHT{1We#ywUx}$.~>6>:)$V/$P]0L~yo]+;dEn@P!hS*w[uJaM+!_1k#jsR' );
define( 'LOGGED_IN_SALT',   'L=uijQWw~wn8r=HBnlzFDJT|0yv0F7Zi`8<Wt[jR,B~nA9X;YnIz}CJS}9s3}px9' );
define( 'NONCE_SALT',       '|PD#shAEp2AE6d2p|mxdG~l!M,|x^u!Vor(c0}(~Bm?kMGXrj<q A$hleEW8^&HY' );

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
