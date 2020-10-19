<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'demo' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'vrA4Z%}PO8f(-JrsWf6U]hfx~i(j:R(uN4-a~#R/imQQlH2n|W]GT+0L)L-S#!Ab' );
define( 'SECURE_AUTH_KEY',  'FY_7}n}gNXqR5tEK1lx#IJ.TW9qr+z}7J&t8dc* ;~`rX*pF9_Q)3qEmy>tc+n%a' );
define( 'LOGGED_IN_KEY',    '-+?|Bi@)9[{m8#U^{W%cjB@BOy{1;YLek)kUz)hTKh*tg*mGQ2ORm/@rlbCrKvC9' );
define( 'NONCE_KEY',        'r?IqQNiO45FO[P^e`4o(k!?~.N<pM+Dv:L8.OdbbR`:A_&vbCa4m#qPAE| 4T/+Z' );
define( 'AUTH_SALT',        'l~O)#a}M7Cl`sbM}kZ~Lx&^`oJ<v*j<v%jf%wdL},b~a#k?%IDDLgsVSTuOayVg^' );
define( 'SECURE_AUTH_SALT', 'e^JV0zwgD6F,vO@R<u~dp_KN%kX(nro2U|?upy]>[ZVfyl_c~EAN=KG8im|{$ZU7' );
define( 'LOGGED_IN_SALT',   'D9#VV]F,Gb[SwecU|?k-nv#?#d.+V5rU[#P6B&[:D[MvDnZ?R{|4<t_iaEXyn,:z' );
define( 'NONCE_SALT',       'E2/=(a,zI%,%ca^>YH0QMZ0MQqn{3gP+g;}bIIuB)/JodS7) pn20deq^zb_IuG3' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
