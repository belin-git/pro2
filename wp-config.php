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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp2' );

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
define( 'AUTH_KEY',         'B^T2,X;=d|kZAwd]xXzB._9KT_)rSph43{vZy@eg%F7SQ56oB=Zxq=ZaGel&hgrD' );
define( 'SECURE_AUTH_KEY',  'Nd9OA4+LCNSF>RbVVrH90Ez+(K*hH=cy92;E^<+M[#L,0Z2Tr4m/Irg -YuqolA4' );
define( 'LOGGED_IN_KEY',    'd-o)oK#Ctf*o3`F-$vxQH;f*R1}={x>NP/1fHY<FR.C^JxjMGIgO!aqx<Jg>%7PU' );
define( 'NONCE_KEY',        ';zt3[2ypbma*zPX#.&O,/}_DJk70fjevYF+CQHTC!9YMfjsOY#Az>e!`.b}Fo3SP' );
define( 'AUTH_SALT',        'EnOo|8&r9t{;7[(X108h;KJ8Nkc^{7YP^g@+w<.^DqU5/HJ@/+9H`R7etCmzx405' );
define( 'SECURE_AUTH_SALT', 've=%W,2P~O>>}b<chTlkqV+V&8`AE4eAZN.[S2sg*OMJy]R!mb8<t3EHNTR*jz1[' );
define( 'LOGGED_IN_SALT',   '^*(l6pjIzs[3q?lAHj<C^Z[e<m2T8juO.dOuDEfM,!!)~R<mmG(,M~og2NN|]mSy' );
define( 'NONCE_SALT',       'h*u+fR!CIL6kvSr^zhzw?8vs`<gBp6|tt|41$ON;&v*a1R1HvjtCf0o0E_7]6?^R' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
