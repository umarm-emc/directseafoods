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
define('DB_NAME', 'dsf');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'ZtuXXaJJ7?#W~yFo&=v;nXbDGsA,{C2@aNr`FiEmW*ru%(@{/=t9k(sD_@EYy4<8');
define('SECURE_AUTH_KEY',  '{rIB~G=`5d(C@`}+RCj6V<$iMfp7wNK;!Pp$J/I1wjiLv*{J7qv%.XP; i~+]r5l');
define('LOGGED_IN_KEY',    'bC>Lcmt:ELSyK+AgLf7KAHf1dPRT*!`3fnl&|+PVLr0})=jm^Z*_)u*NEyxzC!@o');
define('NONCE_KEY',        'J6aAXG>&/uu_xU%l6dgp`A@#VF4~lv9_:L#, %.yqHv`Db+l;=Xv&=)Op;&A2UK~');
define('AUTH_SALT',        '?b H5^lo6#UH@XUL>`l},1EkddJkaM8X_|}v7MJE=]6dzqA~;_q9.xrS93aKR6Rw');
define('SECURE_AUTH_SALT', '&y|AK]7DLOmqWrc5K:bZ-GW$y&p};=1)t*+xKj4v/djv8B$!jo?OgT%m6:1Xfn<C');
define('LOGGED_IN_SALT',   'D&};%:oH@9ubl])N;&bFm6K0<^MTJ&7_%Tutd @[Rq>e?s/VKQVGgIc8 %{Rcw$$');
define('NONCE_SALT',       'mj2`nVy6[jQ}!]}uTJ3BUSnwjwCzQ0q+6otJ^zV3h&{$#qkNw:s4?2on52UVK#gS');

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
define('WP_DEBUG', true);


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
