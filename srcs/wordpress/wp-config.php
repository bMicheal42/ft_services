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
define('DB_NAME', 'bmicheal_db');

/** MySQL database username */
define('DB_USER', 'bmicheal');

/** MySQL database password */
define('DB_PASSWORD', 'school21');

/** MySQL hostname */
define('DB_HOST', 'mdb');

define('WP_HOME', 'https://192.168.99.101:5050' );

define('WP_SITEURL', 'https://192.168.99.101:5050' );
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
define('AUTH_KEY',         'JN)pE][ts^Mh@X?xO21(<l3wH3+`GIz2|qj,<]XAC0Mf:_W5@_|jI6QDyRJRo$|&');
define('SECURE_AUTH_KEY',  'Wt(U=~={fVHn#Q9~Qe0.WIfd|&yr(0Hnw!]c;}agNO|>0pz7.s^RETI#|gI52|Db');
define('LOGGED_IN_KEY',    ';Lc%Rk(}y?<2|.cN*kkSf*O|Iv`vyp(C#Y)~6cg#Q#38MK)V,2x 7kA*qCcXLzZN');
define('NONCE_KEY',        'OAdNX66QO@UCwxBLsW6O!KVgcM*vUbhIOT**`wh3(8:spQcg;?)EVN/DisKtvC+P');
define('AUTH_SALT',        'ykK5k#]07[|,r<?9+Ubz]:q!p=psKJ{36rC^Gba{6CP3|9f,dFz[2 0d(l .s.z)');
define('SECURE_AUTH_SALT', 'l.S.m=?I(L>|O|=SGLqs/%$!jEc~5U&/4|p_=.2iIxCrxEFI(oNs7vEh,.!6(GYc');
define('LOGGED_IN_SALT',   'gJEuwXV@Y~qnubT}D`dV|Z c-Xzkc)j%Tu#L-ki:Kkt~8Vogk/%N7$mv<93l>d>_');
define('NONCE_SALT',       '?f:#>clMWOC-Tzz)0&$4! Z}CE=FLCsh$Rd4 Z_Shmq6.}AA!HV=8U=ei_B<TfcH');

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