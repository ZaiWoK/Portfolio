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
define( 'DB_NAME', 'portfolio' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '*ug]CtF+J0Ih[gS%m1Q:E:#QO!PEKR5d7V)v:j sR+,4.BE<WkO?0G(nPhiOf.3q' );
define( 'SECURE_AUTH_KEY',  '7Si%eXNkO]aV{u}|0(CRM]e|`R;P![<LPA6Wa*zGP@2_U.<<VJj/z33IW:T5cV%D' );
define( 'LOGGED_IN_KEY',    '&%xnQZNAiM3hf9PHsfZ5o/SG-U+QI@mp@F#t_O~HU*;=Y%?VRf,y2_lP,}~e?TIK' );
define( 'NONCE_KEY',        'qND#Z4=N@#Fju2K@O2ionbLaW3-R0H6V>&K3wiHvgtfXI*]._s310->7e?607.Gj' );
define( 'AUTH_SALT',        'C`IMmENifvm(X!m~HuzZ|4Pa=)m0F_!cBjM60[USrYok5OYd)DP8>_f$rYh&>$aj' );
define( 'SECURE_AUTH_SALT', '4: <3y#-XtL`,$Wl~_Ct%u}R`4[:/[m=>$s1f`N6gaA>]F+abL19Y<2tH.L:*7X|' );
define( 'LOGGED_IN_SALT',   '9@Xzj x4oBH4AmtkdP]@qHSRBPzivb^>)8%f2%s/kP9O%Iz!j^rnrc6pP(WgK&,m' );
define( 'NONCE_SALT',       '.$l:XUImWw:RD6ftu?duH5C2Y@fxmoz)&+XA+p|s.|+4=C$-r-0:yCf~8f~.J_wu' );

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
