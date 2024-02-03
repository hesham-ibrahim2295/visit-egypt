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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         ')wq|yK:f1?<b>h:_Fr%G^B<xqu~5[.@O~Wr6n<.SQ;6Fv8XLbn3mzW7 1iu6#@n]' );
define( 'SECURE_AUTH_KEY',  'MYCaY7-U$%bqB9qFQB7yK/vSa`IL(3 =0t53w+a7cbu,S*V|nUs ^eG5/DQ[6h^.' );
define( 'LOGGED_IN_KEY',    '@.!13K9|@zf(T}ichLoGKHSS+w53>|md:|]H$2VT]MZN!4jMSgje!<_&E^ufSeB[' );
define( 'NONCE_KEY',        'mtJJZ?P7Fo$IA.NwhzP05$E}-?9LN1Vp+xp|nFGr5@?`H_A?<E2Q9zbSj~X|dFJ{' );
define( 'AUTH_SALT',        '%hJx}MyST<:QIGD+G!_g?Ze$K`/rwCI@egX)81E;}:lMYb]-=T!Nnxm.<c5EFwm ' );
define( 'SECURE_AUTH_SALT', 'w_4#+OQ*IOOl|lT<%P(Uv+%B&=,~-JE/,@eZWNT7Cev*yPD2fH;.P6[7~-/IZ<& ' );
define( 'LOGGED_IN_SALT',   'YTW(9&YxQD%CY-Oa.HXR-ag(l-3nafNYZQm>#>_`bwtM(57*mPy)[#$YdIfN`Z{a' );
define( 'NONCE_SALT',       'C$D4W;jpxg&qJu)ZJ44Bi<yw*bxf]!O^=P>dvuoYWRH`z{XzAu_84?}BT7D?,U P' );

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
