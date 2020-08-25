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
define( 'DB_NAME', 'route-academy' );

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
define( 'AUTH_KEY',         ' ((=bIn+{9V&s<`@p@gOuAT[qv($q7j5>j:%]e)va!=~@grvt >sU@-*(B(&1mOl' );
define( 'SECURE_AUTH_KEY',  'p*5SA}y=gCS*a~vM6aOo5#o3K3a=34sVD[clx{/sTKHvW?:Sg U=b9@~gy#rGnC%' );
define( 'LOGGED_IN_KEY',    '0!}[=U$cYb>fZ=^{A5%pt>pwc_DJt:dLa[n*{6tA*72u_.u]&D,MeH,<?88d=O@n' );
define( 'NONCE_KEY',        'T(Uv{!BPK.|+=$e8t0+h,YVwz+edO#H&-a];.+C@ZLo3933DAN)D/_PS^!?l6fF@' );
define( 'AUTH_SALT',        'fT,+~FXp1 PMxE2YT .{!H-)s@yRfA{,XXv9-%93]#pdFseq94.Z13P@~kJkuF$A' );
define( 'SECURE_AUTH_SALT', '/+wY2z_(jtt&QpQu_p.ZcC~Fd4~u`5BD;@zR3o-fR|NNf^{6@L-<kPm^bg<jTivU' );
define( 'LOGGED_IN_SALT',   'P-3TK:T7U4(|]U@i6G3Vg;IdWT#C+-=/(m!{6e{#/p`3emQJ~_YM8j97pW1:bf&;' );
define( 'NONCE_SALT',       '9U1=O&XX4YlW|yieum I.uybVV#7fOfHlsdldhgz@6W15nn!&}DHR ytdd:(zm9|' );

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
