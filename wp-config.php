<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'valerie_wordpress');

/** MySQL database username */
define('DB_USER', 've_wordpress_24');

/** MySQL database password */
define('DB_PASSWORD', 'EfV3Y6hjmAnTTGCJ');

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
define('AUTH_KEY',         'f4|f,Q+>y!qB&4!FQE3ynvQ,?!;xW/?.4*.nyIxP>RnG#*ell66w_oRT>/%Y;+n6');
define('SECURE_AUTH_KEY',  ';,AQG^rak5w5/m}%vp<I@2cS~qi88~ix|N/x5RtEuoP5ajuw~DsB8|05WqfJ^CnG');
define('LOGGED_IN_KEY',    '/_!j+*F@EW2/|UAIB[z<_1~6Qe4NDx&w{-<B?Z[>dGxUkFK{ _7-Ht9H`O:}N%)j');
define('NONCE_KEY',        'Y*_-$m1DQvr0F1moJtxp+FqCMOw1a3!Ix#Y/vKjF}>]]6&-VV>>s(B&eqk^>Kj=[');
define('AUTH_SALT',        '>f+M0yrdgje;,s8Q:t5>57sY}52|dm!+99Rq]LBNNKZ?k<Di/uSR_:_*nN+&,F]x');
define('SECURE_AUTH_SALT', '^~T/_ !/xHh(R+:wjYDA$)#6R3*{L-V-YL9j5&e.VQ?I$v&i~g$pU*6z<_Jbw}rw');
define('LOGGED_IN_SALT',   '^KCiW|qgKy(;xi&+4-i9+%-ZDzR8Lz:Mq:(8E`*QKy1|_%g$kf)/3?D|+n~K0^U=');
define('NONCE_SALT',       '0q$RPeL]=*!MO<NoLs&)raF(a+5iTpSRtue*U:bhawMzi0x/^=x4.PG0w;.-B~4Z');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'undertaker_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
