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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'PT +JaaGv5m.[P>ud,vpE:4A#KUC^t|%rONCfI,To4KL_HYhLU)wP,h&dj9/X9YA' );
define( 'SECURE_AUTH_KEY',  '7=o[f_+V|5u#QR<`R(ti}B4`=]ckFd:yKIKRZ-hy}WReR`~`LL>pvs#9~|R.]vF@' );
define( 'LOGGED_IN_KEY',    'k 4{]ns|pc|wq(#q#_34k:k%toFTpolaQW=5}-g|R;-P)>/CSbB|vPmVr_kYts0E' );
define( 'NONCE_KEY',        '5%d$Z=K5pftetHPtv^-swZsgj.B?#P}2IcJ2F<;1(1;8O50^Aw<G*l#alwN!HP{v' );
define( 'AUTH_SALT',        '[bF.{H)_HBssK]g~v8xN~$0]PP{A,|R>U7Kf,F{hdhG8o7Lu048qY>AP2Q#,}q]|' );
define( 'SECURE_AUTH_SALT', 'L@v%=zfvg:IMLg1s-0ebnaA3OZYH/:<O-)6[143rM^Ss(myf.dHg^4,157Ur1VDj' );
define( 'LOGGED_IN_SALT',   'T),{)94X/UVVo|h}+ZTNgs/FpfyAC70}T/;EOuMTutAS[+shopw21!7CANL{w~Pe' );
define( 'NONCE_SALT',       'NK4luG?1n5ybqIzSnwu)}`g4{*E~h6{@(L8 sS/EX%5@84=rLfk_X?-fsdy~OI$e' );

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
