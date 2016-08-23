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
define('DB_NAME', 'luisapostres');

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
define('AUTH_KEY',         'whAek/XdJnslj&9K_;B#`n&QiycX?Kej;1 Z- qDJu~n8pXiXW6&j~nyy*F%_-H=');
define('SECURE_AUTH_KEY',  '}otaXh-5@f>*!~D0kpk-yl_)o{UY?Z5ts* 5^ Vc|~te!qPhWthZRRT/Iri^T(j<');
define('LOGGED_IN_KEY',    '&*/M,2KY%2#4Hb`F]%^>YrWaBDWt6D^BP:uCCItS(.o6Q~;~WYiG:<`GiK+JInGT');
define('NONCE_KEY',        'o@S^0Y1<AK*njcrq9I<13pFUdobrlKAK^/Z8]?0AiO({x)bU1GQo]Ke}ElonSu]F');
define('AUTH_SALT',        'yL4bCNDPyAK#.+PX)qyq0}Wn0]|9y,{-?W=+S$_sbJAnMv;.YU_Ym2@e=Hj+,}U(');
define('SECURE_AUTH_SALT', '`00yrzZk}SRy,Y4tvad@BKuj|!#[hRAOBDc(ekHv$Sm0@q`u%<QT.9&.&0wa=Skp');
define('LOGGED_IN_SALT',   'kh/io30<$dXrt/%c5B&ax`Dd;g+z6>#PZ<JE*Fh}&gl$b0qah()P_&QQj`?3{&J*');
define('NONCE_SALT',       '6,lOI:_%N]:@D:BEwG,BYsGdk VKr0l!xxC$h1b&J=iKe8aIf%d-?4:~npFh17|R');

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
