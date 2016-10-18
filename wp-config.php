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
define('DB_NAME', 'blog_hs_wp');

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
define('AUTH_KEY',         '9HP%D,<e.9U12:X#D;Kw`V=MzY&!ZsPE/8z06KdJo5zC&O34Ifw3Jo<*o{=T6s(s');
define('SECURE_AUTH_KEY',  '`xBFVf}u#tmEq5$4FXlLqMT 5S.c-<F`JM^zpuN0QiVjp<`MnDa6qaxf`:pn3&Zi');
define('LOGGED_IN_KEY',    'WjlP##v#^]B$r<i6T!tty|};?hr6UZJpjHg=C6kudf_o` cUl/]N}3TvSOQ%l!e6');
define('NONCE_KEY',        '$U}`O@yAev@gA^LX(T&,~K=f~I{@EFVNXOqQwfzxQBW,yWY`A0*L(^k8Uhve2XK^');
define('AUTH_SALT',        '2H10T{RKq*u;=k,|*~FB}4v`udBmP1k2#|C@Qiqf.v.d[-K8mVKyov oA CXJ-.H');
define('SECURE_AUTH_SALT', '7Jh^0]OHD/[~UHQ8(6K`78rb/5H7j}VDl.4@LW%E#`ge>BvPhQB<;[!,R>QsfI]d');
define('LOGGED_IN_SALT',   '&Igx&&NInF`-}|6$FEg)88HxaL$M5nFg,?+_Mn- <Y_pS N9H/Q2A|7|~ReK!`2!');
define('NONCE_SALT',       'yIwEUMF0k=d`6o;hEe(=v}Q-U8mN-Jm$Iimth^y/5W+A!T)cK;Stg6-m/Y0M;*5{');

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
