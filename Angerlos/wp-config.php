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
define( 'DB_NAME', 'angerlodbwp' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         'R(M[pPM$4B,M@N7Zso+%$b1H1RGIkTO2`KNNxkHw}5*LT#*wS&+21oU4#JkSsVVs' );
define( 'SECURE_AUTH_KEY',  '+YE)>eL5ec|.nMdZqi1BpxN-M |_d{Al&ofOH=VJ(qwt-f@-vK .(HITf&~^TQR-' );
define( 'LOGGED_IN_KEY',    '5W0OE@rDPR,SA:M6f@Dhl>_uB`:(}->O7/#<2xk;&OkUi->8%`8?@f*Qe.;ip>AM' );
define( 'NONCE_KEY',        'P@@l et=<k^|]JD%VlTu9P[&#TAMjE$o{UYy;4x@P$J+j+2H1-bbpC9F-rNdvwf!' );
define( 'AUTH_SALT',        '+yU{8j}q{o#C1>k$nZGgRWEhFIF?fOlOjQS$QVbvA43d9{mO]w@wsP&(NAV|* *{' );
define( 'SECURE_AUTH_SALT', 'AGF9K+S|Co#ykf04$|-Z@{mG)[X*.&#TA8t;KOj~IP3(;|Vuo0+@ZMT@{pXQT2*F' );
define( 'LOGGED_IN_SALT',   'A4v7a.g>~MR0M@bH6(t4=_{,wbrRn@BU/tA6&j6JQ*f1aR0U$T$|LNNx3yQT^j&n' );
define( 'NONCE_SALT',       'Oq|^au#dYy&FujHJ.tu`QlO QzRY5ASnmDS-[%xB8!`uf!=enYrS:-Cmac;@l(R`' );

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
