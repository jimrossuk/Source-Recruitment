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
define('AUTH_KEY',         'LuLELt2Ht5NKxZh0f0oVDi21obdYTg4Ultaux1GL2kJYLLE6segOTYAgLdDNWDXUz5TX3pW/vnNk5xm84FadVw==');
define('SECURE_AUTH_KEY',  'xHD9jiSVb+LvuaTlMxXCGeV5WssvvCCrFyap6ZwbiH0KfC3EywIqFh5NzYLm9lPoyLDA+NCntKU1gkkKo7phUA==');
define('LOGGED_IN_KEY',    '2EDSLxXUz5k+ASK6xg+jRZGQ9Yk6HVpo//R3GfICZ6Uiz1WbVfTEh08Kr15jN8DrWPZ/6j6XwyciZJsibTB+Cw==');
define('NONCE_KEY',        'Ej/K0ah4kk9BBNS9DFGDr2Hh6Y62CQezszOHW/Kd/qC/pyCONx5UAfLHdvJAGB8zC4cGsVa0cB3wJ8U8tEsB6A==');
define('AUTH_SALT',        '/iWaarfYuONklNSj4gDRh1TxGbwzA0/INpAjmu1EOqGdKQwNpVPx5HmUHzh2T1VVJ1bWQa8Sdd4GdukR1jt07g==');
define('SECURE_AUTH_SALT', '+z5uZzZkAtbT4hFXsuDuK5hs+NrUH8tW3L8VjP2Kb2ve7e5yzd3J+dgr2O7wDhJ/PGPduOHT3XY5wXRLdw8CIg==');
define('LOGGED_IN_SALT',   '5UBk6A1EtQW1Gzkpf51MlKJoLaYo5X2RQTpI6ZK8k2rHlJvV0PEluBd66AcChhn9eanPUQ27LprKbZUDnaIJqw==');
define('NONCE_SALT',       'TGDZhNeJsAyLGuYIADcsvUNO+3GOfZQevOuqhGqVUswLomYiaWM8dWA5jS/FwLVZJu3gwrNRjaQyMbUzA+nQ2A==');

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
