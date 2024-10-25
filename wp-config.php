<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'rajshahi_wp623' );

/** Database username */
define( 'DB_USER', 'rajshahi_wp623' );

/** Database password */
define( 'DB_PASSWORD', 'kpb9[2-S79' );

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
define( 'AUTH_KEY',         'aw3tsiact2ym66ptoxyg3klgqminmfcf7qgwvrmyy5irsnn9vkcmyhrkbhvv1ade' );
define( 'SECURE_AUTH_KEY',  'rqqhn8wntxm5mn3eeshpuwbpkzjwbu4u4zwkonketyz8yiujrgrzu4dhbxso2kb2' );
define( 'LOGGED_IN_KEY',    'y6mrzgbaxojnodjxojvs0qyuqtocqes9zmgwmyp0uoxadzaioewgz2rsta2dmwg8' );
define( 'NONCE_KEY',        '7c45wwwovhsf15ilvaic0943sqevn5evgenpasuws4h2iczozxaumm4keuggu4zm' );
define( 'AUTH_SALT',        'wivduyqtuhat2qfqotea8zrvtpy0rgyfhpd0w1oy8bn4hafltpnhidevx5mglyyo' );
define( 'SECURE_AUTH_SALT', 'somjii3qgn9dhlhbep6bx0rteqlaj9rrpv245oh48jqigzwesxglepnuijxyxcxn' );
define( 'LOGGED_IN_SALT',   'hyygmqu0lktqr3tvnrs4dkmoa65beg1zdkrdawopkbmiulby4ydlambmhvouhmla' );
define( 'NONCE_SALT',       'e6eynyekaix9mfjaq4tyrs4xjwufwjg9msukdfjbx18fsem75jdtxwvcgmuwrbn0' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp3t_';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
