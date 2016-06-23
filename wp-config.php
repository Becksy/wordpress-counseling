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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '0C|-k%%u;^{XD|68^NF4{-Ww48$he?&B?U(NKoqGop/[d/aT~6#J%]*;uk&)&r{B');
define('SECURE_AUTH_KEY',  'czB;}RimZP-$iqOZke80e$<svd=3;@3{LX)$h8c,2(o0upRD_vRnn2?DX4RcPN5<');
define('LOGGED_IN_KEY',    '*g)kJ*_mFvHd=4q1nPauw$lFjz38)ijw/_&B(dbpz:mJ866DW/k2:qyQN?RzI{=;');
define('NONCE_KEY',        'JM247%N<4^_~]Z$3di$83ArKLLvBd%TP=t8vWT$+#}SZ<BGqBl<r]RLh->8OSu<~');
define('AUTH_SALT',        '#~i<@QQuod$CQoyFX L[AV>yjhim%S!:-OntR,R,A!~g8-a/a=7y!IRdgLZWqT4d');
define('SECURE_AUTH_SALT', 'W(Bm%XQ<J3k47@fYY=Eqny1lMm($.vO#U|la7@&{UGd0_OC:5`gOUCtlW&^e5nWU');
define('LOGGED_IN_SALT',   '~g*Q>IZq:La}<(VG=^+3q-5Lx`>Di0vqmNB+3ukfw^qN4M@!/U $JJ!C5I}K/6b[');
define('NONCE_SALT',       'n;-_@rg,DU1uOM4,ZYp2Fwu:Vc?jZp*SN9B8`uL3>8d& `$4=g`hJ/CD(}_poGR;');

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
