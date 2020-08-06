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
define( 'AUTH_KEY',         '*mBpL9yD?.KGQ1?B=EsUHvk{|fqv`9u7t]ZuD`tKCo[:IAMS{7(*eE%NlUwCMbfY' );
define( 'SECURE_AUTH_KEY',  'MCOw.t59q*F!cp%ga5C9fuKODUI.C1}z-V6>m#h@] u%b*?7!lV3M}|$|o3wX S|' );
define( 'LOGGED_IN_KEY',    'isrLz;{/wimoa-(;6%ycV4x~yYdnBL]e.`qt3_j5<Y!=A/,^}@/)AUXS!JG>7@Fy' );
define( 'NONCE_KEY',        '3zy>Jxi7&1En@&q([RPZDF3rcQR@>0P;}Gp=4N&,>LVpdk7PhB9xjRKasK!g1,pl' );
define( 'AUTH_SALT',        'gm9zGbTY)[j?0q4P<4d@!X>k9.n)4Z[YZ^HstyKde(uVRbemVo+F)NkF`&xpUn6`' );
define( 'SECURE_AUTH_SALT', 'l7QKyrEF~s?|69[}AXqgyLMKKjI8Q!;i3^UdX1Ye)W.x+N|DEEArd1.fLt2< FX&' );
define( 'LOGGED_IN_SALT',   'z%DneGTJrPyq[/FT2Qpi9 M%[%Rk#I3#|L1[`+M#-pk4V2U]NbpNX@BoXM] OVP|' );
define( 'NONCE_SALT',       '3Ju3ag,3cti$LE3.i4B8]P#ueKWVI7^kd~Ul3&,Xi+6I17*$%mFgW8cJS|:Rfc6T' );

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
