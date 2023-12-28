<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'u625668561_V8SEy' );

/** Database username */
define( 'DB_USER', 'u625668561_sM6vX' );

/** Database password */
define( 'DB_PASSWORD', 'MLHeLxVQmd' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',          'Ft)%>#wF};.BcLL+2Q+Yv_&D)t[zW`<]koQ_/HJY{XSFj9Prl1n5`L}G_!#Ee@Sm' );
define( 'SECURE_AUTH_KEY',   'f}_)/S`=@YoKeECWJjm<$jHgc(kTFDRd1n|(c~N&zZQ[jYVD^md`Z<G2!zee!^gU' );
define( 'LOGGED_IN_KEY',     'gxjb/el`K{h]w$x3Gb_Cl3Ojw_hSS.7@$VC:u1DdH8@4zOpMoHrX2lK,& F8=g2$' );
define( 'NONCE_KEY',         'vY+(bU]u5S<J)i+MYM s6R,Z4Uw`6&!v3v$FF^==[0~PcUir`$_A/*w=u72@Fq4N' );
define( 'AUTH_SALT',         '_.=}&n_vD&t}DwH8ap:/ON:BpuE@Uda{5%cQ`^^~y;4=oShFZlKjw6NU9)sJv*Q`' );
define( 'SECURE_AUTH_SALT',  '%I=N5(o4]6No,zv #kE1L?K/p,rhm^mW:mp99+`0Re|Erz#QWDhk)k9+vW6@OZWB' );
define( 'LOGGED_IN_SALT',    'g?ukE0quLlX/tqF*feEozC{IPot5og;^c2ROf,qqW68ej{OpXh Sc@dA1]G>=EiY' );
define( 'NONCE_SALT',        '02*@|SB_L}cDJv#7Q~3U6aJX;M.3qz2 g(*D29)W&+ZU}?K7@<fE}O7^$E#okcs6' );
define( 'WP_CACHE_KEY_SALT', 'O@#uambT%j#o:{Fh]}C4m+!Wq)iMO$E;vdk|iUBn^q0E8#;cyQBsR$v3vI6y4n`)' );


/**#@-*/

/**
 * WordPress database table prefix.
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


/* Add any custom values between this line and the "stop editing" line. */



define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
