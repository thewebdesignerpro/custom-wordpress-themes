<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define('DB_NAME', 'davidisr_wrdp2');

/** MySQL database username */
define('DB_USER', 'davidisr_israel');

/** MySQL database password */
define('DB_PASSWORD', 'lea73rsi2');

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
define('AUTH_KEY',         'QtjX++md;(0D/;Y@w]dL]77KsMK$B.x,gccJi-oAOH3 (7{Z$C$@|du)64_g*QH<');
define('SECURE_AUTH_KEY',  '5< Jlrs:c{A(Q@3{Aq4TPdeXT[,V4`kqu:D -(Vm*0G56,|^~}5|)i>p<%?|7OV{');
define('LOGGED_IN_KEY',    '|N4;lu~a|t0<6Y<J/sGo=RAiiLJpc+{W1M3IYh D8W8#Q!g-qM|s&lRk v|ZIHHF');
define('NONCE_KEY',        'U2Xx#_/I+qft^j|K~bS]XaY1z@~o&nL0`K^WE]#cd$,SObBV*S?hHp9,~c:^c=D=');
define('AUTH_SALT',        'nRID4D0.wW?-BDf^=?>,:;s|@@m^%$-fG<M-PKKuz>Ue}Y[y8d`t8W.hR/U{>ZT!');
define('SECURE_AUTH_SALT', '60d5.@r!2II75L2jQYgWs{-(%ux[9IEP&!|J3NTN:N-8[S`u{.-7V+}FA8so<Bl>');
define('LOGGED_IN_SALT',   't%eWx1AY> {Y5/33:  9^e0[z;ma[NN]S+(.MJI$zsBg-x^8bY<:p+o+){!Wr%~T');
define('NONCE_SALT',       'n59j~!n_X|:aHHkF?Qx@>G9+bhjwAVBgcK#uYv0Ebu?0,1Ocp2lUBa/G[_pg?sY&');

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
