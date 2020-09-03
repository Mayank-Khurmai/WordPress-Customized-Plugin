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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'Ai r{UXf}98[37$y]fhiCI?7dVT=5A{H-:b]5&q}>(a2GB5dtrr.;78H}d%W33mV' );
define( 'SECURE_AUTH_KEY',  'gSA>Y^?1f%uKZ[=I}m<!N.Fa0hW%Yt74FIDi{;J1d(gv(wM?bhx;PsdqikBK>o){' );
define( 'LOGGED_IN_KEY',    'HpXCVNy*JLv7sn0ilz f6gA)TtcWnrfA1ceBUsoOE!YCNZ-i2}#kxl^ @PMBN=K*' );
define( 'NONCE_KEY',        'Sx0d9u,eH+a@WU_Gt7UZByRB)i@s}c2pyp#&&77R5,<ndm)vki:txq9+GaA9et;C' );
define( 'AUTH_SALT',        'f:o2VMK<KPUwUl[n0J!5!B1~Sko<47)ty4eaAGF6qy[9R(7)Qu+j~shIpjl*D&#N' );
define( 'SECURE_AUTH_SALT', 'b5SbCcA]w7.@*oNy(jm/bki`/`N38>+Opoouic=}tCPMl^r}rV]@65W-BYOak)il' );
define( 'LOGGED_IN_SALT',   '/4c;W0!VFvVXA0*T(5vA25#tMu#i=l.[(syw!&V2@Lb^)3-3RGP<:7$TI(?+5j1c' );
define( 'NONCE_SALT',       'Uuqg2R^p(hrr`ZU=fT(*>vw3r*2^~Dq~MNsBh9K,pI+|0l,4hZk{[V>%PVQ%in!]' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
