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
define( 'DB_NAME', 'mv_trenzas_wp' );
define( 'DB_USER', 'mv_trenzas_user' );
define( 'DB_PASSWORD', 'Passw0rd' );
define( 'DB_HOST', 'localhost' );
define( 'DB_CHARSET', 'utf8mb4' );
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
define( 'AUTH_KEY',         'u{z5BWL`,{-N?QR.ghQ+m9{LT6^-ldj),bmeIZLNoo*MQN1+v|JNdSw:/mRdtD0[' );
define( 'SECURE_AUTH_KEY',  'ouwUza$.Xn)q90QAg N8Ou3~pEBnB~sXJ$)(;,>F!k 044.2!buhA.I5B-9K2~(Q' );
define( 'LOGGED_IN_KEY',    '_a<.|IofdKm-6Y`ii>?9%Uv5IRL<TZ7OM!0&qbNr~0v3Fu2X#wn&>--LuMygs~#T' );
define( 'NONCE_KEY',        'Wz~?*FTe^C}Km%Pf_p1?KkfBx9kVxL<+bo4@93j/-<s8f;yj{=d`y*R1l;}He*_%' );
define( 'AUTH_SALT',        '{=Nup][H(y%@Dzn>D.V?[S,FOnO.N]6x8;^^}l5Nv1J/5$.Ma,NNq[T[[fkJ@CF4' );
define( 'SECURE_AUTH_SALT', '8NP=m$DNR+Q$MrN%,w|{n?;|Z]B#,Lq#[/mD!IuMb;arH^/[lvIu:E++J$/w/=n_' );
define( 'LOGGED_IN_SALT',   ']fq]`up7q$Ud$F1j8d.>*)Wx!*^o~lC|p4h[{d/Midc:S<`Dnjan/2v#)TJv/k{p' );
define( 'NONCE_SALT',       '<;# [3Br7%i6jIOR,NEc+~P3mIHaFZD;Xz-|iBvq%RXX,/f62LO/up%$`m~2>TD5' );

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
