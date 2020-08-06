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
define( 'DB_NAME', 'realwork' );

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
define( 'AUTH_KEY',         '~@QV`n,~DXBJ1;Z;Y9bE*e<SvMn6:uoLCX1z^zB<3#$#kk?C]1x ]v0Y-N^+WzwV' );
define( 'SECURE_AUTH_KEY',  'd5K@x4nR%{aW$MR1yZoo%rGY1C;^u v?4,8`RCk:C?SNnt[dH}hU3NAb![$}W{P=' );
define( 'LOGGED_IN_KEY',    'j_YI7;/W|:P=-Ru *QF )%hS:},Pz:H:OK~=^1qdIh~)B>Pat04!%}A>qn:ii~ i' );
define( 'NONCE_KEY',        'uyvRP9*?:gQ]?dYD^E?8$fIFS1N$x(8:#PPy(oBKvb%`+>O5vsWC8YARjegYuFSu' );
define( 'AUTH_SALT',        '.XvCi yPLm{WR-$_-E]  4 ^Y];Y6%`~CU9`.ufr.2LEgE>_qLiL2dOX0mu%XjMj' );
define( 'SECURE_AUTH_SALT', 'v[vzV|LZhsv)5I;_I]dFp:Klepg)7#=L&8R:90TAmiw4Qp{T+?qE_;GuJ5z~()IP' );
define( 'LOGGED_IN_SALT',   'sAdx!#|R^LXo*hXRx}|k-xtK.FrS|Rj1WPhM<>G,s~[w^}9/EHd2eR9 8ufbP!<k' );
define( 'NONCE_SALT',       ')$R*QOiZM ~S6F|2]/eB$gv[-V4T>:#S&q}5,OjR;2JcYbV[2{&d8>`:f>+nm,E3' );

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
