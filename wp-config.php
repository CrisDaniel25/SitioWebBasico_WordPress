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
define( 'DB_NAME', 'template' );

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
define( 'AUTH_KEY',         'E~kvv@Pq%0U%msDc!H6KM.YO&5^,oWUf:o~2,yY-d=q]v;Npl+mrN2/t5)zoLk&2' );
define( 'SECURE_AUTH_KEY',  '~,4>X37&J[IDpME2,Y)L.(*hw4G>w_mIqhk.qa]))r}O;H71^iPX5{,uHK^,e67Z' );
define( 'LOGGED_IN_KEY',    '.>R?row>-NIBNp#zZe57?&B(JFw,@(qYm3 ed`XEb8RwP;M+_a|vjrk;ZaL$(^p6' );
define( 'NONCE_KEY',        'SRD;u50HZ,~RK:}2m-ndWh_wx$[nF/rt_uST@G*^R<DgbzI@Z:0h,KiR-37!17wt' );
define( 'AUTH_SALT',        'n6!bzWE7+3Y7F2=qTY^kT|-&@(!=VhZM(6`E[|a/{j9Dq88Nu?L~ML,I{t0<QOPD' );
define( 'SECURE_AUTH_SALT', 'RgB4mF=>FX0{![[{3sk2#>6~]{vt[Q>7!)?*:-dUtLdN($Qslr]Th@=K&8prB+2R' );
define( 'LOGGED_IN_SALT',   'O7R{5ZsPnFDrMBc!#R(v0]z`*GE6]LA_t{tYBD|lSoUFEu`4Np5bkU]5WpX=FjS5' );
define( 'NONCE_SALT',       'e;7,&xQ@*+T>g!6-tl3bdz=7Zq]P[hZ|oV-*rl$PdJ.^{|7S43)f!FVpR1DvQbAt' );

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
