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
define( 'DB_NAME', 'bseso' );

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
define( 'AUTH_KEY',         'CE0F(4~w =DJ,h>A6^q!:Pz[B(CLop7Dgr@S(!&IXNMxQy}un*mzOIJ7#q)*S(6h' );
define( 'SECURE_AUTH_KEY',  'Y~4ZW.1Z!/ oy7Wn}=svbj@zD,DO^8{m*{XUN]p=<52ui$:UEi0Xaw:&49TraE:h' );
define( 'LOGGED_IN_KEY',    'xuXglVPSNnGG.@`+(0yN+j;[L)-ec35VFR0hAze+W+gP|RWwi x$PUq<s:+))7uS' );
define( 'NONCE_KEY',        'E${41:?C|1cIygonut`B?pLc[#DdZgp6S4;^D*bUklT2~1Rx_^yWLgZ;lZIQQY)<' );
define( 'AUTH_SALT',        '&W[q }!~;P#Cuk%Pvhw`bi2a-xhbae;xHHXFGhy/3R+]3:{|0WX]kOA!(eka=n8A' );
define( 'SECURE_AUTH_SALT', 'DJ=QtfN:Z)xx++RWF-.QwRLV(p4c*.b4$~uTQJj15PB;-dO?^9yB;VZO;7|}riis' );
define( 'LOGGED_IN_SALT',   '7shtH3x8Y@T7n[wq03#$!f-Ec<@>vsA@RB$G!lG07]Es-#[&aXLyW,mfG-~:7{<]' );
define( 'NONCE_SALT',       '_{7rp@,7r~ms)Fqo(2RBk;b<ncGBJk6VP_#;qR4Ikx|F?tzz(Wp6l;vTNL#M!,e*' );

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
