<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'LM_Menuisier' );

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
define( 'AUTH_KEY',         '`6u_SS.s>=P;rr:T+mGNSt>.1hAH3cAK?;eQinaG@DkKOi%xj $-NhW>+zQ3kC?>' );
define( 'SECURE_AUTH_KEY',  'bG_OY;y:ncgP^.6vTVMaxyTz?Onh+{RrelORWmk?nr9KU[9?K|i:Zsx^J#f6y}yT' );
define( 'LOGGED_IN_KEY',    'p(RR27rjDbUd{F]A=T_xF<^3sv$6A5ypUU={h?`MJ?%qX-%KI7bs1lE8LgFvx/]~' );
define( 'NONCE_KEY',        '4|<&3(CVqwd(Q[I:n&ggfyvyt]i9SH2 WMZ8qz}YA?Q>PRVvK`MMA:e+:8RA;fN$' );
define( 'AUTH_SALT',        'y)%-vPu65,`tPRD=mNiqNuRD-QU#>eYleMXA5 :{F2GNZK;UZP}SSQvOjTYeq1}2' );
define( 'SECURE_AUTH_SALT', '1w3Y{AuLES8s/<RgBd@@wvyuMH_ 0Kf+R%brc>#+Bqha6](6,!<xGqi9D?t<?EAi' );
define( 'LOGGED_IN_SALT',   '/N*<{v0o&cj&%#HQlm!am6%t{0#R&@P[#rc$SKv/ef.jb|Df?GCqEW`ol>bU%M?>' );
define( 'NONCE_SALT',       '5)9H8-GL#~w]f|lbTz*qI E^x[u1dpy+Hz)ADwtd:&{{~=uZGRT`WW8<)6,hwu{ ' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'LM_M5421wp_';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */

define( 'AUTOSAVE_INTERVAL', 300 ); 
define( 'DISALLOW_FILE_EDIT', false );
define( 'WP_DEBUG', true );
define( 'WP_HOME', 'http://localhost:8888/lm-menuisier' );
define( 'WP_SITEURL', 'http://localhost:8888/lm-menuisier' );
define( 'WP_POST_REVISIONS', 3 ); 


/* Add any custom values between this line and the "stop editing" line. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';


/* That's all, stop editing! Happy publishing. */


