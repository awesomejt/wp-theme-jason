<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'dbuser');

/** MySQL database password */
define('DB_PASSWORD', 'password');

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
define('AUTH_KEY',         '$yU4Egm0NT+x@;|;5noHxnMjEd.ki0GN<%S`ECo-;$/y4g }0:wQ3(~qz|s)k{pm');
define('SECURE_AUTH_KEY',  '-4g|-p!L#n1VpDxKQ@jJvzDum$Fb$nN4*!~E&hoUmC;M><Rt-cT?gI:V99K-0=oe');
define('LOGGED_IN_KEY',    'Q1o:inUu}cR&+Et&oQh*GOM5{~.*p4bGIvA|b<dP8 j#4UYg5qFxYVn5f%v]BGt+');
define('NONCE_KEY',        'w+ &feFX2t-aqNC}/{E5c*0<pUx!,}KkW<adt^Tbc01Y6noaYV@ztY<*P.)+jQc:');
define('AUTH_SALT',        '|#O*-!i:-A|R*(ny YdEHxEiz0(PLdaPiL2);Yc9GNb3PmTk|j/jffBF5FY~#hU@');
define('SECURE_AUTH_SALT', 'UMKWZT%G13{)6x8`AoH+F/;n=(F=oD)>?2e5i V9&J)q4[U,/~S+o6ECY<NgApJH');
define('LOGGED_IN_SALT',   'Y#}1D#5*]=P|X|d3-4w}>Xa8WaNLtge|r-&h<f1RI1=Y1c#dpW| 76~KC.31+!%h');
define('NONCE_SALT',       'ugtXHF.+9z[3hOdKU?qOr6fh)t*e;hHDZ^,BH}4[?0}-o6X^D`Bi-T}ZlcB~3}9X');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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