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
define( 'DB_NAME', 'liceulteoreticlucianblaga' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/** Disable file editing. */
define( 'DISALLOW_FILE_EDIT', true );
define( 'WP_AUTO_UPDATE_CORE', false );

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
define( 'AUTH_KEY',         ':?CpsXY|S,!wwugU`(N}*SWC/1?L@(UCJ#9c(yt=Z7E.;4|wi6qlC/er DDaZq(E' );
define( 'SECURE_AUTH_KEY',  '<|Y=U!~i3nX{~Opuh>j29uu)1S;tjql.<Y^:dx50]4@|DObqE>[1XSj{[Pw+UlN8' );
define( 'LOGGED_IN_KEY',    '<tab9 Uu&EEEQ+x*H1yz]Q6b{(R;%Rn8g`<2L=6(F%$A/VQl/|tdP]j.J_:&k1zA' );
define( 'NONCE_KEY',        '_w({tqx$gL8u[on`-Cq;}Mg}SEk}fc)2.6xx-l-Re8U,[.iVG|->p87dM&!>;GI6' );
define( 'AUTH_SALT',        '6B)B@b?q[%FZ@)=3k5&&W$tEz{bBYu<#FP!6^=nMQRb`.Z,4QnG*^,yjbn>:Z: |' );
define( 'SECURE_AUTH_SALT', 'rDx3j#7C=ivMfEV.9&P6%$Jo:_qMRDN6V|!Q,{dU# Q-I~c7IG1Nxvw4)6/;c9ex' );
define( 'LOGGED_IN_SALT',   '6J)LW3$sWZz7!ZzWVk$=v*Eu/R =XYc]`$:z=;YE,][bMWaN^83m^^L:`pK-Q]&;' );
define( 'NONCE_SALT',       'dUIr%:r?Cas0,/qrp%DGSOOs 4u^23Za{U]9-RY#<g7^WFiYyFf?:jk</obVkcD/' );

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
