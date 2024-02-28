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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpressuser' );

/** Database password */
define( 'DB_PASSWORD', 'password' );

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
define( 'AUTH_KEY',         '({506n+fpaB^Kg5oY0b$P0LTv5GoB8cpq_V*TFH;$D>ddUCtr5Ew8QRzKU,`~_~B' );
define( 'SECURE_AUTH_KEY',  '6dkSG/6X7[VA$i.JOEpK3$6@kkH9KhJ$5#Jl9xq^._{(mq0M`Lz)+[2;}^zL,knM' );
define( 'LOGGED_IN_KEY',    '<OOzKqZ6*yL>*@%7LR7*oLY,Oca]XKDb/r0@%,F@PDa@+V%6&{,:dY/Ry_$TjBd$' );
define( 'NONCE_KEY',        '/dp1|D}c%<NQ,!Gn&KObNc[vv<Wu9Z#8uS];+)XK^H%jQ|CCcF~)$o&`SnNtA6Uo' );
define( 'AUTH_SALT',        'RGIl=H~?K#^G/4F~GY 8C1%|9Bk#8|t@Xz*CjtBEn[[fNK($x.3`~2DG!|/0VRyr' );
define( 'SECURE_AUTH_SALT', '`6yIyyubrq+q.gSTSHzRR_=$+|QoeGkuX2jd=*G|?5^yay:[_:p^C)YGpTCT}5K ' );
define( 'LOGGED_IN_SALT',   '^sei| et.4?c MI$g2)9pCmplV+NA!GF`0at.KUs(ROk]Wg/4PY8>;nD10/}[>GZ' );
define( 'NONCE_SALT',       'YQO3Hxi95C)s=MT_;F[@>?&^bsFt>z@j#Hv0hmQ;2A 2On{@CD5!(!safa!Oi#]B' );

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
