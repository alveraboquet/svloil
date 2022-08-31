<?php
define('WP_CACHE', true); // WP-Optimize Cache
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
define('DB_NAME', 'svloil_wordpress');
/** MySQL database username */
define('DB_USER', 'bart');
/** MySQL database password */
define('DB_PASSWORD', '^T#CLPex6DaeBLc');
/** MySQL hostname */
define('DB_HOST', 'localhost');
/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');
/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');
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
define('ALLOW_UNFILTERED_UPLOADS', true);
define('AUTH_KEY', '>f1TpQvh]^EKpck4;igAUBPc;%i#O^yq,F.,6+nME++hKH}>Q?rIW=*WBqVaq{gg');
define('SECURE_AUTH_KEY', '{TxQ+e+5iouv{?Ja!IWfvL^I]}2^N~{{3chZv0q~YUq=npUeYLh?H,GFSW]ufh!2');
define('LOGGED_IN_KEY', '-7 ?P @!Aoi<M2:Vh ,u~;@B~~;qwmjeXv4*-#K[*~Bqd`CuS%P2Uco9+@>LL;u%');
define('NONCE_KEY', '>E3Y6|GLASvB&M-b i%FPhVtY*gI#y1<2XF&AZI+NL%gr+r[$tNwCoR/,AOAf38E');
define('AUTH_SALT', 'bu[dSq`jUbmB!.:dAQoz{&7sqF7tc(~d/.,A+c(8E_q3xEx2WD3bQaPB.Eo7|Lk<');
define('SECURE_AUTH_SALT', 'm}so><MQiVEY;q@H5}l=+(JO-PXg:<r}HQq+h7@6Wh`+yyqQwe?ZGS050?GB58}9');
define('LOGGED_IN_SALT', '_4a`cU=`.O;4]OUKbB**4wgrd/JpS%31_bCHFmC17d #u>(`$0J.~pW)V`6d?p-t');
define('NONCE_SALT', '*lU|DNSdjsR[+dV4pC|0>b)z|1XeXuu0$7L^}@#(QBc.,c5]%oEo&{[32A5Yt*wZ');
/**#@-*/
/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpsv_';
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
define('WP_DEBUG', false);
/* Add any custom values between this line and the "stop editing" line. */
/* That's all, stop editing! Happy publishing. */
/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
    define('ABSPATH', __DIR__ . '/');
}
/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';