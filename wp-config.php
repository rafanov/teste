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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('WP_CACHE', true);
define( 'WPCACHEHOME', '/home/u731432606/domains/estransportes.xyz/public_html/wp-content/plugins/wp-super-cache/' );
define( 'DB_NAME', 'u731432606_eqew' );

/** MySQL database username */
define( 'DB_USER', 'u731432606_eqew' );

/** MySQL database password */
define( 'DB_PASSWORD', 'ZJhtGTcsyrZ9' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          'Cj1b~0}3OE,rjVwoRYvZ>6=9X`..nnF{YW<dz)TKQ-d&N7((Rd|y-w6leV+*}Y(/' );
define( 'SECURE_AUTH_KEY',   'i-+d>tG90lnbIW>SZs~o,~3J1gh8)f5sVL-uV.+hV1%HXkB-P^#H39)f{3.)<[3g' );
define( 'LOGGED_IN_KEY',     '|}i-4r*%BDUMfQ%y0Eq,]>oYBe)@,jCt4V=#}3[^cWzbWws|g|[Xx0M=6Xwe*~Tk' );
define( 'NONCE_KEY',         '{sgKk%Xo`6oP(=Xza-m[C0X4w0U7}4dZjh8^d[;%gq_As`NM5*zE66E8wsO@nw9k' );
define( 'AUTH_SALT',         'Gn-}FB#M,A$/i,)5* (VoZBYw1;%*D^_9h#x.0(fE#?HFq89etS:QR4@go(54?P_' );
define( 'SECURE_AUTH_SALT',  'n6[3QN~Ty6Tit+9KIK7Bk-t4_0WEM*!7g]<b.BH^ag&|9h93{@Y>h@=Fh $8%tAS' );
define( 'LOGGED_IN_SALT',    'Vr9}[;nm6 g5NfO3?:]|E3C=`_,e/KZl~XMLreq&-Vzv37Gu`([&I=RW`vrM$w`!' );
define( 'NONCE_SALT',        'n1?}pl6RlJ?KsCF?n7-{Nc$Fv_ArYZ.6=&|M&NnvN2}[91F@ss=hY[N|E#8Tx?)A' );
define( 'WP_CACHE_KEY_SALT', '*oOD,t +OjFLeeP~b(WKmv8.yvc0CdDCz,,R`/ZRSS7tC(FAm?,&+Exw:3F{6*!m' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




define( 'FS_METHOD', 'direct' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
