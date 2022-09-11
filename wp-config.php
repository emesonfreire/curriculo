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
define( 'DB_NAME', 'curriculo' );

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
define( 'AUTH_KEY',         'P3Karqvn^jeC#;%]nnuD0HxPg?@,_TCJ{[/56v5wb!H]a?oaf)dR4H:o<&[Q~~YG' );
define( 'SECURE_AUTH_KEY',  '=Cdw&qR:+l@NeSt~@~#s9yf4T;8v%d%dQ$(UE) `iFT1J;$$QNU,a#]&!X_Y}~,(' );
define( 'LOGGED_IN_KEY',    'nPwF<LL76xZ44%(dsy5z]6}3?yRUJ}{UnNc}T5zeiF1EPd}fPQ334!LF,~k26,CF' );
define( 'NONCE_KEY',        'N@vI!|tmZ5{vR[Q=]:|YFI+NPTo*n+XdE Rb)in[:wO!!VV%`V*dy|jHDGhCOPh1' );
define( 'AUTH_SALT',        'Xe -+5]vKjjE#Qy*Jt1]<PSp|g/HUl> _{}MwG=^7[,/;Ab|i>vg?!{>@Z%inp^+' );
define( 'SECURE_AUTH_SALT', 'F:|N{!H>s|q.eyQp6DI7yVN5!p?zM_HLy}/uJkgSqF4*6t4V;UAy$3}?tGeZIjtA' );
define( 'LOGGED_IN_SALT',   '(L3mVb6DmYd4qFf1j?]#@^QY^]6nP9OVAI!W1$%_##Vl;(W)Ca(=<bfbH;:HuYG=' );
define( 'NONCE_SALT',       'Rm35OiS*IG){,nQ<oz`fc@.hLTrclec]xy1~l]7X =^/,8MSu`_$kKVhVGecAp_I' );

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
