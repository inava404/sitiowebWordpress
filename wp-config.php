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
define( 'DB_NAME', 'P5_Wordpress' );

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
define( 'AUTH_KEY',         'e 9qDh]!^|glN;6GfYl:mt}M[1??8+:.!dECJ-VsZ^!h(uv^?ns-V|I^YJWdi+)n' );
define( 'SECURE_AUTH_KEY',  'H{&MHHRhbC+?~Ii{?d#;i5/mvZs2;5Mpaq[Kg&lxSCa0aO[*$>!~q.|#CY3vh*-B' );
define( 'LOGGED_IN_KEY',    'fz}THj-DN7C/z|0*}QH#$]]BkSl4>&8m55ct>LMasDFD22/<,9iw0UQ@^Ni:T;:R' );
define( 'NONCE_KEY',        'lkquiSbtc&86<n>u2VB)?,r9?5tFTAn+k+iR n$-B5(/@r8^}8:Z&7Cpa%v#-LGz' );
define( 'AUTH_SALT',        'y0ZP(Z}oEXj>-8e+*qK-v75Bm!dl30$#G/#_pvt=wBspBI&eY1N`kr$bYvo)1wsl' );
define( 'SECURE_AUTH_SALT', 'NnQ8_q{|TdO]i!|nkyK{v2oIHFB[D:3%b!LnL(GO)7Ug+r|SQi)tV!tu,Y+8zUL6' );
define( 'LOGGED_IN_SALT',   'uE|a^FS{tM?6V)74*#xmGk1WL>[(P7vSm7yORNmi(*r<iPFbMEb3DH?nf%m=-W|V' );
define( 'NONCE_SALT',       '-!)mnaq..#xbukZZ$bAL+-q~|b{i!HZ]Qmqm ;OU{;WN0/)==vpZ@5>)wV%o#wX-' );

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
