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
define('DB_NAME', 'midwestbjj_andreramos');

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
define('AUTH_KEY',         'e#3+lI+<{y<`)#*T!Q/CnE{VX{n;*EM2]dr|}n;Bm4=7604Y6W?Lh0>!qbf{&j6r');
define('SECURE_AUTH_KEY',  'ujeC=QrQY I`6i:bKJ.P1<)&p|D_*M6|/A-X~$dP/kK ;W7UXb0t`Emq)&/~s(4H');
define('LOGGED_IN_KEY',    'vfGfWw70AMdD[Pd]LW3q[6c3<B=AlhIopXVJQ*|wMe0((:q8FMoi=m ))oG;0/Hk');
define('NONCE_KEY',        'snQzzdhh]K#uE+rXqJ).;jf2%^H9V~p&DVkIq+$7^v(w<z~B[2%Jt*{C`-[?.{9Y');
define('AUTH_SALT',        'kkt*xxpNhF+rT#l&A^-=nwS?mjMs!:ykq:Z:RQ,0I*10K.xzJ2G(h&uAoB+0n(bw');
define('SECURE_AUTH_SALT', 'J1[J]@*TF_ti.FS$L&QY>PV9!;. ^q^-$qNn4+Tw{l@>]KLQwOADHZ6?HeeI =&(');
define('LOGGED_IN_SALT',   'Vo8lVvYgcIlRuR-9XOLA2M*.f.HTT=xpz.-9K7T^<^x?qX3ul !P?aeU_K(h6kXd');
define('NONCE_SALT',       'b4,EE@N~qymq?0pgDcLm=f5K]%UleyZ+;_u62(9::m/MHA5V&E85tQIvzAa$9[;:');

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
