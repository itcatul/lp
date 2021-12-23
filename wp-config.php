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
define( 'DB_NAME', 'lp' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'h*NHAYw)L cHao+&T/*<:t?3(l?KLQ!Q=yG#:GdW_VAupuRmji3u/^. U&O]LrpE' );
define( 'SECURE_AUTH_KEY',  'YPvY@y$k`z:{;ZuEqgxuG`m}a=.if`A0$vjj$ozdzOa ;C>b/7zz) .jA(3;OO!/' );
define( 'LOGGED_IN_KEY',    'hq-KWXq#]vv3y6aB;&OhP<Zm&E2^+GE6BsbLJ6}$UR[t+p7+z=A?@gb7G%EA,(}?' );
define( 'NONCE_KEY',        'W2SV0zuSI:(mP23(q9OP?eSD`Jnwdu0m0=Z0 hO{RAaAAFW[f(c~>9kR.lIg^mus' );
define( 'AUTH_SALT',        'd[T|5Z$2xrK!KO~LSq m!0Gz[R81K.rHvP>T_F_>5lOR_4LBCer&6MTTUC|plbm)' );
define( 'SECURE_AUTH_SALT', 'Nk^n~e+@DNiO^RGTF^aenNB4TWhA4EM1c ;{?85)TX{(?A~EkDHZW0^q|@]n#QG)' );
define( 'LOGGED_IN_SALT',   '`2W2nDZYI;PS&#-*l(q-_bK-_,.EJrqv}Ka)+%<wGp7ax~>Ofb@3RE=Swc&V+oq,' );
define( 'NONCE_SALT',       ';14%3i+$C$W4u_0>t*0)Mm4=t0([0@QNW8:8f I8(mu}S-u9z0~g`|VojwS77j//' );

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
