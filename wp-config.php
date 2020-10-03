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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'lmadvogados' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '1qa2ws3ed2013' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define('FS_METHOD', 'direct');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '3HEwO}*zpoe?_Wz:[B9`n22&<Tuu_<bt3?uY?@x++DT%p0r)%qdo4FNFDv]y<SqF');
define('SECURE_AUTH_KEY',  ')r^=+Tw!&kxM#L#gIKn[k&WC?2cDPS/w2>rp}eT#gt{4;~K?=I|K.qK?udy~?S|t');
define('LOGGED_IN_KEY',    'C5PDagv<e=tpJE(X6z|#r Y`DRBgu]dK5?uU%d8/0sD+!gI}]JPl{/4J_[&SroQM');
define('NONCE_KEY',        'TkX8@-l:?@<c%RoVK`1~%L|#4n-reuv@ ;dAV0PU+,r$J6#0#GV)S7T*wEcOi(#;');
define('AUTH_SALT',        'k_WTF#VP@QWZV.fTAhm1X @cI$`G$ob1]CsNYO|0%.#y^ySi-Lho{A +p$a|UQ;L');
define('SECURE_AUTH_SALT', '1Xb<ej(CP>n[2kb`|Vs!+!u.u)jm+-nI*8Yq(~eb5nw4#yuUvZYKZ)ThD8DV|9<J');
define('LOGGED_IN_SALT',   'sJE? B5|#ZZ.#C~Fg4^3kom}=^5X|x|dPp06oFwVWyzmzk6h>9Wwn/ `P+3scn,&');
define('NONCE_SALT',       's.K*XJv8loseM,o%?,F/JL.6p%wabzO|,~657k*:zSG>@82=xfHu|b^^|H7&0=Pm');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
