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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'havens_charity' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         ',BDfrdv2dIXqN=^ {(eNgWy8?wBI^uguPnDDnd%s#BVg5g-OB*t=5 C5&~*<@**y' );
define( 'SECURE_AUTH_KEY',  '^z79g[KZ$m h8Xphg$RwJG23S[sCA+;=,K@6Av br61/yQ{neE$W-0tM][T(VhK+' );
define( 'LOGGED_IN_KEY',    '8^g3PYS/kG6p*{w*|*l8(GRkRm=)Zt?#azQx]EUnAmTY4~7It E!x(m)@jIB zZ.' );
define( 'NONCE_KEY',        '3AhKkltuN`k}KMAldFJ:BrflCqnMaS=?Qbw%Ck} +K1&0/zxOQI0#z+QY`[z)3~w' );
define( 'AUTH_SALT',        'm%: 7aYLU5LQOfb+gK+;3A;wRNv^#Si==qRt^|3Oa80s<>1UU-wYXY4DN_FMc(!Q' );
define( 'SECURE_AUTH_SALT', 'pPH{wXiO~NBC%Nfn2I &F5+#jlDTN */V[cY#3V/j)dtalAb`e{W==8Lccdxx2|g' );
define( 'LOGGED_IN_SALT',   ' @<v[,-|>Bs6c/@(i3%^Y+xtWDE@q~%!`9T4}b/{e8|imxw%dZSBb[br(8^~j93H' );
define( 'NONCE_SALT',       't-eZXi~LzQ}Phpt0 j<!*A(P.]4-WJKfd,~+$:Er.zCmun<.8CR4nhAeUM4|}gl[' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'hv_';

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
