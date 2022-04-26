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
define( 'DB_NAME', 'monProjet' );

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
define( 'AUTH_KEY',         '6=pvj92~1Z.kXBMACU^lMA84Ioh?c;38c*5%.G0H!2PvXGeCg9zZwM}V=UvUFgGr' );
define( 'SECURE_AUTH_KEY',  'wc`5FoP%{[RTe!|wrv-fY!ll80Rm*F`V9hEnfgv5C7nR6_pC(vYP,a}ocL|!G9Pj' );
define( 'LOGGED_IN_KEY',    '|:38-x]&J|&^]<0f]KhTYIL(zPW~cYhu*/t~@hScAk:3_`zsD>f4T~(dT8G6_y5w' );
define( 'NONCE_KEY',        'hkNmR65x_~>w3{eWubVuR~CAM$/38<RUX!A|mvmqWTMmkA0tvla0-1UG~a!X;;d@' );
define( 'AUTH_SALT',        'yt$f*pH@:sto  HG[[HE7Pn{rkv+r[x&4XbT/De++KwaYCY/u<R- =6*Lb1ys%sH' );
define( 'SECURE_AUTH_SALT', '3!Q=p}%NK8[W9[tv~Sf8~c(UC+an^A-oF5&vr4SS8B^X;>e*yWUmCl6q}Qc-fwI@' );
define( 'LOGGED_IN_SALT',   '|9Vty[?u.j.ic#X/ZG`O04Rhyw8@4A>F[d6^CBe/^}b/!e{fT(tT7Rl>mGh9/$EP' );
define( 'NONCE_SALT',       'zQ_LzAMEE|W]yk7ORBOY_1w/NGE?UO5%TsaZe*KN^2abJ<<;4;I/R;i<}O9q5lsU' );

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
