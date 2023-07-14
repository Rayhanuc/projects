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
define( 'DB_NAME', 'projects' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'mysql' );

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
define( 'AUTH_KEY',         'j|VM/5QuFUIYUf;T#NI}DA7 guan|IxLAWBC!DE}7lde2$MqWe5f@2+H*3**y4C*' );
define( 'SECURE_AUTH_KEY',  'MK.m:sbP;)nOj8Ww 5Qo*L<KpM-5jv{$0.yw.&1{gB/f8O_>/JnAXSbY7])lzYV(' );
define( 'LOGGED_IN_KEY',    ':cB jG=jJyuD>1sWQRsoqSX|-piDt={5nDC)J_B(r)oitA;G~IYMDtkD*SiDl`5H' );
define( 'NONCE_KEY',        '-Bfe>B-/WXd.F4?5KgN-U_jhCb92>Jo#X`WhX:OwN9D=a]4%A~0)cnYhyHq17jhu' );
define( 'AUTH_SALT',        '7j+ 17MZX5p9=GA@7[8?xDz+k<9amC*`0=+Q;V6J8A,M~;AgrEG%u)1UP+~ogAB+' );
define( 'SECURE_AUTH_SALT', 'p^h.8[4bM>:9h-mj47b!G*)J[r!GR, EH!yarja]?Y,/1#4<C[t5yQ/@WuOZ?~2/' );
define( 'LOGGED_IN_SALT',   '3{=XTS`xro6X5~?-vnj_8+vtPY/i+Rs857^ MRH;#oZz%Kv4P&!)U_5*gwE65V@.' );
define( 'NONCE_SALT',       '}#Bm5!TJWQkw$(NF$hS;;--H&CIyPSUb#4i+86i6*O-YB~cb)&fHrG8~!*9RhEzD' );

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
