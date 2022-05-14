<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
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
define( 'DB_NAME', 'rana' );

/** MySQL database username */
define( 'DB_USER', 'podder' );

/** MySQL database password */
define( 'DB_PASSWORD', 'oM7F2Ex4txMSBr07' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
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
define( 'AUTH_KEY',         '#:3u@42@_~aJ7o&xYJvP1-GeZ-[kvDT]B]_7-QZd>!>)/3?e:<`1;O/pUo[_[+Y4' );
define( 'SECURE_AUTH_KEY',  '1x[dFMDCxumrEe7JP=L*)ZkvC$&rfRDy#pFKOlDOW<Jct$?efoSRIu`h%zP;S]Dp' );
define( 'LOGGED_IN_KEY',    'bu^a.u/`}6:bfiy(A@5ur{P4Z1`>]C^x47a6W{02|#j*Lh{J;KszSb`g|+{@NeAx' );
define( 'NONCE_KEY',        ' nAWD=bs.Urp |o+X;KLq;;|Y*>i[1*PF&>^3|/,A<m7.025XO[zf-C$hBuImPTX' );
define( 'AUTH_SALT',        'z[l%4h9OPd1),?d^7__Rh+ZOZW3jO<LS{HUjNl35(D6YKid*NL[Ys|4[0_|z)^cI' );
define( 'SECURE_AUTH_SALT', '^#:(v4t%x}mGlf^gk`#S;U:Ne%sOK4X{ 1Hvzp8.hv.P}Kg z/Fp$jA)?!f;ge(R' );
define( 'LOGGED_IN_SALT',   'E6&w2@WJir7YARAZ)R hX5|tvaN.gfUaAolEo0B8PF/``/%M_[5/+OEmQDqgN@hN' );
define( 'NONCE_SALT',       'cibtR)7}Z^}U=MiB960T8ttRf3>&h1v}[+q`~JC~5{?8^>]<O:Y@?48X5.9`jbwi' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'rp_';

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
