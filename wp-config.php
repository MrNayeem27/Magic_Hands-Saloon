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
define( 'AUTH_KEY',          '2AGYskitEQ]3D*fcA[}sN]/dI 7k^0{W.yMm$Q[FhV YoA>:n<2yfx0Hp6C:M?  ' );
define( 'SECURE_AUTH_KEY',   'J/@bxpD[kWjYjqMl#Dq)o:eaALZKET]!4&S6GF@Lqt:`zmo%`XnPs0,4^19DJ;yG' );
define( 'LOGGED_IN_KEY',     'yK!>iAqs#M5?EhZ(Q)>YxjE~H<=UL)t%|-J]!,_Er+UFcB@yX26>t=9Z4MUJ]6yf' );
define( 'NONCE_KEY',         ' 20k-eRDfkwp4S<^thd;w:Ri&|b$}neK4#Dy5<.k};P$+p>$j2[V|4#trCKpJ&jo' );
define( 'AUTH_SALT',         'dN-J%;xj3e#@tmO:Lqcb:{+1}w2M~$0>8)Yf<lH5s75@MCm,ps1[FX={csN-*Sa~' );
define( 'SECURE_AUTH_SALT',  'tre;qj5uOK!,hKR^ZJQ+Va3d rYVK5jcn~QXO/{SVMAvw1daJ,!]-B(8lHC4]J36' );
define( 'LOGGED_IN_SALT',    'dBUH2bf~.W |V.zNV$Ln}1k0L~+9T~m-bg/Qx0zpe[x?$TM9E_1zC&zH1c|)Jb%*' );
define( 'NONCE_SALT',        '#.PAc3TZ1`Upu.0{aYK~{6v4oWqyz 4zxr~z_o67v.HpE-;_4s3bntB)PCPfN!#r' );
define( 'WP_CACHE_KEY_SALT', ':ABnNgd*w$QJ5VyUtR,C`T,iK| 7i!7,LXHEl,T!^W?Pq/v+6U3.K8.VtQqF9)`:' );


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
