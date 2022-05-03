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
define( 'DB_NAME', 'monhotel' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '3g1ggOpMM/9HDG^A*6|-Lg]eYjto5N6&~1m6G)h]~T8tS}Qn=qfLBaW+m#dS~s>*' );
define( 'SECURE_AUTH_KEY',  'NUmfA1iB@3Dv|40CxGdxT|hv{]GA[:_Tt=Ny5dvp;4iVS5y N$@Ui_$,ODrkr8n(' );
define( 'LOGGED_IN_KEY',    'jvZrOcqD5gP<tST)_^;9}?.;NJIE-^M)b3VI!T7k8aYLl|~BKpHob>c!#,VyjRXj' );
define( 'NONCE_KEY',        'Uu0MH6/bP9cG)4~aFIth1Dc3?Zp0:-Xk jLy2wsfdPq(obhprxys9P<q^)Q158YF' );
define( 'AUTH_SALT',        '0{s,x]>37v6)d8aOPrG,_k.L&*I{|P;5F7{dwSezX3;X2VdRi;uC]9.6z|A0h-r3' );
define( 'SECURE_AUTH_SALT', '5IVb_V$1O0?76K09Z$GGt7pn>:H| AX[Xnx^[&e}|+7e6/P(<#pb5emsUqqb-btb' );
define( 'LOGGED_IN_SALT',   'xpCAAvATdsVbG!xvF,%I-OZ._i-j?EqLGE,zrH(SB`fADb2;bt<XVYOmC4qw^ur^' );
define( 'NONCE_SALT',       '^@Zy9uQqq*B1M^+yod3!hbu~$aE?caRl n]O(l%<$sPp%/#Zd<{OYzTH]qa#B!A^' );

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
