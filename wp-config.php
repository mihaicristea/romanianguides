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
define('DB_NAME', 'romania4_wordpress');

/** MySQL database username */
define('DB_USER', 'romania4_root');

/** MySQL database password */
define('DB_PASSWORD', 'nokia8210');

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
define('AUTH_KEY',         '`SVGB_;4j>WV8_q{Zh/a78}c&q%?PW~XJ:jB<MDF@uFSQI#Y,M&!QsH-]9?3eyd%');
define('SECURE_AUTH_KEY',  'fHy[wEvS.WSJXw&=6tDvHJoQ?T-1#m:X;<Xb+61LLW]k5c^*=FBNcL v5BrGT6[{');
define('LOGGED_IN_KEY',    '{Z_53Mjm@8Rp`RsY:F))1;|q.Li~{Z:}sCjU=Gm+zED9_%c9zN$39ejrF@zdAcmW');
define('NONCE_KEY',        'qg:B<NFhOCwaD,xp3JA&cs*.T7CJ._F:i=i%sqHV|[&-Ml:V2e02s^n7?o:)T~[{');
define('AUTH_SALT',        '>=~+P]#ikeBFV[`W6KS[U+Zx<6>L~mON.]A %2; aR{cJ7CckQ1f7G/I,#2e$JAw');
define('SECURE_AUTH_SALT', '+Dh7iN5WaLt[ro%i^{W]eN~?$x{D|I@,(R09UR9kM_mphkqpKJ3{bUXbVbrX+KHm');
define('LOGGED_IN_SALT',   '3h^x#yWlrr?x>;@|A>.`zzluw`LEv&80bH^YSXM5gvWE#2U*V #M06qS!cA[Q7lx');
define('NONCE_SALT',       'BIkC.v8wNe?o?*ZT8gJvK(-PFlZ@*/g}],c77?lF.$^/vQo}_hqYnB!hD[B (~Y_');

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
