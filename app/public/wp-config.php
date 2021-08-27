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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'EMuSC5KxZekOwdSQVelK7fdZe+H9m6k5nJKKW8aG7Rw9ma9SyP/jUE0HiLJF+qvCorwpYgQIQU3fFRhaiUQ7Kg==');
define('SECURE_AUTH_KEY',  'qzuOm9wcRFOdCaHz5wHn4UWjHkcKhEu2xtwyT47k4YJ+3Oc4Pp3NbLLOCiGrynXhUpH08BEZ0EZeug5e7w/UuQ==');
define('LOGGED_IN_KEY',    'itxxANQaKx4B8VjbEHYGmz7YX4vw4+K/W3eZTRTsO7c9mk4xAMI/M4npyZd0FrhvKooaijTkeVBevMqwETfE/w==');
define('NONCE_KEY',        'UhXJmj7gTH255w9Z/QKSdBJMXeXGxDCeAxG8Uaxdzkn69oIHz+wafB0e54MoPG0FcfEBiuiSm8wN2L7SVKqSuw==');
define('AUTH_SALT',        '+mTcJb0xo0LyZmLCLGA044OKt2QSWqJE6QEzHkBhM7W878U//OUMwMSVUbfjt659tCEyAOUjZdwbgXkgUiJUXQ==');
define('SECURE_AUTH_SALT', 'T2XZuvwQIK9PG2Kg3YNGxRyBI/eCubWr6Ut2KojtZ52RoX85opuIoEe63/A55uLKkqymXAPb47LjSdHVblSKoQ==');
define('LOGGED_IN_SALT',   'L4TGdAZH+EW/KgZkR09WMadZlQknoKn09TtrRwuz158j3tlrtoNqQXVZkLqaeU1l63JBzPh8r5CTkqow2J8MHQ==');
define('NONCE_SALT',       'a7FRBxR9Cs/II+pnZ+NHe0zQSIjxNS8EsCGWg92R9EelXN/h/zDimsHx8ql0WovG0hWnH3ia3HlvmeFoD+kmCg==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
