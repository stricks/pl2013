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
if ( file_exists( dirname( __FILE__ ) . '/local-config.php' ) ) {
	include( dirname( __FILE__ ) . '/local-config.php' );
	define( 'WP_LOCAL', true );
 } else if ( file_exists( dirname( __FILE__ ) . '/dev-config.php' ) ) {
	include( dirname( __FILE__ ) . '/dev-config.php' );
	define( 'WP_DEV', true );
} else {
	define( 'DB_NAME',     'pecanlodge_live_wp');
	define( 'DB_USER',     'pecanlodge');
	define( 'DB_PASSWORD', '0H2C3LCPEw!Z[7q');
}
define( 'DB_HOST',     'localhost'  );

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
define('AUTH_KEY',         'G8.m_?Bm@mz-?V(AVNG+|Wa74$:+F~oeOb(gnoTJq(z*-zkJFg2+bPi,z.;b;-<Z');
define('SECURE_AUTH_KEY',  '?n=*%0xU94[oIC|fp.R f8ej=DntI8U]/}=;>{(+Cud6Tg0|3T@`LS?dxwJWxBl2');
define('LOGGED_IN_KEY',    'ht7|p;FnPD@-(Z1I?~}X}-$bgPvP%y}Eo-F=|UHt#X+ClT:QbHpDU-.:UZ.qp2.@');
define('NONCE_KEY',        ' uQWj`JHPWykT]^YVCnV7(qmYJ4}B{:Cf}#2W:<0td6v-Uf=WJ|Z-A1!2gr_0NsX');
define('AUTH_SALT',        '%E{-=v,o(y)C#l0Pf.PDujK|t^$ckC,@N}FTSZ(5EEVfWLwhAmDQ&C +NgMFp~W]');
define('SECURE_AUTH_SALT', '`K~j~c@!NV(~)L!^,c72k!qzI(x*xTDQiu7;td&,_eVsAZyX9![HFG=~%*bJ|E*,');
define('LOGGED_IN_SALT',   ';(N)|Qfw&v9fJ>Jp#J]N )7;#:Eg$iN35gnxdXZe?+T!ZqP@(]+gcS3moQ>|=P/T');
define('NONCE_SALT',       'qi.UF~K+-`uc`Xw Kimwz!Wcpwemsp@*6]=N@t+4K+.ahHT04I6s>+H{!*L261^j');

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
