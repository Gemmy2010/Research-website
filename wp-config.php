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
define( 'DB_NAME', 'ylsrzibv_research' );

/** MySQL database username */
define( 'DB_USER', 'ylsrzibv_reserve' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Raman@2020' );

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
define( 'AUTH_KEY',         ']8#xevV;ZLI<-[4,$s_wu4^.%rLgEpBXpH^jYb LgO8OF,+al.]AKXZ:C|)FCEUi' );
define( 'SECURE_AUTH_KEY',  'To>fF%1 #.Ybv]Yo&{?]Xb7/`.+DN.>6jCi{PJGV87UeBW27l>OA$:$A1=IV,,{u' );
define( 'LOGGED_IN_KEY',    'sFGm5AW7#3},X$,SvH$DRbkA}T`O7/OXQ?GrM~+(5; QU$%I:;Q+/Ul])fu/KzL1' );
define( 'NONCE_KEY',        '1d;32wb+>9xeRO:MFM9Z!OY0$DM[otF{VGG:XbWqELZWJ7.q,)_M1xbju.Wh4VE6' );
define( 'AUTH_SALT',        'JskyW-gB5Up#,35C,V!.fG~^$*rES)dRo4yfe#+WX{HG6;^32{^Q$?{2HkS)4 [3' );
define( 'SECURE_AUTH_SALT', '2F[bpt2^uU6~k@y. E$z2m7a*V{T$fLx~0{l$KyzZJ:mA|YcibFt_) JoR[N$c{G' );
define( 'LOGGED_IN_SALT',   'h6*FgkW _4<#2tFm?3,?)by^Off11uZPwm%ionIz}0<w<_pm8{hj3M/i+ZR|uB2&' );
define( 'NONCE_SALT',       '5|R>QA_@^5PMXi1wFO9#rc]6h,:4c#}eWQy0YrX>7DNH<v# _Eo=gQ@~O9c|Q_U,' );

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
