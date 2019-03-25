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
define('DB_NAME', 'wordpress_ad8');

/** MySQL database username */
define('DB_USER', 'wordpress_188');

/** MySQL database password */
define('DB_PASSWORD', '35_Fz6KRre');

/** MySQL hostname */
define('DB_HOST', '50.62.209.41:3306');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'G#U4kuBt!uFMnN^YlM5lvZd&GzlMhfVR8^u948UYvtN)zGc1FyS(O4l7^vgDWTbA');
define('SECURE_AUTH_KEY',  '4ycI)CWZkTPPmZx0fhcyzCk)Ua5ymwCUKEWL%98zP&4Ok(Dd2BzDMb)URQ95VcrL');
define('LOGGED_IN_KEY',    'hmtccAJ^4hJ0OnKeqqM@vAjGGztxci9duj7bnqPzAGwpLU1%q1YL2NHQ9cjzQdA6');
define('NONCE_KEY',        'ks8mZaCOO(7lv^5QR6EZfgxR#zplYIH@d3KO#@4QMBUCQlR1e@F6QIb192GZ!&Bm');
define('AUTH_SALT',        '(YJkGFmbc&w#Lwwc(nPb)iwXifnSk)4h54TfmiiPH0UvXKyv(s4Jz4BtASvouzz&');
define('SECURE_AUTH_SALT', 'qiNjMG1eLGus4bEIXI0qFzWEbkauE*2yKQw!HS^Wowsv9Q3l!sWNzv#zJMV*F2xW');
define('LOGGED_IN_SALT',   'iwj4cd^Hb@Rxr6ahgmbTQp%rPpcFA(f1EwQ3yir)wsLc0M5Ko)icxsK6!kM!9sp7');
define('NONCE_SALT',       'dMWsgg@@j^)TPq3kE54tNCKO@xGSLmHmuw@jMD190ewb7fY(9UtXyhKxaep!YEi)');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'AG8BXzR_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

define( 'WP_ALLOW_MULTISITE', true );

define ('FS_METHOD', 'direct');
