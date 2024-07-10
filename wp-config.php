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
define( 'AUTH_KEY',          '1I*0rLV90(`(`Y_q00x7pVV6:m+Em8rjp/ObArp)ok>V++$_PUZ69SzIh}/1U/@M' );
define( 'SECURE_AUTH_KEY',   'Y-7Ym`c9aMbfcx!+Dw_#-/uuC4E;WUIDC]6Paq%(W[D<u2pwSm%I@rEU;i5Io:@H' );
define( 'LOGGED_IN_KEY',     '>corisu[SEz8_3!.17AA}wvg]Kx@`x3}nQ+~ja< _+z]1Q:# 07RJ@:wAgFaEZh]' );
define( 'NONCE_KEY',         '2b^m9d{+yJ[0_CO|;NV3E?*T%ytu{qdjsMzyzh^<3g:t4L.ZX-^kt%[$YoR%(GV9' );
define( 'AUTH_SALT',         '!_L4jHXq<X{u!eN;dYbth2c2GRa{;At{9>+MC[(mue$+#)$$-Kd<xt_ B/Ay:|wQ' );
define( 'SECURE_AUTH_SALT',  'h_f*vx1R@pR-ijWB ;g793$=<uNF)?SxFxCHhu{W/2LwF@]H?0awHobDfdK~=i|T' );
define( 'LOGGED_IN_SALT',    ']s r1[Y*hC#|XW6>lB;g-/GG4T} sufmyX{n,,f $V,g&cM?pT)Pp6dr0g}RtD4$' );
define( 'NONCE_SALT',        'o5i!Z~P2%t6Sf`xHuY>?^IV-3>h]WT`-kB]HidI!UcMUfK#.UxF!_4[R=iZ|h4&Z' );
define( 'WP_CACHE_KEY_SALT', 'E,~$MHN!AdEfYY/h>OU{p9}KXv~xB~5Q-@;T}WQaW4]FA>b|aC!8t_ .`5SrHq<4' );


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
