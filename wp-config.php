<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache


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
define( 'DB_NAME', 'tip_en_13er_dk_db' ); //vi må hellere rette denne

/** MySQL database username */
define( 'DB_USER', 'tip_en_13er_dk' );

/** MySQL database password */
define( 'DB_PASSWORD', 'anherA2ExHpm' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql87.unoeuro.com' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '*of7~&g;THCUnptcVt@XB{}4!<@:nX(F99!Gs`wZUpweuRe+^nff(^83Ro}(~`Lz' );
define( 'SECURE_AUTH_KEY',   '$R{2&_7(.M4F;II#|QWb.YBk1LX;vqYY6T%9Z98i(+FMs=2Jl{3W^H]T~5Wy^A-#' );
define( 'LOGGED_IN_KEY',     '63G*(51_F8VZl}]929]<~ ?OJL56&SY1P|4p?m~l_r)O.x&;9I_4XQhH|%^2zb`L' );
define( 'NONCE_KEY',         '41{B,<gjc(l{9S,m@E/RV2kQ1!BLz~uh4fY-!q1F|WbX4Z7/HaeKP~e[,zt_j$ZK' );
define( 'AUTH_SALT',         '3(jZ@m&m]?e} 7?K-q*Y&C*<%nH~;r#HlusbnjU/Lvelt7Bo@E#*0&?M)Yo/[m~d' );
define( 'SECURE_AUTH_SALT',  ':I9lMfDK=RmqoBYkEItiBk@7uv8p1Uf6.7Y_>o2,Av%|dCb+`_1+RQT3KT1yyX3;' );
define( 'LOGGED_IN_SALT',    'son~0z92WHLH!*z.~2jQ-H1!M@p~:F3GM+U$_@J.UTg(El}}#_FjS,Q1Ct4hDeH~' );
define( 'NONCE_SALT',        '~mv):@#,Xpc5w^lC-b*<?O9FXlrbixK2vL0@^s)*z2`_;x2pCls -NPQ;Oks|/;R' );
define( 'WP_CACHE_KEY_SALT', '`ts7Agas[.X`)~~m0CSmTE~gj6>oD;Z]Nx@)wZHHjpMX,/y3+~9BzMgZiKv!63P`' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'clk_f10291d25d_';




define( 'WP_MEMORY_LIMIT', ini_get('memory_limit') );
define( 'WP_AUTO_UPDATE_CORE', true );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
