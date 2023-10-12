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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'shop' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '6U75Nbq]@&:LjLz0AuwR%y={eB1XQm);DAA$G6edVSu8T~xZp1ak)HV=>dfg->BR' );
define( 'SECURE_AUTH_KEY',  'gIFQEOMp|*`?]N(N.=.VyYtb4*+fz,I}:4HA-sThaVS$:K767t*0;UkCh{W(g=*3' );
define( 'LOGGED_IN_KEY',    'i>eJ12ot,As8g;36_jS!iF[#l<7a5MqOuX$F]14H9vd}<Y/)[XWUE(Yp0|(F{m?:' );
define( 'NONCE_KEY',        'd1O0ljBCe6xXR8n[ $,HYZbLpx&e0H2$56nxn3_B}V]Hz4Iq^o5ZJfLEEe]VKa=9' );
define( 'AUTH_SALT',        'STTMp*cre`wn.P]@l!<=O5A?mU%$p!9B$uvHpzd=-oCet vmsjVCaLExf]0BJ[;h' );
define( 'SECURE_AUTH_SALT', '#!Z*zE/Lf~N:#jvb%W*1uEh6q0eTi=F+*-1q^:%A6i%|5{+4H;^>cxTZR`ViFa.X' );
define( 'LOGGED_IN_SALT',   'P.N{(We<?aLlZro{u_a&6Vm{q]B^:i*=LdPdKfD%g./]1rDorT~.]GiN&_F]5J90' );
define( 'NONCE_SALT',       '%4mF:;I[nSD$U<HzlY4yE#*fh>*BYFs+?!AvQq51id~?`x%]#%S+S>)7_NN[nSV[' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'shop_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
