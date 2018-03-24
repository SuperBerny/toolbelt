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
define('DB_NAME', 'amazing-college');

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
define('AUTH_KEY',         'YGJedI4)m^0$qH=aK+-K1[ut0!huiBl)v4F8$Bm`b57!VQ{se10qJl$O&K-X/9c{');
define('SECURE_AUTH_KEY',  'KRQd^*P~}it#)W5[bJl)9J5mO9#MT^1xpIClI0K,6d.aW6<Y~70o[fPWVc%_ybZG');
define('LOGGED_IN_KEY',    '~McKMR|#5t{+VXTRdGFqtG2wp,!.~`+,3e{`HdjcoQj1Y|_zy-CpXFnTgiaTw:Wd');
define('NONCE_KEY',        'V0Jq,^1F?xnjf;,Jn*^mRF;zf fZ)y#{$sXoi+,)OM3@K1y7Fr{Y@Y6yZ8JW#RNQ');
define('AUTH_SALT',        ']E{x3IRBxgGW[~2Thty^<aH7@qX)(3?I-A5wWfk^4qq$`DaZ_SJts>!zX/~83B!)');
define('SECURE_AUTH_SALT', 'BLllu2^N3aV1WlKl7bUc8b;T84v$w{?cdh7={,_TEah%:@%)+,$^}LDire=-/~cS');
define('LOGGED_IN_SALT',   '=`.#c@Kdy:,rJRJU><4OhjA!/*(%]LT 1c{D(i$.uC@T2ROi318,P3oQdV#qK4<Z');
define('NONCE_SALT',       'D!:AWE[jEWghw`U(t5a.EKa-:J[)@-v|1Q`K9pb@JR1:2Q.@<nd|&$-5T[SXDOaG');

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
