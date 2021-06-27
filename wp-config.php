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
define('AUTH_KEY',         'lKDyOYnHtXRLVopo06trZfJhF57kxtH5lcMZ7aHZnyS8+2M5zj4u9NdQJ9YtCoRuWlVm12gM0JhGLkqWjqgN6Q==');
define('SECURE_AUTH_KEY',  'G2wJ9bqRGL8AoN0sQG0O1I2wASOBts4IOx36/SPy8Fn59Y2LuSp3Oqn0k/uANX+IijRQcpEczbWjIcDPCUFuQA==');
define('LOGGED_IN_KEY',    '1pXJmWjgxWOPy8Vl4qIEse/NSkKoRUZaUp2Hrtb7peZLXz0yueYMYDiSLNWC6cT5wwbSVWlP1/jc3jqncG5/rg==');
define('NONCE_KEY',        'NAmphNd5mI2+zougZQVtpUBt2wnLUBawkYRNmregYhEMxg7EUrTQUmtRKSFS+C8+kWaArLPSchuSzJdFewwXvw==');
define('AUTH_SALT',        'J2QIqGqvbpnG8ZrByFwa6NOUX7IgylOTCqANaBquXPopShHbNlAaLw2jscednV8maSacjQVRFQe6LkU3sV6S5w==');
define('SECURE_AUTH_SALT', '+bY4kYVS53kCAwtUemNDwsG/vDUU7LlohMQsS2wOyh2fBLs5jXiPvh6uYqGVjKBeingkozpQh2VdMgO5wkmnFg==');
define('LOGGED_IN_SALT',   'UosRzgbXka3+ULgbhw6p00ZYCA72aVFbe73sWJvBxcDOjVMRt6NC4Kjg19NpE2laaGgwXzsh5DxUGx+uaggmkQ==');
define('NONCE_SALT',       '4hqCXg3KFQuOGN1zDc633jP5DL1S0yYGVbR8vzCGudybh5e1B4HjINzA4ZdrRlPDB14gKz0O7ezhoa8LkJQuHA==');

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
