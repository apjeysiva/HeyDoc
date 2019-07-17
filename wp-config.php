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
define( 'DB_NAME', 'heydoc' );

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
define( 'AUTH_KEY',         '+qpU^dTQ*k7b5h]z)0=PD@UCekC&f.yslwWU8P|7wiAQlLHbH7tE^M:!mriH[|NV' );
define( 'SECURE_AUTH_KEY',  '=/L,fJ3hRmw~z(ukO;^DA6<#Yn};}>UIyB%X+HS4wvO`d4A^B(MfY:Pt&#eF8h)>' );
define( 'LOGGED_IN_KEY',    '}??::@w%6ePz.^`]*qGxo>#<ED0{]6Y,_vT1o?84y(?*J14#/KWbw}&lH{[+6y~,' );
define( 'NONCE_KEY',        ']!>B]gYhgA.~fc+guOGV~6?#!~;1cfo7R?=bx%kT@i=>u>:B4K0;&[z8L?DFYij+' );
define( 'AUTH_SALT',        '!:=Rv4rV5&lW0^lmGf=?El#Hp!V%do%:ReFG/ckh-.19]v4Z*Gj%15b+fp>;W6uX' );
define( 'SECURE_AUTH_SALT', 'cpqE,nY<K-q/3w_6#|D+1ENkI!6da8K/G(Gs*uVduE#B%]{%)_:D%^{MX6*tH3qY' );
define( 'LOGGED_IN_SALT',   'mx|^hI;QM_7/MUO6Op8v^K;|d5rQx^v9T&VJXF3Jgou0,RcZ2+Fin9KNyto[&9 C' );
define( 'NONCE_SALT',       'kd62i[,@Ri-|Tp3{cp;g_q-;9GEN$GO4bDNj(B?V#r-stkxR8XPtYL1=dggtndO(' );

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
