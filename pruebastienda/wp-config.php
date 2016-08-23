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
define('DB_NAME', 'pruebasluisa');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '}Bg_JXYjUFn)}p^rg:PS[$!bxmoOdd@sq^[5G_+~gaf#C=iK38<rVxNP6n-)4NYt');
define('SECURE_AUTH_KEY',  'R?5(mZyClKmJ@Ro4XOr,VpqSL$&$M1a!VrXR(Ka6Q#b1 _}kq>dFbfq@3DJ]ANV!');
define('LOGGED_IN_KEY',    '!le}O1DK>6I0+ fU!8HS}%RVyU6Y|BDEZ3HY -IP(O459?3$8F!br4^fw2FM6<A&');
define('NONCE_KEY',        '=H$rZ*lE/<xOgb q~#w%:v[kX9ZoOjv_VDHJ;euj,]iNJV^lxT.$JtI>_|u]6J0%');
define('AUTH_SALT',        'l=bDg?&PAFMNba^vyE71`9472B%0i%NFD^$NqWg9iFW5u.aVE%NQqVHh^vPp#v[6');
define('SECURE_AUTH_SALT', 'V#m-&)nD T_Cmso[8`Ti3{#h?Hz{tA8DYpa-*>IhFw!M0(]nLVi7#(qCz8&m^-85');
define('LOGGED_IN_SALT',   'w(p*bJl1~C}A<2=d#Ql>jE5tBnf^Z_<;mU-;fvD eej-.ci#Ss@Y39,Kwf~+RUo0');
define('NONCE_SALT',       '6T7V#NI{/8a*d@I`xm,$ VO&F)D!5vS9D4{6$GC%TB{EIE<@wwKhdH7JF]GAV_xi');

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
