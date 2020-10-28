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
define( 'DB_NAME', 'wp-project' );

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
define( 'AUTH_KEY',         'QR-X&.p,f|*]!&@00<(D=#C>FdY=<u-s4p178f ioG;gW1*NodE>^u#CD$MpJrg8' );
define( 'SECURE_AUTH_KEY',  'p^pf[IL^5u?xu_M$W]N+qR~bb:}(#TR)(C9Ps~f81Gvq-}e}jrQ%rJ(Qp]C15eU7' );
define( 'LOGGED_IN_KEY',    'rwf%q ieP|sOH$HCI5Q]Rq3k>lj:r#{A|SZFo *i^s91;7b=n&3[H,0o9qZ8x*0I' );
define( 'NONCE_KEY',        '4uelRqEae:B34nsl{:|x:r<#O9asxSrlilR9ay^7~]QqL6O^HhMRxY4,%M@jyUG@' );
define( 'AUTH_SALT',        '~F3uSkviDgc8_z }G;L.:n >GwpWso$W(?S*QMlpc@,krT#CuoFqVbNNbjs4)BH{' );
define( 'SECURE_AUTH_SALT', 'R{izFJ.Dr Kz 4/5{IxsWx1WQe]=7IQy5(zq^Rkp5`%=6!eCt%,sI`^3a0j1bI/-' );
define( 'LOGGED_IN_SALT',   '@8%#KSJfVjqL%_=j2]WkCa6J,8T0gFZ(2Ncp|jJ+T{>rydnGI& -uy:Dy}mg!OAd' );
define( 'NONCE_SALT',       '90hc`v=%gr&A#g[w)(dmWK/&B`C-/hM@Y7JSZbwCFl6XI~eF$Phxom3K%H9:%#q%' );

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
