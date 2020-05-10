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
define( 'DB_NAME', 'marudaistore' );

/** MySQL database username */
define( 'DB_USER', 'sphalid' );

/** MySQL database password */
define( 'DB_PASSWORD', 'crossover0700' );

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
define( 'AUTH_KEY',         'Jw2}S[/)^tytRDd4sk2#e&vF][YwMr-zbOYR]Y#9/.gCA:]q[:.XNvpIY8CGHj8N' );
define( 'SECURE_AUTH_KEY',  '0mwrwPLB$3(%;Fu?N97xIKri8v5VaGe|nfe{;#Fh2i#J(ya{A_!BB+z58mVt DxN' );
define( 'LOGGED_IN_KEY',    '0r=n?KQ(Hcwv`&i$PMr|OoK#kGtqk+*}xd]!!Y?pze5ZJ%V,CE/r6bn8*4p|_f`$' );
define( 'NONCE_KEY',        'GQLdGx-yD#)r@(Ai8WpYR~$.mMB&{je`kBvb(O(M2Dy-hL~Ti,Z xmU2]dNp;$et' );
define( 'AUTH_SALT',        'Z{eGrArh2nOi>.dyO3E!8b 3~-y7c1HGyAw8ZCTLt*yc8,fTj(U2 ,j@HcS8wrUM' );
define( 'SECURE_AUTH_SALT', 'Q:(dD,/H^>REBy,nv&h<k5=gKQ$VEo8Ke-Peqc:`8/)Dmv+.{C}^k:+{J/>ti{T5' );
define( 'LOGGED_IN_SALT',   'F5gv}/G~Vb@2j-PP6iDQK#6&WfV+)fTj3G0oR3*jqb*_VqYm2kj;>gi)giQeTXP]' );
define( 'NONCE_SALT',       'N<Rp9AMR$_D9FK`:LZ.(5t{,}rFIk-J`?BJ%5*{7uLE3[s(aJqY>h{#(/- (q}RH' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'hardwareonline';

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
