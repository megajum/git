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
define( 'DB_NAME', 'git' );

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
define( 'AUTH_KEY',         'hc}VQ~FW#>j@2L-XMuQ0hOvRQt8vS6cU9b3tS,-Q.zleBlp5,S%((B .1j:@)n2S' );
define( 'SECURE_AUTH_KEY',  'rk^Uj pTr&A#`Wd=4odG`.2H&o`xB:V+pR`4hKQUD8v7BnT<bKctm10V0kN5sR+L' );
define( 'LOGGED_IN_KEY',    'o{1tkA&Ro6m]y0fk/v_,AUU$I6XR36o|NJDSozC?.**r`l>NB^%fW+MYH<bCc`M<' );
define( 'NONCE_KEY',        'hrWqmfLImO%&Vvm2Q0:pOXB1yWjp!U)4(24CrnKA;DJb`5|b^/bJgB,99SP+Jwbd' );
define( 'AUTH_SALT',        'T0h]TUT=aWMyCasXnfcSvXVB<ZejFT6NA7k)N$-*Ntw5l~b6;2*{ja;WiDvr6R-F' );
define( 'SECURE_AUTH_SALT', 'Pi_d*Uvf t|#vK~!UkAY`#j)wrLgFWN~nF8RfYp.cfMN6}v@}22VU0rDtDg[z/1n' );
define( 'LOGGED_IN_SALT',   '7hHB-]y2|Hi`]UGB=e4xNv+pE`R@8nSP*|+Tb}vts7U9Fi-_I-]xW:KWKf7T(D]l' );
define( 'NONCE_SALT',       'A:{;W^.w!s:q7i5#8|5p4uUOC17WrV44XsJ6IaTheX^`]/Zm96K))?2A~u+QK$-b' );

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
