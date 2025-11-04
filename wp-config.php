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
define( 'AUTH_KEY',          'o,si@;XrU[oG!U/v.fmG3`g2_r*fhEDEH&)#b(I16k3*FYcK3DXO3|:[W:=pioL}' );
define( 'SECURE_AUTH_KEY',   '`F;l~fyF35l1lL1jDK{)ff_ pEOTT,2- 43qcfu=Iw@yAV@8:8i!w>D;zU!dq/Y9' );
define( 'LOGGED_IN_KEY',     '5&/4T 0s!mso``evbjsBXzU}oO/9),l.uf$KM edzn6pC;{$P-(z/S26j@guzWII' );
define( 'NONCE_KEY',         '3!j>?zXcHBa|+Uu!OuzplllH.ZPG|2_:`L/<R57L0}#&Z)gorwtvK@$j6|~tp{fQ' );
define( 'AUTH_SALT',         'U,T6i_p<jO>u<]V+n8.2z82VM2#]*?e)!.I/G-&k5nXZ!>V}$ 6Y+*q-&IR1|.~^' );
define( 'SECURE_AUTH_SALT',  '#qe5P0l9<:@bgE4MV1l_$CUiW=(L#hq`l%fqhTM0Ni=f:%,^NrwOZ&a|@w_$Vu,_' );
define( 'LOGGED_IN_SALT',    'iH:J>38|.gR8:+t0yqSQl%wsO:XY86Nh6y/XiH1vd9yNY[<0cs11[B;{y.n+E?3|' );
define( 'NONCE_SALT',        'v@xo)81B-)!08)=dX_DO|HFL.)nC=%?W@6UtQsOr1wTUV)_(Tg[t$gq`Af+$(OC[' );
define( 'WP_CACHE_KEY_SALT', ';p|X7fOdKeP;WaB-mcIDn(95b #b]cv l4!Fc$wY1<6yF]<)!.o0nS*,$78Ab*{f' );


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
