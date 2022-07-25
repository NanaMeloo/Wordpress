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
define( 'DB_NAME', 'wp|adriana' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'gigenwac' );

/** Database hostname */
define( 'DB_HOST', 'mysql' );

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
define( 'AUTH_KEY',         '>x[4e|!h[8hpy##lypY:PXCx3=~H0/[KUT_LWT_U$mQiXebggdk|BEr,0$Iu;57g' );
define( 'SECURE_AUTH_KEY',  'DIoO@>w%mZ%6%*?SEW1*7:J (v(Z_4v&NG}m+hm02(L#PrF9r[j[xs6$12tbvBz$' );
define( 'LOGGED_IN_KEY',    '<JGtZEiQtFO*y{[I<En&s~H8 0%zwKb>c9<V~dS36Q^JC[hL[Hp,sZL_u+b=tJ5:' );
define( 'NONCE_KEY',        'NHs_2K&TxY[<NuH[^- *kJKJL{44Fw:NDZtPE{C;;;p4<v!0ry}9xE3r7p:8`+W{' );
define( 'AUTH_SALT',        '|`DetQQkuf5+Ei/tw)~H0ht:0f8g/idTEJ%h{ofM|jdR--76fLA6=?w080tbO7:A' );
define( 'SECURE_AUTH_SALT', '!324JzEt e6*Ho^oz1wI+s8RZ]3^E>qv(1Ap,(4{pz}-a-.[jzbjyWc|**uyOJHa' );
define( 'LOGGED_IN_SALT',   '>)i {~t@t& [P3iT/rZ%3L|3k70l5RUty<uCBD_9zKK,w-9E7W;>(vhcGEcLdaIn' );
define( 'NONCE_SALT',       '$6IQM,MVW(X?cRTQ8IH7^=S`cO?:(esqI1zL48otUY/`x~*)|!qFGqb@G_g#BJo8' );

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
