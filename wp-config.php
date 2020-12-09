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
define( 'DB_NAME', 'curso-wp' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'oGdF(]C?:=(pz/yz1y<A><i%^Dpibt,5*fb;~;fvv|$)k_&Hxod-l7(qk7OSn5k%' );
define( 'SECURE_AUTH_KEY',  'z7qv5K4B-)VD#9KH:Rh6wlcjz=>bhEYI&OB50e}Zi<]>O`&+bj%N7^~t58y-Ka1[' );
define( 'LOGGED_IN_KEY',    '1g^hrMJY:u+g~~emb|Tltt(UfcU pB(t>z@TH8U..VLQ*d`HmH)8%^I9XhM,TJst' );
define( 'NONCE_KEY',        '$^3~/}]r2m~VssD( -hI@v3~IO9M1~$&>u0&^@l(,R]Ft6{)uC%#/ZvjsL]IG{->' );
define( 'AUTH_SALT',        ']$]x1csN&}FX;]=YUw Wy-o0EO37{]mo:YC4hNH`nhE?z4Iq2,cRD@+QcjF/75DP' );
define( 'SECURE_AUTH_SALT', 'M 4Q:w fDXIb6im)B^(WaK6fCyeoc1Xyz?<^}4|F`I7=mHmB<ryh7R+=H?([}wF~' );
define( 'LOGGED_IN_SALT',   ')y5[liB$b*ezr8Ehg^RJH!:O?$T4<S!j:St!T6KbUOj|`-~#2ZpMk;Kgu-W_K[0d' );
define( 'NONCE_SALT',       'tYn5-6s~:=ho;KxK%%Q7ZyCOwm[lAJxEnmqt.<[FPEpNN9}eNW?ycz?9tXp7MN|s' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpcursoemvideo_';

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
