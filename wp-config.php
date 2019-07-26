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
define( 'DB_NAME', 'biskfarmdb' );

/** MySQL database username */
define( 'DB_USER', 'atul.verma' );

/** MySQL database password */
define( 'DB_PASSWORD', '2UY7in3x5A9U8rpV' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );
define ( 'WPCF7_AUTOP', false );
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
define( 'AUTH_KEY',         'zo*wYYuCec@L33<]}K}:vcl-#9.=u/>:hxNJKyLc5hb^<`!L%J/k7/%:9<_|[3Zo' );
define( 'SECURE_AUTH_KEY',  'Z[<%n*5-~oz5_nNDq]hOK#^l9^/qwbSoT6WWNq]cLf)TcjQ&{[lKehn%AH)b6EPg' );
define( 'LOGGED_IN_KEY',    '2w8JX3dmz$NkV!08z*?Fj+D]DgL5ji?,65C67Q{3;rJC._Nflcj+1@*O^.tteXR,' );
define( 'NONCE_KEY',        'QvWC{L7871qx`C?93=W.m@AFt~twlVjKppnnjw6<|X/zYF{Rw^<3%e#7I2AC5PMK' );
define( 'AUTH_SALT',        'E PkDEty``&k9mZ<;y x:PilIJf>loF0n^Hrr[?>OMUOao;FJa>l$X>f|]AVv,+X' );
define( 'SECURE_AUTH_SALT', '_tr%cgX-2^0O=jrMqXAx4eN):ldc#3.W:hJZnIWFN=`2r5dx2S$N_a*!rUH>Er4V' );
define( 'LOGGED_IN_SALT',   'tLY*cbVUa 3Msi!K:?%Gz!1S@PM&D*pL5a:zS&,Ny>=]kDzMENzlNH/oK8-m_ENZ' );
define( 'NONCE_SALT',       '`%CVq0,[R&,{xzh[p`Q[i#_d)XIt5}ys:E<yy=;SL1H)1#Cf2ALS&r8|/h2)hJia' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'bf_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
