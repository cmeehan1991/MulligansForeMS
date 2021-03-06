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
define('DB_NAME', 'mulligans_fore_ms');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '9r0kiMX|4{}}?Y(.uU[}-V53 1N^;douy-EI*x-3hH!2sokOMR!=f70e`Cir9=dh');
define('SECURE_AUTH_KEY',  '^v%o?%>,_)MdA3A^<-npnE8U-f}QeaFx<I:ys} t 9T||rJ%]FBu3#:2-?32+mf5');
define('LOGGED_IN_KEY',    ']+7oG:_iI,yv-imO`|^%reug[-aw*QnC7F8h=kjDmIb2FyQQ,dr{DnFx=RFaP,@4');
define('NONCE_KEY',        '#Nt;&Ec]s}[J{.?=EkB#+Kf-kF,E.k.u,itaZlCdbAR_l#YP|.u6m:N>O9vg9:b-');
define('AUTH_SALT',        'C{m9+zcfgm UA~lK$G)StGfU+n-eO3OitH}]E[j>*}Rc]l2]b|i,r~bpEA4-.#h+');
define('SECURE_AUTH_SALT', '|e@,|$l;#3inXYBB<MEuB8@.pz/zz=[);F6HaMI::NMV2:$ymQe~~,)`$/xtNBnu');
define('LOGGED_IN_SALT',   '+y/d5Ni(F^_H*mu1k,Y%:$81oR3rLfmQ4=8ewqs)--o=nL;]{(USYD_c^+fNq!L>');
define('NONCE_SALT',       'Q`PvMTuU6sv`U(yf3PC2b4WkH<c39&c81{ 7j6IqeL7 )30ecuNvTM`#(+sIMg_C');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'mulligans_';

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
