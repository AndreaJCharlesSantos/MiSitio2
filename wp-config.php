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
define( 'DB_NAME', 'wp-blog-2019' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'a1d41cf0a91c9fd0d5465678477497ef60a3c9eb3229cec9' );

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
define( 'AUTH_KEY',         '/8p_jZ(X_Bu{BX}KI7LQqaJ.3?5X67.b?$DixXffQTHEn2Sfvi)PiO$f [?P3Erh' );
define( 'SECURE_AUTH_KEY',  'xfv(pk}]*c&5ynN-T+Ak]IQlgo<Af,9~Z:^c9[JSstRe_5kl;fJjtR)1j3Nex;}L' );
define( 'LOGGED_IN_KEY',    'P: %;[2*W-w/F/42ID]Kul(`Xk6QTppbf{nrdeU!A4|]j_7z >3?7;ITYgz&GvF6' );
define( 'NONCE_KEY',        'wKz2Cs<VsiFvz0%9f2DYF^WpXjM3pkAvw_({<jx9vs*NIcz+.(j]H;}UT6!|_IW,' );
define( 'AUTH_SALT',        '/=7x`^uam!x<#5@54;2r.-%hfr gD9i/lO1Db4)?,%]Jcv [3@h~v=B71|=Req0<' );
define( 'SECURE_AUTH_SALT', 'emUw){}N[=9N@_BgPjLaj|nt1{oTzuwI56^})R!W4kAZ:hA^L1#gr%!39tMRJ}Ou' );
define( 'LOGGED_IN_SALT',   'Gx9y7mQ3iWc^TcwKV}K `DL8#u5]qJR[0}&pmX0&4FISJ70fb y,44YoKJbm;tN/' );
define( 'NONCE_SALT',       'k]}+@2/@X:Ba2ar`F#/]9$kt2>u/0^+6Fdxk3A@sgX  BLxoOgE2+qoetEJvy0)A' );

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
