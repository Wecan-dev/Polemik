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
define('FS_METHOD', 'direct');
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'db_polemik' );

/** MySQL database username */
define( 'DB_USER', 'adminwecan' );

/** MySQL database password */
define( 'DB_PASSWORD', '_*8gTYWqM9FHU' );

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
define( 'AUTH_KEY',         '>_d#{G56J9? }(|q02LFvygjD:S>K7,YDZvLc7Ee45N^i`AoJ1wbp?@3~l<gWmV-' );
define( 'SECURE_AUTH_KEY',  'jP),F25U&:}b/,j]M6-tq{q-$g,CC!#EI>^j%HOYQe/Xa5$*qNhDuUY+n]odLz6S' );
define( 'LOGGED_IN_KEY',    '5Azz@o7.u^_@@=DL~GvF:L+lAj,;LfqDJO/Pc*B+7_iGUpFn=e-*J7)/x-nH@f0t' );
define( 'NONCE_KEY',        ' )y3kcUyNKdv.wM:7TB}4jFj%y)lq,2`#p:p&<HKTlOG4UPAy,6PU7_+G.E^}ha|' );
define( 'AUTH_SALT',        'Vt95*hleTQ*G-%kl]vc]14HQ_2UB.^QloZiRyup=5$c`K*0$X97u=rp$!WC~@]2p' );
define( 'SECURE_AUTH_SALT', '/YJ}`Fm51Inof=nUrUK6W-lE^%_4C;G/KRyXfjStg<4%$^U7K&FW-`QBS|6*}# e' );
define( 'LOGGED_IN_SALT',   '0GrW05V.3T?&IP/)3/yL=<0Gc%pl-%BOL>QpAQUR%1kprib`qLN_z(6#!z08?92y' );
define( 'NONCE_SALT',       'VS78<0AqM<8B6&{1@8Y-,<fn@|PTD/PFoXF=X(?b&Cfw*`VQ=kz|My6lIIH{-;~$' );

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
