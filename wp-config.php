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

define('DB_NAME', '');


/** MySQL database username */

define('DB_USER', '');


/** MySQL database password */

define('DB_PASSWORD', '');


/** MySQL hostname */

define('DB_HOST', '');


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

define('AUTH_KEY',         'FUM^$3}>cYvrj|~-1:hdVwok84RNG@ws[|SOGhZV[|C91ohd-wKG8ZR}|C4og@zsJ');

define('SECURE_AUTH_KEY',  'rC0g@wJCZR|@0[VNkd1[Cwo|@RKgZ4}F8rk!zNFY},B70gYVsoC80RJFzv}>!YRNk');

define('LOGGED_IN_KEY',    ':iqTXAEL{26*.mqxXeiLP{6$.<quXbiIPT6A.<u+*ptWaiHPS69D#;t+*ilPSa2');

define('NONCE_KEY',        'whoYckJRV8B,>0v@!krRYcFJ|[0v@!koRVcCJN04@!>ovzYcFJR08B|>rv@ckoRU7');

define('AUTH_SALT',        ',nuUbEIQ3A^<{uyUYfFMQ37^,{ry$fjMQY7EI26*.{qy$fiLPX6EI{y+.bjnQT');

define('SECURE_AUTH_SALT', 'qe0z^nvYfIQ3B,}v$cFN3B,}v@gnQYBJ3B,qybjQXAI3^bjMUBI{3$,rUbEM-!ks');

define('LOGGED_IN_SALT',   '[-_lsZhdGS518~#_lxaWdGS51D#_[w~-dpZhdGR41C|![w@-doRZV8J|_[w~-doRO');

define('NONCE_SALT',       ';MU73A<{u^jfnTbXAM{3y^$frUQYEMI{7^$,ryuXjTPXELI{6*+.qyuXiLHP6EA');


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
define('FS_METHOD', 'direct');


/* That's all, stop editing! Happy blogging. */


/** Absolute path to the WordPress directory. */

if ( !defined('ABSPATH') )

	define('ABSPATH', dirname(__FILE__) . '/');


/** Sets up WordPress vars and included files. */

require_once(ABSPATH . 'wp-settings.php');

