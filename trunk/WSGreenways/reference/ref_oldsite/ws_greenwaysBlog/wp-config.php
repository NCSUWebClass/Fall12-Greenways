<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'db393577155');

/** MySQL database username */
define('DB_USER', 'dbo393577155');

/** MySQL database password */
define('DB_PASSWORD', 'winstonsalem');

/** MySQL hostname */
define('DB_HOST', 'db393577155.db.1and1.com');

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
define('AUTH_KEY',         '6o-E?1`6t}LV)0&zZ!(l+|!g^@2C$FS.UKx8/r44+E^VI>WXXe<$xP~eeKybH=g+');
define('SECURE_AUTH_KEY',  '$H=MaD7_Iff~e&,Ee(J2+CEA?)^Xmf;u+IOB#S0W<A*i7Yj),0iI07-6v3IAIyE|');
define('LOGGED_IN_KEY',    '&_2GG~s>JgP|~1*A$bn//@X2gV!diPiqD+t26OR/zu(N_EVP7i]`v01B6<;2A-It');
define('NONCE_KEY',        'C.JZ=7u(-VL}NrjJl:GJ&kaG)8++o%E10_*K+KAu+ N:1~@?>; [y+]B$!U@Y]/n');
define('AUTH_SALT',        'iPpPZSL31)7(={$Kfa,8{)%wviC]+0j{*+_O6;Euart|4b7%mc?_a0Z^peNP`G4J');
define('SECURE_AUTH_SALT', '~sP>AauDb`I1,F9m82c/1dTw*(@F>FqR-BK,^89C J;lpjM@QH8!IP|QU~eVY(qH');
define('LOGGED_IN_SALT',   '+_6>h]rW>ML;1C>21oe{tS>ZzkImJ7e/lI`D~f-JM|Y{W4TI#l}`DniJzWt;Fs6M');
define('NONCE_SALT',       'K!i}~9s=|H=S K|qRhX&N<4q$}v=Nds^?I)vuLLw`&5AB0gTDI5u|Gg!F:Yo$J51');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
