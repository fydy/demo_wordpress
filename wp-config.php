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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wordpress' );

/** MySQL hostname */
define( 'DB_HOST', '39.107.120.119' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
// define( 'AUTH_KEY',         'put your unique phrase here' );
// define( 'SECURE_AUTH_KEY',  'put your unique phrase here' );
// define( 'LOGGED_IN_KEY',    'put your unique phrase here' );
// define( 'NONCE_KEY',        'put your unique phrase here' );
// define( 'AUTH_SALT',        'put your unique phrase here' );
// define( 'SECURE_AUTH_SALT', 'put your unique phrase here' );
// define( 'LOGGED_IN_SALT',   'put your unique phrase here' );
// define( 'NONCE_SALT',       'put your unique phrase here' );
define('AUTH_KEY',         ':{.-0`C-0~XdM%gJ25&-%&Te*u .8 HCWFEYP[uG++Ergj8^ /_s]ntYxDX1E u5');
define('SECURE_AUTH_KEY',  'Kgdc.Q=MBT?s{qW=LLV7bs$cbpvy>jd/GQA&794=P]:Fq,DuhZa#H]vi|AY-o,+v');
define('LOGGED_IN_KEY',    'LM&ZZ)|K!KkTY]$oijBdj!)K/5Yk#v%LX}zv=;AvcO|?5PF93y_*;ce$I|emQcwG');
define('NONCE_KEY',        '::%v3yhvA0C;Z}WE.eyFhlz9}(GttVlAkw15=?MgDDlk1+~1Jip>-1XqR^HZ*8jL');
define('AUTH_SALT',        ')2DU+[W|wk^PtQa)`oYe+~F[caz=VFx+R9SH:dnBT]4a<fO1:CR)KJ]yV#CeCdcZ');
define('SECURE_AUTH_SALT', 'cF`%U@(%5xNnD2ik$|@p}Ir~9TE/3aN]zfZ S2-$CQprG*_ TRL5wqKXEOr0NeW*');
define('LOGGED_IN_SALT',   'F&+u<zvLa@#:@;r*OFV*ZL$;.u1ct[]}LHb].a 4G6r>=T0TG)=<0|x!>0x-*TM|');
define('NONCE_SALT',       'YB+%dt.)XCLvv-F7I_1|c^k<F-@<GkY3i*n3`{.dlg_?<;I.my^1Yy4+Ay~T6F+D');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
