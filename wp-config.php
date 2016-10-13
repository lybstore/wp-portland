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
define('DB_NAME', 'cl28-port-db-2');

/** MySQL database username */
define('DB_USER', 'cl28-port-db-2');

/** MySQL database password */
define('DB_PASSWORD', 'H-Gt9!JdM');

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
define('AUTH_KEY',         '3$s%5U1GfAn)DM[!ai0dt--Qx +H=8j#:.NiV#g_yXqGO 5iylUd*l+ OKNxC;5|');
define('SECURE_AUTH_KEY',  'C5da.<`tvk}gnnoJhU.d_xp-k6aB]pVnr9^@mO$Src8QgDC}bS,mjLmM}Ug)E<XU');
define('LOGGED_IN_KEY',    'i3(}fvh;R1.PD0 q|.UGFe]ybp:!05 w@aw6))nYEwWf>;F,8N<8!=]m%[8,6v(d');
define('NONCE_KEY',        '?}J:$z]9#pOA$[A03h~}qDk_r0_uF;aF5NAy,,d{u8Myge:su||gu(PDE^*<3$eu');
define('AUTH_SALT',        'nB3uIY4eE1hU[:gAbG0A83mmrtBl]6~wr[wn541(~w 8#gAB:f]3KC.t${QhU@8T');
define('SECURE_AUTH_SALT', '9~Dkk1gJF.YmHPBM<5 htW)]gFd4us:Bg|#mMOQ^fyhtqw0c#&;H7b:sH!x<oXA&');
define('LOGGED_IN_SALT',   'C8D)fsAIfjD5E3OAK(}c[?$I|aZ:R(BI3gG#c<7qW:>$-~%pjIWK=N%tR%BG`oMo');
define('NONCE_SALT',       '*V4f>9NL 9<o`pUg<`/.q`QNRl&EpM#&D`u96.hH9(Q)5avPS0r]^~*u&LTMOo0c');

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
