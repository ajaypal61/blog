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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ajay' );

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
define( 'AUTH_KEY',         'D =1[Jnh+d!vT{9Q]m|YkL||,3A.Cs].3cWda H;:]jagr37cL_OcWiMpUWCNNk0' );
define( 'SECURE_AUTH_KEY',  '.2wPA[Py;9UZI&1x)U_1-Vq#uh]FJorrrR*R^&;SXP/~XiZ9#$27,|Q>49io{8s%' );
define( 'LOGGED_IN_KEY',    '$s>K5M>wXDds|} D_-qZVWg&!]C?s7q<k_Xk;_=0L*%opAV ^ncfRUGDEGbu`_K$' );
define( 'NONCE_KEY',        '4x$*98*f0Mt.|.!]<zV<;3eNq+Sao{XN7@|iVCY6<SPCLWA|QB.#*5($cF=|?6D2' );
define( 'AUTH_SALT',        '9fE$}9)9x-L;pEa:TS;j]k+(]9Czuw7hWux17vp$W8d.]V]|86!srxN6A`!=RFj/' );
define( 'SECURE_AUTH_SALT', '.]m#qC>O7 >-s;jJ0C!@jJi Q}_#ZnnwLv6krpc,]ca/JnPRHHo:k1baKcd7VE):' );
define( 'LOGGED_IN_SALT',   'E?9u]h@f,XqQ?,J8pVoDfcFN|81?lEaKYl: %Hbs9xV`pE(KR:8y{QjwiVmQc|MG' );
define( 'NONCE_SALT',       'TB]5mq2?/1E4^q4sW=7)}I`CfCzf(&-dk(CD!=AZ[nHr7;m!|W:tx-^PBe]&7h@)' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
