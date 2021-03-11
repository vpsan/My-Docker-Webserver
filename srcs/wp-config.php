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
define('DB_NAME', 'bhatches_server');

/** MySQL database username */
define('DB_USER', 'bhatches');

/** MySQL database password */
define('DB_PASSWORD', 'bhatches_password');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'l2Ke2r~IO{b{dO6%=+D9@.(+Qg}[j3V -Fu!gJ+ 8InEs.>@|4Z&`f$jdQ?$a-R+');
define('SECURE_AUTH_KEY',  'Vx2*KUM+?BtwZJR<L^Sz1ow7eh.@>hCentqpd:/b^hA=_-KB~eOW9oo.@O=#WmY+');
define('LOGGED_IN_KEY',    'rx6NU#B4|xU9]a|sda(RWp60XaI37Y[NpDCY@P?J*&C5oXWK#H$*R87wjSUm)L<O');
define('NONCE_KEY',        ')I.!lM-WI~QnEC`S+kI+8`][^C=@PY],M`-gG_*]Lb8%#-i3Nkny<0-g{&M>0u2(');
define('AUTH_SALT',        '!4iP|^|yh]Z<:m8K*DA4gVc+=QSnyeJ)C3l0#T>g;mEv,e?_jorPDBYdXxI,(O:n');
define('SECURE_AUTH_SALT', '3/nBU mu<)C1d0#@t^o1v{UK$+):i)l4L`(++-Yk_)mC-b&-~z*,]4OaC%u!3!O#');
define('LOGGED_IN_SALT',   'W-E)[U-:/Ku@|v!lE!M.^o(5_V+M^29Q^+jNjYdbU4=W;@6`yMT1D920N% 3ay~_');
define('NONCE_SALT',       '{V{ng(K#?KY[xJx2j| HOhsfKv>ef[AzO<N{V-SHI+=Y,XT^g]%Y-k5^<UT=IC9+');

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
