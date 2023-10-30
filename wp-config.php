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
define( 'DB_NAME', 'word' );

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
define( 'AUTH_KEY',         '`0HsQc(Y9= 4esdT~vT3ZF&c#yQDMpOct:73OW@>c;|f:R0S:q9-M5Y{`yl_2Ut.' );
define( 'SECURE_AUTH_KEY',  'Q_LY4R?Hbri&^A}#r`@[BGYshw$==DE^_^p]Fa2CH:Rd4Y=QlC<wjX_HKCF,Px3/' );
define( 'LOGGED_IN_KEY',    'XWauhC2B:>!3{l)PXEQ0D+Qxb@1*NtwD6M6gS>uZ9s.xev_6]#JU.uZ:uX5dI6x]' );
define( 'NONCE_KEY',        'puc$`CnD([Qe5mNxkU#i)G({w>~;Pu2wmft)cBN:B8`qhqFW=hngfeG!Q{:+rcjF' );
define( 'AUTH_SALT',        '=B%8L~9pz[w)]yM+q;0Jv1~h6%Sk/ql|?*[cvaIh&Ew+9v4BX8Og.^{,+e,m;YzJ' );
define( 'SECURE_AUTH_SALT', '-NVGQ,TA{YX:.rY1|{S]0d2m^uKJRx,(W.Rjv.nkpx@,s,n-55^QU.>&S;`2b#tG' );
define( 'LOGGED_IN_SALT',   'VST;S-nY,8XO]U{M{8D1V_=yUOKW3e=.kW-}ob6lD%njj`Om*5,hJN>vW$6zcF]>' );
define( 'NONCE_SALT',       '*8>M&F$POWs^kn5!>rLahC9(GRJO?hL(}{Sk~/;/l~2|; YR?h+IPaM!]Q]^wpK=' );

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
