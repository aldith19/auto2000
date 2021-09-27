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
define( 'DB_NAME', 'website' );

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
define( 'AUTH_KEY',         '5he|8Q>3M_#dV{?rY(/fciChtidvF-=Q%fGA@>Mlc{tFdx4rjcz2:)x].FAf,LeK' );
define( 'SECURE_AUTH_KEY',  '5U]yrLC2@|h<+4M%K7sb,-$bk^,IdzlyUQ&<% e7J Dj=wXiv|X0&QMT ^xw1_jy' );
define( 'LOGGED_IN_KEY',    '};we=w*;BV61U*k36q{U{/VZ6=C>zQ,U_$)jy(@iR(1j5WV2[.7Jmza31t<Uf(E^' );
define( 'NONCE_KEY',        'e?UpFJx]0!>,~<j8{=@^n3&#&}gy[nJ?+{OMVS.lFc(Fg3~,Zzn3.+40K/u@4.{~' );
define( 'AUTH_SALT',        'Fe}IGYL#hLR<X&!Q5xlK*]C^;(q=dqWe5BG qb$2W<)7+e56{>yDt)6QAsd)tB%{' );
define( 'SECURE_AUTH_SALT', 'JRcEPRp ~tfGL|p_DKaehgTGI?Yvvn+$-aN6^x[l0htY0gs41r-:`I1Pxu`L%gPE' );
define( 'LOGGED_IN_SALT',   '~$)7.@D,<iWMVI3fB>ihHD@@gG#[v6>Q2)f5MAQ)xnUD{K:1^O5`IdE `kx!nP8h' );
define( 'NONCE_SALT',       'Nen-<l]7BFKYFjsfD}p^e}&!x!KGu.)W6rp#tqZ*6RvC5@E0EO`E&qP,+68grPDp' );

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
