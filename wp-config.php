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
define('DB_NAME', 'wp422');

/** MySQL database username */
define('DB_USER', 'wp422');

/** MySQL database password */
define('DB_PASSWORD', 'P9yS7f!3(g');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'ycogdf0umca8pcttnlacucxdkwdngukejib8orp6eyl1wpucw7fhtuchxkwvrhr2');
define('SECURE_AUTH_KEY',  'zqcmr1jdrueorbpx2utl2olmcaxgvtk9v9qzytkiluczfo41eg0ixniug1h4ftjp');
define('LOGGED_IN_KEY',    'e0taa3a4yczahekftndbr0sr7jvxfei8rfnangaf4k149wvniwrrvjyi2gm2m8co');
define('NONCE_KEY',        '3rxdrzhecoozykf5slpxwdoihgrq512wlhrusymvjivzqtfqftzcno3qtg5jggk7');
define('AUTH_SALT',        'g4yd3dda3fgijqxah6ttqa1pfklofibqcjj2jfr0atlmjde4ggf1rhz8ln6le3li');
define('SECURE_AUTH_SALT', 'qihbt7bmllmirpsb8gu9ddtw9fhuqakshyj24qxwdgngxcokcdauminvdelqj7ch');
define('LOGGED_IN_SALT',   '4iijj1mqcb5eo6abz0pujzdrypsux10rgj5cw6h5qm7wjc3bjzeobxzgwcetg4co');
define('NONCE_SALT',       '184jfltfrcb3pahywwdfl6ceulwiizczzp0qmmjy4harqk6cspp3cwajgxuxq7zt');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'spglwf_';

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
