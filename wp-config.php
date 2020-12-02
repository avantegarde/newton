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
define( 'DB_NAME', 'newton' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'wJ;~2S5d,4)3n9W+Y+2.<[D_-*gNpMDZ~I~{eQ/YG@tZ}>moSd@;Ct}%zj3mpn6H' );
define( 'SECURE_AUTH_KEY',  'n(;w,04zHG0F2i0WnOd&ZgO[tm}mer(nx%[MCeNo6NMK[*8O*ucVTS_cISn0D#21' );
define( 'LOGGED_IN_KEY',    '2/nP?7~_co%PciM$C0T%V(Z4Z#s>1+!42mmm iERdPbPe>xy67+veqY+^6ef|fHE' );
define( 'NONCE_KEY',        'HAKsp9h-/2Q}4stCbs$17oHsj`+fgq=;b:}$ZLq9XQ+DfDm9cbrOZoYw}o`5;Bv]' );
define( 'AUTH_SALT',        ' af4Sc/b@ZFd$uL:k1q$.S,7QJ`eS2Nm_){Cf2w7vs[5:)gbQ|X3>a,ynGxxMqXv' );
define( 'SECURE_AUTH_SALT', 'J]#[2l9^]=A/cbWOi}PdT=TJwhn%ULKPd#DfAx:aG0Q?^wcxuBTU>m)EzXC|{6N;' );
define( 'LOGGED_IN_SALT',   't$&T=~r[KzUn rfx$6lb|um0~X@])tDeHsFrXx0CB6Z,$1L]XP9,R;(g:t^{d27L' );
define( 'NONCE_SALT',       'iyp#S)V=%HkPgh#g#zh9G]@08)nH|~Sk|vrKAA M(q81>Q$g,}|+wKA4wB6TG;P1' );

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
