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
define('DB_NAME', 'caressin_caresswp');

/** MySQL database username */
define('DB_USER', 'caressin_caress');

/** MySQL database password */
define('DB_PASSWORD', 'C@r3ss#indi@n@');

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
define('AUTH_KEY',         '[4g7Ux_k0dd4U<^d}iQ]ry/E^.>*F<nVk{SvHc%[@}>Fw7p`1&S!k]I|yA6)5R<i');
define('SECURE_AUTH_KEY',  '5}a.zf<ux/}`pP,Q:Fe:1UN4?sOQ}F.XT}[tko0i&Z6NJ>:9>XSq1oT//<7MUvb$');
define('LOGGED_IN_KEY',    'zCjEf<nreK9a-FeAe7 #GzMiKN*u(+[y{t HPc,)*7IQ)>xFdsTTXD,k9b{u(Gt ');
define('NONCE_KEY',        '$^%2XjRZAaNBhv-ewG2|~OXt<9bTlr2&aFdT2cRL)#lU{N7#ZGh6za<C>$5N*b7u');
define('AUTH_SALT',        'j4Zu|M/+,V-~RJ}bKD|KJ[[uxTRnA WZ1J#n-;3xhf6gbAg>J`#B(}c<sK$9a&UO');
define('SECURE_AUTH_SALT', '[vP>|rumS~k.:$[YF4a?=GF,6;`]9=+`Rh8V1KsS/18^ meP>xBsez@M1+6|uT@c');
define('LOGGED_IN_SALT',   's#heB7I8.c_t[$iciIb`Ng&>rC8VY&G:#wl!75S<G;NG6,{2ed!!~ ?YvNA:<cc2');
define('NONCE_SALT',       'q|?!ade1d1h4S!Dm:4gH[dJsUmpWcLehaQ(%l(sPr4U*v@2CJZ4GrMj|@X2FUu9B');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
