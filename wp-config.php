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
define( 'DB_NAME', 'wp-admin' );

/** MySQL database username */
define( 'DB_USER', 'wp_admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wp_admin' );

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
define( 'AUTH_KEY',         '!fB${8w,=)1#qFOF-tXClh*+;@Pp_4rw{o~<R~7b}HRlaSja3@9&ybS(<_*OQ>V3' );
define( 'SECURE_AUTH_KEY',  'UfZq*1fiP$T`b[^`v#D5#1H>qWA5cF?#s~s>|x/*~~6o<20rGXa}(N~#I_x<ZK,]' );
define( 'LOGGED_IN_KEY',    '7l4t6Bp4!,DM,G~bNz.$4)QJE-V%%?V@.0#6f(NT<.tEwClW@7^ZRLhiOu]g6q@p' );
define( 'NONCE_KEY',        'yXcP@$]bi/}JVQ0!_[G$EY=}+[L4/4am MJT4&`{{YAP$FDEMbGWy&,uj_vNoG1h' );
define( 'AUTH_SALT',        '0MXV76>2^%;)8zwt=P^PqG_NNTalxk8zQ9U1qr:uv41jXL1i1vLRdjQq5O&Jnp4Q' );
define( 'SECURE_AUTH_SALT', ',>.3*R6|p9uW-rh.cJh|8X^n!!#,^rrg]H?]4*;<nx?*rB/|S:uRbNub!ZSN_~a;' );
define( 'LOGGED_IN_SALT',   '|1H/M`FOM>[<uqSpbr-ip_:^]0]]7Vrrh_yG20?PJHcb1T_7C`aZiWajfWU*1nDi' );
define( 'NONCE_SALT',       'UCTecSFL+GB i :fDwet.?RSndA@f0V7iDp(60$~]CtjF0DK^yLURN8=65O*O1&J' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );