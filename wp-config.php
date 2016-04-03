<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'dev_wp_lf_4_4_1');

/** MySQL database username */
define('DB_USER', 'lucinda_wp1');

/** MySQL database password */
define('DB_PASSWORD', 'lucinda1');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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

define('FS_METHOD','direct');
define('AUTH_KEY',         'eFwgYHZldpg1aHXlYPwiQxfNhJFxsBr82SCRZ5gzTAWfOCHOnKsCqvYyNQ6fRemT');
define('SECURE_AUTH_KEY',  'WT7P1aIk5l9A9pfLPnN5OpGxxQujYdGW0OrXTLbapoW0eDQf89YZa7onQlF0L6u8');
define('LOGGED_IN_KEY',    'IEXm4XllRrmp9CdjwBsLFz4WqwYFX6I4Y6jDniOYyUxxGyL5u07NfVzKvbTgQNK0');
define('NONCE_KEY',        'iMkPD1xfFQTep7BON5oV8FTolKUSNAuP1vpE7MLJJxlJVGtVIRWxVAnb3BMWri6N');
define('AUTH_SALT',        'w1btMc4EdnwCGBXH2pWQbiWtsWCyA590uT0KzGG2yb72ndYrWVIJj6iC4dbZ1ym9');
define('SECURE_AUTH_SALT', 'vf7hCFqHhz6ELdI2yg8CQB7jhVWJ5xQ66mx1nlGl25uKsaSkJE7HGgVlq1kwQZUB');
define('LOGGED_IN_SALT',   'bChzSvJc6cGvG7spPEr8yKlQVPymaWlmwxNeWCBaGQny8NQbAbzEaUnx2Dzf6UOv');
define('NONCE_SALT',       'OAJGA5CfC89o3wxqfXOpYjCDHUREOYDeRn1io0os4za1samHNZMyGAEZLI6dlDFM');
define('WP_TEMP_DIR',      '/home2/lucinda/public_html/wp-content/uploads');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
