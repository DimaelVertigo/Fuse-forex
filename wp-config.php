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
define('DB_NAME', 'fuse-forex');

/** MySQL database username */
define('DB_USER', 'fuse-forex');

/** MySQL database password */
define('DB_PASSWORD', '123');

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
define('AUTH_KEY',         'KRicO<zT8AdyVdLtj%ahPXTY;&CI4B?8eR/a0D]Kq%!eOeG$=<bJym@`*4a_2t!*');
define('SECURE_AUTH_KEY',  '6_ayxH7+q;J+q8[|+y3y<K@~s:yWRYBrXz~$i* rZeMXP! 8uj1AUEuw-S|H5JQn');
define('LOGGED_IN_KEY',    'XEgR_<T]VFUxHpFQ#!<`r$YUv@eeP~/3=]gy6WF{gq2k]RHp1E#kP|>vF!|73psL');
define('NONCE_KEY',        ',PP,M?i}6LzOn3rL3z~CH*6c)+2><w=sk5]/z9|2GHsF#ro:L6Zg=gjb@L25N:h6');
define('AUTH_SALT',        'Ys&b#/q8Fu6SN.UnNR7HT0>!2J3OKdXrQNGb|EIUa&^A>7QlNIM5yXe@v]rK~_8X');
define('SECURE_AUTH_SALT', '#hXCCv|qG>/1,}P|90^P%!m,=l)%FtF9C+vCb_VFOj/nc U#@VD]-HIQdZ3RK<8B');
define('LOGGED_IN_SALT',   'KSWH9F|?}KU]$@ycG)Li6FyZ&e,.)l+0pJvdLx|O820Rm,|=fhz#zAsL2-{E49Oq');
define('NONCE_SALT',       '_Z5HdBWfM8-D^Xm=8+%F)/P]bu}4A8a-NrEUD#Ccc;w-`L:]@=gCP5-9pQL_je)A');

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
