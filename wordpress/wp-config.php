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
// define('DB_NAME', 'database_name_here');

// /** MySQL database username */
// define('DB_USER', 'username_here');

// /** MySQL database password */
// define('DB_PASSWORD', 'password_here');

// /** MySQL hostname */
// define('DB_HOST', 'localhost');

// /** Database Charset to use in creating database tables. */
// define('DB_CHARSET', 'utf8');

// /** The Database Collate type. Don't change this if in doubt. */
// define('DB_COLLATE', '');

if(isset($_ENV[`CLEARDB_DATABASE_URL`])) {
          $db = parse_url($_ENV[`CLEARDB_DATABASE_URL`]);
          define('DB_NAME', trim($db[`path`],`/`));
          define('DB_USER', $db[`user`]);
          define('DB_PASSWORD', $db[`pass`]);
          define('DB_HOST', $db[`host`]);
          define('DB_CHARSET', 'utf8');
          define('DB_COLLATE', '');
      } else {
          die('No Database credentials!');
      }
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '_[Vo<$+->DCb6%Qdf~ +5+/f5.9,Gc~;j-{L-%&z-x?O*xF;h;&Y]FE2@;!*d14F');
define('SECURE_AUTH_KEY',  'XQ#W;bp9h9K>U+T|D Y=ha+(,3q?O-[<VR3zX+a5rlD=-?7*<?g ~sN|N[F0[Vkt');
define('LOGGED_IN_KEY',    'U!L+%kq^)$V>)Un(-|YOBNe/%vFi|WB;=ua-fgib4ju;o#LO +gMfB%;RFonFA P');
define('NONCE_KEY',        ')74tUA_uu+ nw,+CV/Vx>oSPvEWBfHD-x-!*nbq}39FbM74|#-PVd1(iRxk*)1<%');
define('AUTH_SALT',        ')Yn^5C?1Am$JR1+vbzv<hS[t(fkZ:[Kw |5_A--Dkk?c4[-#3t3.b^FUs4GSZp|.');
define('SECURE_AUTH_SALT', '3ww- MSd1i0+z8r@#7<VSxw!p69&*(_c!uy>ripj<MR``w{u:vNE92u+?nf&9Q2R');
define('LOGGED_IN_SALT',   '7ar]wmFw<rUH|2ULT+;_b9^tBisN6 Fvy<l]nml~4wDDd5@a]O$H+vaW7+*- n%L');
define('NONCE_SALT',       'hQ03[Qw*BS5DP7(Hl OC,<}WchE9)WJ:z^@yMbhp<~~-ldfe$v5PU@p///Y8clUo');

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
