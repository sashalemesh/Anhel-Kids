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
define('DB_NAME', 'Anhel-Kids');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '~+^+KN~P8CiH!#6d3C4YOV;=n:tJk-azfwmX29-F ?fO|;)`r`8|gi6Y8o.|5,e_');
define('SECURE_AUTH_KEY',  'p_Jv|c{`WkIn;((qeC+e&`Ky*V>YYjq-eJD]cMc|r7p9cFjdpnLW+-L7%8+7%//M');
define('LOGGED_IN_KEY',    '^|$|}H2uZjVeOs1@ <?`MUu5tKB1c@od%YT;KE|+n3PFzSgAX`0D<Q|07|2&`LR>');
define('NONCE_KEY',        '<e@g&TBr2?b?rABnX(sQ9/?>L;/lw<x@})Z{/TNkF++x9%w=:G!.iZcyKJt9&/x=');
define('AUTH_SALT',        's|&&|Oq7%AO+NQz=yLON+:w$K-5k9ZxZ.W%d@^!$*MZn}$z&(g[d$nTk1#-xcMWE');
define('SECURE_AUTH_SALT', 'tkh|VqVWEW7cjU$ 4Ww2x/|xh7&UBpY$:+BjNDu-EDOCJ+b![06<|h:m]RZ]T1>g');
define('LOGGED_IN_SALT',   'Rk$c`LVOh2hlY$+qd@F-HYkcYXNCExEJmp<8T-R@pdN1n/=>C}w?|~%H##a+UZ5)');
define('NONCE_SALT',       '5NKXtG#dl|d9EbJS7dD>hgH4V)dUNEJ9:j:qY-(D$w5=?XHS2KVp/})zGu^E Y+D');

/**#@-*/
define('WP_HOME', 'http://'.$_SERVER['HTTP_HOST']);
define('WP_SITEURL', 'http://'.$_SERVER['HTTP_HOST']);
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
