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
define( 'DB_NAME', 'healthmart' );

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
define( 'AUTH_KEY',         '8hVlyXL9#<m1ECfr/VEogUXEq::W+=**HV5 S3qn&%u~7v2{XRjp`q%V%bQqMR9S' );
define( 'SECURE_AUTH_KEY',  '&. z*STNY!jFAQe?hB~8Zt([ZB+1@4]O6G156u.g^>K&}f9FfD3u2^[WtX}r-[sC' );
define( 'LOGGED_IN_KEY',    'M&<%]m/`qEWX97mEY)>IT/1qLK3Cjc6rZqNn. x7UiN*GN}^t4m1qP9{1_i[_/8V' );
define( 'NONCE_KEY',        'X-!Kj#ix?X<]fVg:s~K0dC23.V~%z*!S~WHH~D}smwA>MPZ&e{hI7O@W0RbJjTv5' );
define( 'AUTH_SALT',        'i`h}R#)^#iJ1c0]P)/*@:[ G?pZQ3Xr^q{:>IZ7[2*o>T8Jj~!_,5wY)6wxIke2G' );
define( 'SECURE_AUTH_SALT', '4{LRiB%X6sc-r3zr,tV,M_l]!%tk*?zDa?Xv^SWj)z>5HUMcs^8oY&,SyPXw}4@X' );
define( 'LOGGED_IN_SALT',   '=qeKC8mg.CT0s{./>T<fMy%HjZ f7>BWUw^WK.M28o]jb21%:is-%QWzF$5b=E#X' );
define( 'NONCE_SALT',       '/hdnDqZ8#bO^k]8Pvjd|mPRM`rgAeZ:)~[{]Ym8<4:qi+I53u [Qh.2e[*Z3 2.@' );

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
