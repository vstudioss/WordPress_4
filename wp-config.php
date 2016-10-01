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

define('WP_REDIS_HOST', 'wordpress-001.c4yvp2.0001.usw1.cache.amazonaws.com');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'wordpress');

/** MySQL hostname */
define('DB_HOST', 'wordpress.cw637ad2cjeo.us-west-1.rds.amazonaws.com');

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
define('AUTH_KEY',         '`_6q7zRH&h7y$}(N);mEmOn@v_!<]]ru+.O0Lb*[C*Vv9_OihJB-L?9SC$^1N}d/');
define('SECURE_AUTH_KEY',  'p&(g4`CILgKR%O|v^s(M]9mcpw&]-/n9y4loaF8(aD>Z8;agY$iIy0GtC#PAnFCI');
define('LOGGED_IN_KEY',    'nC(^4W9|7~bvAJ&I<Zr61=^;1B$0%~uC^#o]4W`]o,|KF?&AJecFi;q=nMZ@YmQ^');
define('NONCE_KEY',        'D6E39V/3 j Mnb9fDDmt7X(-v.r7*r$0QxB-8}aTw}R97P,j1@x|Ey}4mc*S)x`*');
define('AUTH_SALT',        'robzr: k3%{h+q?x10@:D?ys4 ~wExvu42 pc`B!{P-3^06T!t]}>U@n= L@Ym:h');
define('SECURE_AUTH_SALT', 'i3M$ndoE^oKe@OJs 4*JS#VpCnaViYOay*<k+frOVeO?bqt:7!^@V-r~aT_%J hp');
define('LOGGED_IN_SALT',   'svS%g[8c}$sW3B$mkdcHecL3:3,}hYB?hPWsPv|y`*;=eeiMN&t!CmqL_hg~OA*5');
define('NONCE_SALT',       '@<GKN`+lC.Q2M-R2:%uB+}I(d3/G+y]&;V81<.O6v_(yC)G7lnw1l-c1gPAc }gZ');

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
