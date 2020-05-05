<?php

/** Enable W3 Total Cache */

define('WP_CACHE', true); // Added by W3 Total Cache


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

define( 'DB_NAME', '' );


/** MySQL database username */

define( 'DB_USER', '' );


/** MySQL database password */

define( 'DB_PASSWORD', '' );


/** MySQL hostname */

define( 'DB_HOST', '' );


/** Database Charset to use in creating database tables. */

define( 'DB_CHARSET', 'utf8mb4' );


/** The Database Collate type. Don't change this if in doubt. */

define( 'DB_COLLATE', '' );


/**#@+

 * Authentication Unique Keys and Salts.

 *

 * Change these to different unique phrases!

 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}

 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.

 *

 * @since 2.6.0

 */

define( 'AUTH_KEY',         'R^:rVa+T=Xa|<et-a%UeW$M<[WC1Vb][pbJXc}=EieVf,UZsFOW,o8!h2mH|L~n5' );

define( 'SECURE_AUTH_KEY',  'Z0P4V<coQ8xw&Lm#T<(->(d Y@2DJ@GF%yoFG4@mA2x>cpvCl RAEsNO5[s*}U^C' );

define( 'LOGGED_IN_KEY',    'h@v)^~^XChqHK|?%O{UchmnG?ALMA3Ff$72qoh-q(a]s^{+yWZkqCZ.?{B^dz)V|' );

define( 'NONCE_KEY',        ',*VUY-zC%zHW!$$C,MrzegfGT9Rr)3&~wR>kN/=X&Od|+)tcK~Rtix(bfRRvryzv' );

define( 'AUTH_SALT',        '4(OeZb&H}7n?,K +/q,j9L9?dE3(M]2Ft/Y6=m,4X]kEwf(Z1N!$NSMlxjCJ8h.~' );

define( 'SECURE_AUTH_SALT', '+zc4XEtg}xSbMW9].+GP:qDDK$*h9FLH}USrt.HzCXI|pL]b}CPaw=:__[xBcO|J' );

define( 'LOGGED_IN_SALT',   'up;V.l/qx.ZC[P)r$N*$}O<#4maqtr*K}Ar?s]XHS}bui_XW_&vSAB=#ZT=4y}DR' );

define( 'NONCE_SALT',       '`nxi%XWNPuTRJ`jMpv[XX5m;zsuf5xf%BmjK3dl@_+8A<XLC)#OrpftDvKL<z?js' );


/**#@-*/


/**

 * WordPress Database Table prefix.

 *

 * You can have multiple installations in one database if you give each

 * a unique prefix. Only numbers, letters, and underscores please!

 */

$table_prefix = 'hp_';


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

define( 'WP_DEBUG', false );


/* That's all, stop editing! Happy publishing. */


/** Absolute path to the WordPress directory. */

if ( ! defined( 'ABSPATH' ) ) {

	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

}


/** Sets up WordPress vars and included files. */

require_once( ABSPATH . 'wp-settings.php' );

