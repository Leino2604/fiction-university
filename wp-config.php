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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'fictional-university' );

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
define( 'AUTH_KEY',         '8Ec-iW`>#Kj.ak$kw3gK)mz8t;t,aX9 nN5^i|<6*$B5N@Jq?}$SFNyz>G^1Ge5r' );
define( 'SECURE_AUTH_KEY',  's3> |g.b1voGUS!nG/RSZ_KtnmN8.svm@B$9KUq%,<AZ24.<R> .T4>CB*Tg&0?k' );
define( 'LOGGED_IN_KEY',    'zt8_> i&.UbgiE6RyKah^^`F64+xkVNK&-{feWDE#zH^tC8u14J$IxxC}Ml5ka#4' );
define( 'NONCE_KEY',        ',~^S>!r5IB5M%/qKIeXO3$vi% ]wGYY-~>yVg_wI{g8pgq^O,XZaz>,bP%p7Qt[0' );
define( 'AUTH_SALT',        '-w4q>|BPL>;D1wRA3=u3^~HWekc,F$e88apbl&&C4`Io3%6&79=c$)%k|%%H,uVr' );
define( 'SECURE_AUTH_SALT', 'Zzp?*6Ck:=DhRt@ P,77au@E m?6b:b[b057qxB0kN$UZl3f4SPDCHJN_)XJL@=/' );
define( 'LOGGED_IN_SALT',   'uGsN]MJ$!#>N9#2Ml*-SvVK$j;N30$=Wf=reO{pWT_D.eBgW_?F|.@J5of9iR3^l' );
define( 'NONCE_SALT',       '8^BjVX7nO:m*ah6d2E|#lN*uXB}!i!fvf;k`9Y>:i]x8&@!lIiAo{ZCMYq&qz*h.' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ficuni_';

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
