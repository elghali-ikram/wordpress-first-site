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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '(i|1j]XTH`*!S_d<U%S( :E%P|t*?BTM(1R`Otu%sEOY8EJq,EMU2#.nJ.&g2[eK' );
define( 'SECURE_AUTH_KEY',  's:Ov$eq8yzjW&0q*k@rRLE>W0g<SzT.NKbOX^?~<j;A,,4O;Oah=Mrdi2C7-LtDn' );
define( 'LOGGED_IN_KEY',    'w|5g(=E>(],*~[1.X5Qf@o<XU9$a`b$=y?vmO?.._NI#Xd~$uC/X+>Mbn~6I>S-K' );
define( 'NONCE_KEY',        '_qpArzC-)vjpfkvPF@@@i+Wgyr~8Q_02I<uw0b?_h87/KVHVfg7b^HN,0CVufY S' );
define( 'AUTH_SALT',        '<DwyY{:$VTeLMp|E.|}@uX[=Q(:g,SUPMxcHoaa#[WdQ$h}I?I.P|uypx1]Cc&/g' );
define( 'SECURE_AUTH_SALT', 'MCWs)(KVfX7hF)hN zK:,a#*T* 1rRG?hIw@Ie~d1H5T?9}B|bM<zqgu:;-g^-vU' );
define( 'LOGGED_IN_SALT',   '*+Gy_A9_Sk KafJa!|:[9uhd,0-CidSULJ%7?Vz.>Vq=d;#Dt=-9~,uqE#>p.+N/' );
define( 'NONCE_SALT',       'ahl[4]0iO1m?Ee);1odC4,]B0ghK=/KTcE/B=@9GIG+3*CJ4>rN89DjyW|K7x_FM' );

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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
define('FS_METHOD','direct');
