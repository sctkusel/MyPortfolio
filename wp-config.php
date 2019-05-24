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
define( 'DB_NAME', 'myportfolio' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '2WY=TeFQw>$W2K*#JVy{hh00!2YXzkM7; K<h[wjZxSPCQ^AY#$tX@eGpd3)h!,x' );
define( 'SECURE_AUTH_KEY',  '2[?L23rkPelM;9;7PPNSF_!SO{Bnrk.I*{iFsdWZSu_8l7F^zTp[U<vkgZU{kRgc' );
define( 'LOGGED_IN_KEY',    'JWAz&G9Ox5/38Ms0#}hRS=/)4b^H&zPoyg-SCP2*U!#qGh A%`Z2gZ*uURA[5k*q' );
define( 'NONCE_KEY',        '[j=V9^XA63;`b`urk9mc~#Y2<!Za_DaZ3O|gTajx[@vmRUaPbJ:C1dNY2Uf1^WSX' );
define( 'AUTH_SALT',        'TNXa9(^+gXu8GtN7n/?TrA]|.IayWm(9)3cI&j?)Yeb[}aRKXrmpr*$#AVw7NAdJ' );
define( 'SECURE_AUTH_SALT', 'Jta9x+vX:0=M{?!GnmJ0JB*7rku-yL%ez{6-SG;; QFCg6{7FdI_:tPbG|#C]9&t' );
define( 'LOGGED_IN_SALT',   'qu1t-JHg9$bm$W+I=YcgeMgXm{nff7{mPL{ AblW[wYd3j =(E03bdCoQJU5iGIv' );
define( 'NONCE_SALT',       'CN;#A2a#Up0Qx,VC>gV38}N:v}L?pcR#xQdx^#S B|[f+,oG?;?n2t^5Z_ZxEZt#' );

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
