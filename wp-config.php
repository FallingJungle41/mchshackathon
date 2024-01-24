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
define( 'DB_NAME', 'hackathon' );

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
define( 'AUTH_KEY',         '~OB;xfI.,hRQ6CeSV$27f9 @SK2oMc.on,`=lx:M-!-cg5p(<<Ut@(|oMmv^lsyj' );
define( 'SECURE_AUTH_KEY',  '&^_0ZF9rsFI` i2&?L:Q@qoTsTY1fjv,ppSxp,rE{C55I[hLaD`rezc_/T~7ROb!' );
define( 'LOGGED_IN_KEY',    'r4:~4g:0Q*Km:6e:I:iGDl#~@,r@U`zYaDojl$XUk[g~ !oiCU.{yeT>-?ufPO9f' );
define( 'NONCE_KEY',        'e7>h_D:-Z7nYuOFG7M;~%L~ @i&.o1WJ*57EP;X31+1sgx?h(=wy~0siX-+l{] 2' );
define( 'AUTH_SALT',        'S{>|1kV1$;npZv<*j5|6#k{wNPbj_:%E[u/X$dQ8H1H`JqVISp/>.e&Mp9357$1g' );
define( 'SECURE_AUTH_SALT', ']!AVHI3$[xKJ+!)S250(b?6KLf%{x5B:#L9)@VJv&&K_<-nTO??^=dHN{3!qtW!;' );
define( 'LOGGED_IN_SALT',   '~(NO=)Y#fv|gSu)5,6-2zN]$P7v?tObhZ|#9ScpVA6k[}m%@0{bbyC`D?Jsn9Ih+' );
define( 'NONCE_SALT',       '{IS}s^FSj:&DZCA1H2xM8:-2AlByE Lci,_EQVeVGq.iUhKF9Q1SiP+NRK@>l%k^' );

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
