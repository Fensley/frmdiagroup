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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}


define('AUTH_KEY',         '3W5tuHtzh6gjvrU1hxcYRo3aeAftUwzcpm/mof6LY8BQkfQCLY8zl+GfLHGZ6i9jRUCyU5LQp9cplJyj9pkWSg==');
define('SECURE_AUTH_KEY',  'dOKm4atpAwYhcj3yswCGZtNk55N8DgVLiVw2VqMhAgO6GRYBje87mWNUW3rSl1XGUtksWKYEuVk6XNXWqSQUig==');
define('LOGGED_IN_KEY',    'j4BG8+8DRkh0iIuH9c05lWIdMSrTsiXEAuO847jB4NUg9PJK/s0P3QfEKL4I296BWRJA1cmeYHtd2imGuBoXag==');
define('NONCE_KEY',        'uocXXPVd6apDH6iKk5K659tXB804xKmueTsmFGIybZy7KKUZZP/x3bGg270SQg2/VemZ7xt/xGPUxC+gvZGNHQ==');
define('AUTH_SALT',        'WnbOtxUGnfYB9egmWC4cuGtfMfLH8mOT19j5822IDwd2RHQm9VnEChaEggHPz92T6dtgIJgto0E00JOhVN7Zqw==');
define('SECURE_AUTH_SALT', '6nA7IXaNj5KqSMLizb/4DJ6SL4B7myU8wRWie0uXcmZ0ei57g+5w9fMck26Avjnpo+1vMBHmp/EX12Ovx1x7jw==');
define('LOGGED_IN_SALT',   '470DEsH1K6H4F34Hd5pTlvHYhPlL0xApVByuGAtk5JebkY2V+HmZuLolnytc7BEGKs6kzqYCA3izqefG4q/2Og==');
define('NONCE_SALT',       'o9O6u2sOGQct4lmfC1/eX3SgPCltDOe1HZyXNHVvjkoAiBih9azUtiGWw2IqACjCVyN6+aaCn02+DNXfEfa0Tw==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
