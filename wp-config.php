<?php

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'gloria');

/** Database username */
define('DB_USER', 'root');

/** Database password */
define('DB_PASSWORD', '');

/** Database hostname */
define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

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
define('AUTH_KEY',         'B i%&}ZZfi!^>%2p[;FA/1*nVAN_#LGFH RQ/kTehq5^_A,G#TfK UX_?OFg>r8c');
define('SECURE_AUTH_KEY',  '9j(uFd8N.ao7:1XOf$yb*]ke#S(=RkC:(J_ l_aDd2Y4)t:3Mn@GDw@Kr4#T;)XZ');
define('LOGGED_IN_KEY',    '~ T*V>3xn6s,[;6;$mGpU5w7_X]]eGW^AR,OG*vr[Ax^%alNcibm`o6el>K(lu`b');
define('NONCE_KEY',        '<W8(t{5lP5#)2#0wfa#z@:$FxBr_zTRUh$lHPlVQeUO=(X<TwkHyN2 !;,n-) |O');
define('AUTH_SALT',        '5fO6_x=hO8A=>^LibWMXko1ZNY;q-[$ePQq08`lBSy.@>6.wwM.iC%AG-kHa0P4<');
define('SECURE_AUTH_SALT', 'dAXJ>E:aO-!|>:iGR20w)APy`<Hkhr|bwqxi`Fe>&zNvo;29Khx9&;DkU:}dVf=I');
define('LOGGED_IN_SALT',   'K@4dNma8Eh1z|n![8fS@zJ@02^UC?&d+qNVe}(7H|.<*cjO|Z)Z]%A;^|:A)Fr5k');
define('NONCE_SALT',       'aEQLu:Kg#un>PSIp>f1MVGTYo2[/)^l%QUC/D||}U,9Z,[^g[1UGq;_v6{l7nTK>');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define('WP_DEBUG', false);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
