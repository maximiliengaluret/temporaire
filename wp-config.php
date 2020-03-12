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
define( 'DB_NAME', '2020_maximilien' );

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
define( 'AUTH_KEY',         '&B;-sFP~p/~gQ23MW;^34d|29fZqbsBlE6sHQPls_4EYV0YCYS9@m5=D!V7Y||Xz' );
define( 'SECURE_AUTH_KEY',  '_4B3g</vIoY<8j#x=`?P;b b6|Kl{8t0qQ;GXo$_!N^>qA)6AhR1YF~z]s(Puht0' );
define( 'LOGGED_IN_KEY',    'ywl{w0#U*d]kde*ux+mSYT0;pSoA{y#J:#d`-I$r~3E%@B[FW;X#%_rUUnMk@sf}' );
define( 'NONCE_KEY',        'r_AIm$a{--1)&dW^p&b!6p;PBrFV;oe<fLT>3dDm<.>w8fVYOJBB=Mo[XURinx&<' );
define( 'AUTH_SALT',        'Tb;$Ocby5wK9t#wW:R4lx2U$BTfG<VeKY4aeY2feXI]N{wX]E}+H+6ya.mDUtD=S' );
define( 'SECURE_AUTH_SALT', '6JtV<N-wYsOp SMKhDDru.Tg_RW.aNb!M3`xkv%1kyY5]rxQt4uJ3:<-Pb#2JJec' );
define( 'LOGGED_IN_SALT',   'Oap>A!]RYfZ,89Kl?Ke3_iVrFnY.$128$V<iU3_Dk`nvYP5E6bGG7LO5jL4Bor{z' );
define( 'NONCE_SALT',       'Bo;y&fz/[HN[_=19-X~=YIEgt!+|%{!FVBL_i%$P?;meO.9UOa<(L8h/37zS9sS6' );

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
