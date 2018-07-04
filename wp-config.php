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
define('DB_NAME', 'c139ners57');

/** MySQL database username */
define('DB_USER', 'c139ners57');

/** MySQL database password */
define('DB_PASSWORD', 'ybWHKLp#wIe61');

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
define('AUTH_KEY',         'i%9ICQQiWtv4G?@ch6kOV3_zlks?qoE+,j_w8o<Ra1dI}<_&Qvq7N$!%JMkIk}@]');
define('SECURE_AUTH_KEY',  'jh1ls79;k%$>]#..5d7V)$>_D3@LjD0FLut~zm%xc +M}x;vN) $hhp~D|$ks/{v');
define('LOGGED_IN_KEY',    '|Xt6:ToU(@f}uCd.SBnFeQy+s&6^uAyPsqcVig;-]IiT`vS}Bhl^eUtxYJlS(RN!');
define('NONCE_KEY',        'nRV=>V0,C4;s 9+[u7ED$N<Fyc>H.9JlmB]<-ot6FH`&v0+Ml)+wQl9>yWaKMrSe');
define('AUTH_SALT',        '{-v=#[o>XCP|,MU0@WKaJIkrra|:h+<e{Kvd?o2J^9bjEypxT^(frxwPhW.mk:)W');
define('SECURE_AUTH_SALT', '1y{)z.`wEi-@~,+In.ypcwk$R(CPTwciQu=Lj~Cin{im`pjj4>Iwve.iK4F9qAhR');
define('LOGGED_IN_SALT',   'sMY3u1v`4}QpHYx`1jooc>!@#EEO*,;~${><5TrWKI8n$1dEmhfy1rv=n?e4#Y 6');
define('NONCE_SALT',       '#kRv$t>U6Af&g0<hK_aCdB!WuD20J7%_i; 1_,=)#mtMtRL3B3n2i7?3M_?[j!cV');

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
