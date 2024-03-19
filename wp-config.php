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
define( 'DB_NAME', 'earth_society' );

/** Database username */
define( 'DB_USER', 'site_acf' );

/** Database password */
define( 'DB_PASSWORD', 'jz9oK03X8yJt' );

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
define( 'AUTH_KEY',         '}#)n.GQM73}fs(6R:&^XrY|m~ 6~%dQaxZ.}R~m)Jo|8F;|,LS]fL:7sb5Owt1u_' );
define( 'SECURE_AUTH_KEY',  ')e=4rV4({+MR;*5]@l19dsbUQ%Zg~u=T^Y3w/;j:[DRC+lxwAiCa[{&A1da!$rA}' );
define( 'LOGGED_IN_KEY',    '[6zp{&<Yd[%<D2CL&eQTS6;L,28+dI8MDc?w!cY{RdJgaaGBRD{;x=)$ErHcSx),' );
define( 'NONCE_KEY',        '_vgIt{Uj5(I8xr:b&`XTHW+S6&Ra5Ui1g[GE)%z(6Be-0yz~@D%vcN3R5vN}L^!?' );
define( 'AUTH_SALT',        '`WB+A)8|<u`i#N}DLG<6YtGT6IRLE5^U=fUFg}g[Gw|IfLw~{r+:Qgxi&2$Hmd(E' );
define( 'SECURE_AUTH_SALT', '<.nb#>tYE<^Ek[;~n1iEX=U)!@$a`CUV%gc!1X!|J72LA5jrP*|*|A@8eMkWNG-i' );
define( 'LOGGED_IN_SALT',   'x*c8<0l[dcgFzhZ-#B8yURP+^5_YR!FJ;BvdbUbbp4H#BtYt6+*S@<rU<T4#I?{L' );
define( 'NONCE_SALT',       '$YEw%V;}{[R`*F5k<Aa3_XuTeMD};)U1-6|^Q}C;$3CM[tQp^g?LC5)N]GGG]*dR' );

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
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_DISPLAY', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
