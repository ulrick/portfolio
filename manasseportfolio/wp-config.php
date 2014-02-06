<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'man_portfolio_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'OE$|hPzZ`Et,wQ~_Ga$6xy< 0n]X+rAQvaqTCb03> |DobC6P?9g/sgfJt!B`zcS');
define('SECURE_AUTH_KEY',  'WkD3M!}B:jqIbSuL|)u,RqUl70wd)_O[3zWY|X71Nl0wfOteZCUk5?r>kz}V[g5;');
define('LOGGED_IN_KEY',    ']+_?@C=s*QaK7tMQvfGjQ^^0i`&lZ(8;:pCUXzyMKrh-7(!/5`)]UFt,)&:fimWO');
define('NONCE_KEY',        'd(RyR)I6aDxLB`j$UPeOU!yVl+2rT_/@YD0*HFQ[/!Tnq|z$}A:7ywOz`K(E_^qX');
define('AUTH_SALT',        'lDs`d,5^?/Nz0TrGB~xa!9Jh=J]j1;N!R[nVU/`FU60g&u`z&#D*F}=m`/_:ep>*');
define('SECURE_AUTH_SALT', '09`kH+EmV76!}~<3(P-<u-,eB?BA!Fl(L{a=4{/voLnH|FIpcqU`rkI/,gy|nix9');
define('LOGGED_IN_SALT',   '4T}I_ynf/9}it7qTZO)dK~N;c`}c$yLI?r3X[P~/Q+ef|!+qXz6~S>(&N)|h2jxS');
define('NONCE_SALT',       '{*Df+mhHFrlci=kx7F{vng$L2t2H?Bbh5r8s/6^Fe_pE=5GyH}SJA*G49FkEmu%s');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
