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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '-8C%zIE<eWb]!c5eC<6<E^<Z>y[F<B(enm`e31|J*bZs^7{]FqEM[uYIzg7>#~D`' );
define( 'SECURE_AUTH_KEY',   'L!H1(QN||@3(u,u{4c 1I}8D!1%;j>0u!UAdv?z&;o#9s9<*36<BFLSD$mB od-|' );
define( 'LOGGED_IN_KEY',     'w+-*Z[[W(eY+uYh9}$`}>%XMWV9MklfdX<kAFKN7?2Ex!B!ly?9^)hAde+mtv$jY' );
define( 'NONCE_KEY',         'o=CrD(tc? :E}:2P<Z3$7@GtbO?3NX[3qik(6InDfIlr`whpN-3!yCbIFGG,!A`(' );
define( 'AUTH_SALT',         ',u7[1v/6PDyPWP%&|BKE_NG6/ih8$mI~}Tbb=?T)U;OFk*5 s<`*GtsiaXP(fDsr' );
define( 'SECURE_AUTH_SALT',  'W=61$ P?8tXv:H.DQe?VJo)AUtt3*|;&<ww?d`hoa:JpD;R1;/2&<1A+)4|x0nV=' );
define( 'LOGGED_IN_SALT',    'UO{yNI?/$ VPYDDAD- fioH/ndS}F{H1@(f^3dRnn&+XWjL:HCp*_(cZnutI,FJ2' );
define( 'NONCE_SALT',        '&#U(v_&AHAph/3|0t_Tr+uyj`<8bijOfi(Vmt&Mz=%Sk.j.c!W}k4)1c&@3U1P,_' );
define( 'WP_CACHE_KEY_SALT', '[;yZtJ$GUv;`wqVW-$Vv5EBcdUOxa.9I2AFidh|d#^dG*z&D3 ]jMeBFXW:vg{Bq' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
