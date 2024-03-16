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
define( 'DB_NAME', 'wordpress_plugin' );

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
define( 'AUTH_KEY',         'knXlKGHo&!TUo;B4t[>5$0eK[gtb4[alodP<-fr^e-av9!lWtRU,&5yu7C:>aTX.' );
define( 'SECURE_AUTH_KEY',  'q[nEiX%HB[XR>$At[ENQH:4/QVYA=Zmb(.>4.3Cz.h-D+7A,eVRG+5yf#K ms;RW' );
define( 'LOGGED_IN_KEY',    'B*a)g,O}@Uj-3;vd4QLZixA czeR2oS}4N&qi/Pp;[MjqR0GfIXRu`x=SFIkcs.%' );
define( 'NONCE_KEY',        '-9i!LS.uH^g{x<3G&*Vh!Mg9h~(:0fzlpzK6p5!7A<h6:#0%%+V_/g$G.,rSGD>u' );
define( 'AUTH_SALT',        'EuqWgL:|o_Wp> Bq4}/y6rR~E3?k[ZJcfGfy1#!%=Dju?K+>RO(DCJR8,*;b^S=?' );
define( 'SECURE_AUTH_SALT', '4|$^XWX}-)n6U,|0V+V29=Y]%efc+H (7X6^<lz^X$Iu(hqWZi{qH%c=Q6,kbl}n' );
define( 'LOGGED_IN_SALT',   '1[$^t]yg{)?PWF8#*Db A/7,hqlIvWk+jEEkr%J*@8OG,|=M~~.%;-n`x4;Y+fk3' );
define( 'NONCE_SALT',       '(jZp)frP5LUU/R}{gzm-kT}uA{b%!V.31sBSYXKfCb`mT!5&3sES2?V$Z{MR#1Iq' );

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
