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
define( 'DB_NAME', 'Togo-Voyage' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '9NWT599OeBhtVc07VS0Wn3qFNNSOiaQtdwwaMaSeD85peYpsjTmV9NgngmKPPBI2' );
define( 'SECURE_AUTH_KEY',  'eWUxsuBzrWLjXGm22Rj1xoYiwKefhrKYbP8l6D38qaNmpfx4dobTJy1tiAehRo9k' );
define( 'LOGGED_IN_KEY',    'MaKVGbUyGsaq8dmI1vvp53Vwggyh76EpJp3eicIPaM927LTtgCkjUMkbT3zuxaBk' );
define( 'NONCE_KEY',        'jnzjTSdwVZzxiKmp1aGOBGSJZLRiVIxRgZY8vLoxUpuGMggUiPtJ62FTvtUIdW5k' );
define( 'AUTH_SALT',        'xRUeSO59lXCLp7vPUL4mmxMMogl4IN8gTfnlpZjUITiVDBTYXJTAje0ovrSjZD30' );
define( 'SECURE_AUTH_SALT', 'SOgn4GsmVTQMP8m80A51z2rphbbyRvHPKYo9u2PDwrERJe0orbgThwHYfGHiPuaQ' );
define( 'LOGGED_IN_SALT',   'zhFCN3VRRIm10KtRejrUdX2Gw7mxY8EjM4nDYpOGqIWWavY6a2a6nMy9MYM3R0ic' );
define( 'NONCE_SALT',       'yFcelu2wzqPwKmegXG6kuN4hWTzbD6f8kXGfnanXhLfS1cD3kj9muGy9GiCB8bx7' );

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
