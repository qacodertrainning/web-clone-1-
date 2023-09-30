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
define( 'DB_NAME', 'webclone1' );

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
define( 'AUTH_KEY',         'k0s#AW]p{5$an-|M3f1*b$5~T4zo6Ve~.KK#.PqY(G9zA6i6wSJ3${#zA7gulCk2' );
define( 'SECURE_AUTH_KEY',  'O;+6+g&;8A/dO.0gin$1Q+riS4Rf2+3Hvl6u%}XA^Z0-bPoR=Cu*k|dn#8${RK}9' );
define( 'LOGGED_IN_KEY',    'DhCXcoP$L%AgbXM^NII9YYeK?go.?T t>kMYuNa;F@)Mg0dq+h)e nyo03 _@/*;' );
define( 'NONCE_KEY',        'hjvE#A!b F:Hy:BiaNmnp88B-lJI+M)UiUn,`e$n%.5|B<i9S:]l,LSH^R7h`Xw!' );
define( 'AUTH_SALT',        'XRrrrC030;uq^DKE::`;) ^Y37KV7sI2 y^W@xPNO|SU0L<tkS&LRQ?o]GcH8*kG' );
define( 'SECURE_AUTH_SALT', 'xp%/S&chr8m2Z=,qZ}ska)])hy8xnsMBz/F523gb:M<v:>K|q[T.d152PlpRVxj,' );
define( 'LOGGED_IN_SALT',   'LgLwblR+EqC^/>[{!7mNKeA2k8 `hD5=9I3]v7@3]48B-6M#ND%l4SW@m&pW%|]i' );
define( 'NONCE_SALT',       'ieg!b;pu:QR<AFq&,qN0q VPyt2WvN?U wpi?j#KfV$&BZ-L{<nK7r 0hjjQ^E7H' );

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
