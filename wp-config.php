<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ShopDb' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         'z `K9ZK&2vf_;mZ+){uMz<TZf+HvvKl8?/gO-a/G1i+Bh2vX5l%ZF`{?crX]$2b`' );
define( 'SECURE_AUTH_KEY',  '`:bT=lu]B-s{5dt@_4q:6$.`ubm{${+lJ`FLRMsIh`?,fEz]8SJoXW|_Enr+{Vlb' );
define( 'LOGGED_IN_KEY',    'jHeX7{1h,[py_>ql:/-#[YT{J3eN(_nshh+0x+ z.07L4[+9CL%zB{~ S~2la*1w' );
define( 'NONCE_KEY',        'wu_L#Ji9xE0p<&Mn]W}gcU%QS[BhW_vzs34a)}eGqoW5(uK)my8Ky6m9&yBEGux*' );
define( 'AUTH_SALT',        'm1Y%Jg3({}Xtm3%3.AVpLP3MU^+MvMIg/(rX!95H}&7fS6#a%m1%[P)],j|)E:+P' );
define( 'SECURE_AUTH_SALT', '83;8(DC34B~FF@1nS/V5,&C;VI?fffnuUOGWsQh-qGOL{P`i(uBObmB>Le|W3FLH' );
define( 'LOGGED_IN_SALT',   '?+b4r>tCx3~Hn4Dx(0M&EwKn? M!4zj/Uw!l&+A6W1<>=_Vuk m$|;:k)&2&L5>P' );
define( 'NONCE_SALT',       '1>^D4q{}7#K@)|_c<@8jLC#4b.-@VpbKWjt[|?K@0r}6>+vmIcO2Ce&<DZZ&3%]U' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
