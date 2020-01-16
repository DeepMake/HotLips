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
define( 'DB_NAME', 'hotlips_db' );

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
define( 'AUTH_KEY',         'WIlP~nG38oFm<)mDvX4m8DUs*{EDAjr <pvA!]9vr%OL`x?|frCgzse<Gq4vB)tC' );
define( 'SECURE_AUTH_KEY',  'J{@WQ( s8=O+qm.~M<F5qg>R0R4Es}LN.dHnPw 0(B=y^l}<D8QXAFlCY6aXA7ve' );
define( 'LOGGED_IN_KEY',    'q&Z(!$#6+LjqrSq9rcTSQ0yz_wv>p9S-;w5gE0AQV!iSKT#3ZFO*KG{D{{m|PXR+' );
define( 'NONCE_KEY',        'YlzKLr#OIv79su12IuctuWLE-uP= t4{[MfuRMQzHqmpMC.R4gyc`A_F(8Z|%d}s' );
define( 'AUTH_SALT',        'SpfHDdbHQGBYxine~ddwpwpf:b%NC~eN$n$p7wiG4lmZEp+i8q~|?x?07&~,&_{G' );
define( 'SECURE_AUTH_SALT', 'yFAex!QCp{i33[4K~HEDw*plYnTH1%8_QyMe09lF!EQP@IsT~m#Z*S#S9o0d4XqL' );
define( 'LOGGED_IN_SALT',   '0M+VOe:}F+AG.Rj@.&*_>]CXY]nh?hNTrb.=28![B7t}%aM[;@kkN0B;2xZ7}&<^' );
define( 'NONCE_SALT',       'mVa>*A5A/~H#*kmsnO9*PL^L_}ETPCWT)qeY$&9XMJg6ppB{>`SCSY6BSVN};AXY' );

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
