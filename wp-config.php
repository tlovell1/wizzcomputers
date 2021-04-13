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
define( 'DB_NAME', 'wizzcomputers_db' );

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
define( 'AUTH_KEY',         'NEEsZE)8+;uT!Ebse8O%^L2VwGdG)_Hcm>$$O>n]<>ke2f4ocjBe(L?1rDA-O63h' );
define( 'SECURE_AUTH_KEY',  '}4,g),O`=ZlEebW[au9;~IQ6hE`R^,KhH*$YOa+mR}N+)l6ohM%V]9&ROD[L2E|5' );
define( 'LOGGED_IN_KEY',    'f7D!:T:Vg7[ce(M^$uz{K-S<r$)g,k6$Z;T*eMDiRA6AGI CU/_qS8RMGxs+~Ufp' );
define( 'NONCE_KEY',        'dv^,r%j0J9NM2It1@BNr@[%&R+2,|hHy9^z/97r;)266@3N2))]0sch6RVIg3369' );
define( 'AUTH_SALT',        'm@ E)Va],$CLtdW^oB<t<`Ip%XPrD?jH5T42e5cCxU*%X<OtoAq&X-OhWHt9A&9i' );
define( 'SECURE_AUTH_SALT', '!VdM2B(opZn,YoG?SyCsM*!P+v}VwW[d`)U/FYi@M3B(qH&iUL)6~duHLO?mC:ln' );
define( 'LOGGED_IN_SALT',   '}Db%<c~vT}]cNze}%XI2bLc/3_uzgt!$NtIJmvgKZD7x!r(Mk]kwWQF7bR/xA|bj' );
define( 'NONCE_SALT',       'k)B&vV6)*vT)UdVQ&aZ,NkLy!;7/l.40$BNY|Xm_!)kOzO*Q6{An?%A@o&T_kq5m' );

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
