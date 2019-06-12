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
define( 'DB_NAME', 'regeneratedorange' );

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
define( 'AUTH_KEY',         '8Pe5%::wj^`WoWa|^];kH@[{!lB7Q%xQD.sQ@o:8 2OMbV%0YT?xNP5MK]14joCq' );
define( 'SECURE_AUTH_KEY',  'cV6&+npqEW] wOyO?rFYfdP//TZU4dpyt`Bjz=8nqQF<ihm}A@#g}mXe% ggj6{}' );
define( 'LOGGED_IN_KEY',    'o[6r.x[{uxj&zn/o|%:%)`4kLB{FXLeti3i{qx!tkg1!!u!ko1m<F@/Zd;C&V{zm' );
define( 'NONCE_KEY',        'W-T~j=V( bm1,vCQwl&isa=#9g)Wp2|-9j-iu7.#c }XNwcQJ(k4]W<hJ9~!MT_^' );
define( 'AUTH_SALT',        'LSy5Lt;W[JjL?-[(Qx^wj+K*V1OQ1 d7N2RICt%J<2XqVF@1)(7}+/73#7*nIt=-' );
define( 'SECURE_AUTH_SALT', 'ysD ^O!C4m,eM5|i~Yxj:<D8??i7C[^!4vjLRvAbYy!&V~L8#O):Qn{LWz^[mKVT' );
define( 'LOGGED_IN_SALT',   '9#7mhuv4Z9{%B2rXu/9~Ae1TAky;;:A?$BL%Rg3,GkZ=E|NsE3&J#@_})IDyMHA;' );
define( 'NONCE_SALT',       'oi[cUP.8FM*/aOPw!W>>K35R[4R[[c9:w[Lq4TQ;D+yH|Ey!)Xa7:Aaq)?a}9Z3Q' );

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
