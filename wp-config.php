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
define( 'DB_NAME', 'soci_arf' );

/** Database username */
define( 'DB_USER', 'soci_arf' );

/** Database password */
define( 'DB_PASSWORD', '#%!LpL9EhM#57Mys' );

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
define( 'AUTH_KEY',         '%cn)-;fXtHGm:%kGvK6tq[lfDTi_Up-v-F)58^vQR;+Q|s z&wsd9Q_m6a?X_wf(' );
define( 'SECURE_AUTH_KEY',  '6rm6$;B[: U.6[`SJJ(Rf[&]VkOgTEC^Fkqy1m48^*l[u5EN4ls|S2|ZCX9Ef7T~' );
define( 'LOGGED_IN_KEY',    'aaUn;caBwv$nw;fx5jsh#r[.?lz^(~%})1g0EQe?:$fpf(`&9mY@l9b$:f=[Il3Y' );
define( 'NONCE_KEY',        'KeizZyaYU2-*-[/n^3,4!98EIt!=TBh)#}qz(3VeAR8?q^^@O*MF;n@TjL|2;%%x' );
define( 'AUTH_SALT',        '9X[_Cx@8|3,l?{n#4nxhNPmzLG_k.V=DD^ezM,yzs*^HYb{BAgR:JRiak~#V?-?p' );
define( 'SECURE_AUTH_SALT', 'iFK<cYOntgP%aqa?vS-&uq<GK+gW5/1HSgA&fO)(YH[L=#]@{W-C20+:@Kb&izC6' );
define( 'LOGGED_IN_SALT',   '+hl><}ng+fEjEEoPi`xIn]y3|6wg9f[m./uq |g$OT;$6bpa[:+6+i-KT3Y-@Q](' );
define( 'NONCE_SALT',       '9dhZn7~B+wQMqB(0;>e`9UGP}>I9)k`E/A3{):p| ;: T}!0 3,{<@W|>:K)D8Y;' );

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
