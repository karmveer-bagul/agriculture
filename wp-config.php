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
define( 'DB_NAME', 'agriculture' );

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
define( 'AUTH_KEY',         '_r<j?!+@M.e|>MP#dnm<H6qU]}k{T l,M>P*MHL@;!2,}VfHUW#-#X#tC@.NR8UV' );
define( 'SECURE_AUTH_KEY',  's*+uCQ,)3kJ<)u.4IRtT]6#]rIkVx~u3Ncm^K!oh?0)5% qU+Q~YTJET&@,bZ=kQ' );
define( 'LOGGED_IN_KEY',    'O7U}-7w%Lo*n^JXVD?:sY+pFzy&6=?W^`3d|86p,!#Vq%q6Q/a3v[w{vKs`[$DGz' );
define( 'NONCE_KEY',        'AGiA7$x8!ima^g3(gRS#r1_Cy^ g;QvxCb]B.u6PE?&vHPt7Ey{l?NwQYi)K`vBx' );
define( 'AUTH_SALT',        '0iw;+w&Nn >pj#cUW5Y8*>/3Y*U 2rr5xKT&dC|SJyELzxtZiAt}/K/xq*a&{PP%' );
define( 'SECURE_AUTH_SALT', 'b^0k+.BUbO?J0T{GF}yV<g96-g.4Tq3lvzk:|M~%kEf$dBi.sS!aVKE}/:7}8g+G' );
define( 'LOGGED_IN_SALT',   '(&P5T]6uUA5c5x.C2#ekks&TL!&|@oplc0gn<H{e>aO4/Ab?Ldj+:I@(A&fd((e;' );
define( 'NONCE_SALT',       't&Z_=11`M>]UCEw_ujGE&H;7w?Iq-{C7{HE:GHG__k=,T}I4~im,LI&!0mSVUgDi' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
