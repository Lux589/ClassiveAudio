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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'lux589mb##');

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
define('AUTH_KEY',         'Ov=B|L8,w2{l{faQ32o=84H]&|&rOlTK9/R&lKH%6F:)=7*U ?:my)5Po0W|qssV');
define('SECURE_AUTH_KEY',  'i`3NZ B;/5~O[`(c%T*IY]Jw=A[K`GCh)xK<[^%1o mNAI~f1rE8&`~g]0*;:=V@');
define('LOGGED_IN_KEY',    'oQI}q[M4]zq*uxd^AB~9jGLi~>ZC }Vu,aJY2B=<*8`tJLprlr51$S*f6#r6~#[M');
define('NONCE_KEY',        '459ZY*sp.{<);#a|;5LRYBIIS`JXRX$bA1s7:2^nGcXuy(>(;N76nE&6%<cYmPkX');
define('AUTH_SALT',        '?;z3:eG8<(z<,K#$*<o6uNef(Px[=MIfc1HHjjBl.7r]9hk&O_~M6WEt1dD6Sb-z');
define('SECURE_AUTH_SALT', '79mA2sDtE6QUKQU&Ob@sZ#]FY/;oJ4ua%Z(I)P`ampOheH.M=j._H3Soa`C*n=E<');
define('LOGGED_IN_SALT',   '-wo=/Ij/0GL11x|U9{dvZ<?El,9D#[(^=Zu1np}1mHjR]@unA0z9AQl$K]`(Rg7o');
define('NONCE_SALT',       '>vp< @[;{NRll5p@u$pSl$I_CzW=]ChZvG1Q<rf^0#=%}-W8LG*UrV*F?k3qfnls');

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
