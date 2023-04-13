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
define( 'DB_NAME', 'designway_db' );

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
define( 'AUTH_KEY',         'Y3#hT)N+ldP_4Qmtf:FKeU@h{Fjh^x5hxobpL/iwi.F(68M*;Xi,XnoY*x3!=c[*' );
define( 'SECURE_AUTH_KEY',  '4]!]>{=O4}oZF+!:o{C%UQ>9DxLuT<o T7,)Jrq Zri%2d%H5}v)y;cNz0.wdsS}' );
define( 'LOGGED_IN_KEY',    ']Y0AoI`R28zN:O_Fg.rU9fDgZIH2z*(n~A;RB&bI[[9?K}F[}vEb7gSI2cZC`_^o' );
define( 'NONCE_KEY',        '04ydbnWYegAY#.=l}GVqZIB&mu4DU4%uh-27kSA5Gv44^gdOsZ0PH*tX+[n{(t$c' );
define( 'AUTH_SALT',        'd1uY8]0=a84~L=*R7`A,NkJ&M<4#?fRN$v/<%8X2@^=V4j %z^1NHX}BVIb/O+VN' );
define( 'SECURE_AUTH_SALT', 'Sh%!lT:Do_6#SNwsySE6V8S&D,IyTfIln?Ktq,];!LS2*FExYzbSeh@ &T*Kff}y' );
define( 'LOGGED_IN_SALT',   'zoK5#M^:^rMyD3i7X^9veHXQx8U)Ft4mBFbys/-6j$$LClWEwb1ETDgAT,zXLP*L' );
define( 'NONCE_SALT',       '-h]u#;iDtV7f[kcM3`zPhpGDwxJYIsE`G2IbMFd+:-gvvM>K4/biw*GjjMgUiuyw' );

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
