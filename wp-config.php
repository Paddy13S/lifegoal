<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'paradise' );

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
define( 'AUTH_KEY',         '4vK [+m.@xv=<?~yT||gHGMTbF4!8gg=CGRSce{[!XY0+y%Os[2o#hrY$kphfh{q' );
define( 'SECURE_AUTH_KEY',  '#)p/54k%R/gz.5Sc2ijV_o~A0;r?w6L*ypwF3+)jnz$pEkV3-RrZ_]j*uB#8)Mxy' );
define( 'LOGGED_IN_KEY',    'pnX;F&]#5ld..SoS9BSW+^LNb;Co f]^]&q4qu`[l0Iy8Qq,_;^Tx{!*PbYm4@@^' );
define( 'NONCE_KEY',        'eOaw`Cj-`{o5rm*Pl=CBuD4sU?Du~pi$q0rHAR;/FJF6kZ|hn]2(IR {Rs>;5}mD' );
define( 'AUTH_SALT',        'v6*J )b+AV 12XLu$Q8;-g!l0Seyxexxp#}L![4A{!BX0BSB]z{oA~!mM.9,.yAO' );
define( 'SECURE_AUTH_SALT', '@U|Z|@Mt<fS$8v%5fH[a/d [[J1r#$I=j,@>b2/E=h3,(?fKi><^*&)Cwzo Pq=7' );
define( 'LOGGED_IN_SALT',   '02>V3d_|2V(9E-,~C8t%SlZbR)X-Q,f;7b^@hxy]}jG`VOW/vo5X8p)&FXxugpNN' );
define( 'NONCE_SALT',       'j[_)^WJ})ZI|h|uOH|(3vPCtc)mM}4A]Tab+!wPw58mvt=mR1voLLy?J]4c{)!1a' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
