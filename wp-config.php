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
define( 'DB_NAME', 'hello' );

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
define( 'AUTH_KEY',         'VS;IC:-%X!etgRX%qqvF-j*= 7ou-,<}oun58LG1dCR%YfL,s^R&UHN2xgMwiDq~' );
define( 'SECURE_AUTH_KEY',  '#ST~5NpaW}1jT9z]/[xW~J?SD.;Wrlanl]eUg>g`1T=InZ|.rAjsa,6CU/N7u]n/' );
define( 'LOGGED_IN_KEY',    'S}Hy3.]9O7uAfK-}5nx/zC_6Uin:.>ivXLq*w9B.wQh5%z:Bq%Uvd.t[u=0~dR8~' );
define( 'NONCE_KEY',        '5-Y![s;kqR20t-D,l3:7zGwDu)qJXE<k:EY<+8,4c@f+CtRR9WV&P%;Id]L=:_sN' );
define( 'AUTH_SALT',        ';jk`3lknc)l+i$B=Y&MdY8:D9V/ROb,&^6uwd]Hd{xzie+y<il7Z~wtNQ~5X MU6' );
define( 'SECURE_AUTH_SALT', '#!]|*;cp|H!{z>IP2>&^mMM1L3X+%uwN?`6zU[ S+b|fy-S{Jei.t3#D=@=gmb/&' );
define( 'LOGGED_IN_SALT',   'c|QN3zA@c)zq`.r!jfEOll(C4F[F{Na$({4``9ShffYX<fj3.D8PgF9<f*m`fIK.' );
define( 'NONCE_SALT',       ' GGf3Kf0CkOt5; RU7nid5We.uN&_OK6LO@)n=&&{Co{ksc:]:TGS0.yNW87~}*a' );

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
