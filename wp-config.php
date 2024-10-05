<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '[JAFc%VW)mu8(%$^&LGq-k^ .&}[jc*szyq11eG5?@PUNo$WH&kyAzM(XD]^~.nf' );
define( 'SECURE_AUTH_KEY',   '[dY=s,LVG+AgQ9KAEJP.z1gLc7~._2/^;|($nAuSMF*!&5{,%}h!:I3c}}a%U_{4' );
define( 'LOGGED_IN_KEY',     ' %AhD<<^rARTgz*6oxUJucK^!M]usc=;t)cCEyHF^p!eT`}zgk2^1uFVGFe`xbe~' );
define( 'NONCE_KEY',         'X4i mK=;_p#p`DR~=Zbs6Ub<&?l;?)yzBH|VO1Az1R27ZY/0IG={wH^WEJQOm*Tq' );
define( 'AUTH_SALT',         ',=GFPa]xVS(sAPS?k/unLDnTr]EL4jWZWKLEn1>s5w<y>>?z3vNh2c0=YrT^Yz~4' );
define( 'SECURE_AUTH_SALT',  '|HcV@82rW{fxSGu|M8{:pfWw:s43Yq&x&.wQlDOoho$r)K#jRP*?^qo``Z/DG~7!' );
define( 'LOGGED_IN_SALT',    'tiD)t~2lL_kUqcb]& a h|@15d)l@a)bT,RLYT/M;5j @eAtCgxb{(i]x$g<U&$W' );
define( 'NONCE_SALT',        'UFZyJnQzwl/5.+RhaOhvwi/c%H$01+<g%77Rv45%2< frYx?c.(%0`k#pK`3D(bs' );
define( 'WP_CACHE_KEY_SALT', '{U.9Lv|FnL=1b2i,A,I)xt0h.|07dh!.n#uT{d/;1/dQ,8/tQY31V=$bac,}6E@Q' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
