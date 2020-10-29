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
define( 'DB_NAME', 'enatti' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password' );

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
define( 'AUTH_KEY',         'V_G{JZdiTSUwc#jhXBr(L|ed2UOCOsbl>&~kx{jl(R&ey}Bl8=dh|=jyY_^Ty}]^' );
define( 'SECURE_AUTH_KEY',  '{|a{eQ4E|AEk/Prh/=){c*:H4 TR_[#).!0X@hbdK,lNe_%NTEloA(vI*#/l6ZS)' );
define( 'LOGGED_IN_KEY',    'D(rl]l;O/-ioovO}(olCar%o)d>8+e-GECe*c2#g6}B<eAel[+Q>7Q7-FdiJ%7a|' );
define( 'NONCE_KEY',        'D.}_T3VEk*5u+N6i3tS`Ov|^;=GUjt(VP#AkFxZzglOMycu]1<^):juK(@7oen2;' );
define( 'AUTH_SALT',        '1 moU00Ecm^$fn)S{U(RH0,MDY%~i*|_O_-23[8Rg_ 27Tz|(lUd*L_ClUc8$_3:' );
define( 'SECURE_AUTH_SALT', '}7AG!`9YaV;duE8{:*.N10Jf}X3jidL97BC6?:1li;/dp=R;:HG;*mcAm+>@pg`y' );
define( 'LOGGED_IN_SALT',   '4{a:BDPrCJ0zXn7<TK^6SiqUY%f8i];c+c{2S35!.mksnX?wXQA5mmi-Qsu`/c8]' );
define( 'NONCE_SALT',       'm^=6s??+xR{Jro0P%6?|MgL`Xn*`vf!*)WOm@R=3hN,H~$?KFvg&R0~j;[JtNCW1' );

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
