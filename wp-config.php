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
define( 'DB_NAME', 'wp_ch_shito' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'drupalpwd' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define( 'FS_METHOD', 'direct' );



/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '9:wV^Gj^xsPXEb6#TxqnTBG3B57>6byk+@.20U</L-gb[#vssM8MsA=p+3J&,B1D' );
define( 'SECURE_AUTH_KEY',  '7%V0B)+P@?AaAlvwu0pwf?:-#c`-p(&/kdIADc8Cuf[bd>Nc=!cV72irgNAn $gP' );
define( 'LOGGED_IN_KEY',    '@Fvc+IU:oA|U48^0?Lf1um|szh$R5KE=~}EL?JZ(Wc]K53`.LdO5+.2&m_XJ3.i.' );
define( 'NONCE_KEY',        '7d,}J$#~~;psp+v0QQt;cfrGLk[|X*,,1C $!/!*U,rZ_$Ep@%NoCBWtIMu,R]#M' );
define( 'AUTH_SALT',        'NpQff*>JLl$lNEB]==$T3lYlm/)]|;s~eZwqszR_O@q)0-X|l&4ek^=G(Ba/lo:.' );
define( 'SECURE_AUTH_SALT', 'w?/m`m.uvT~g`a&H4(.Ms?;+-V Lt`oX@}b9Th{mkEEhAfi??6rGknRUHC~XNqq7' );
define( 'LOGGED_IN_SALT',   '=[hxAsnLv!wr0,k2>q_8NM0 $0:M$H`z%&[b^N$`3PIP.v||9:QhD`2*Sk2uCN$o' );
define( 'NONCE_SALT',       'Cj`~!BE$g)$^CFV9%P74!ni Fd|CUpZ{7HzMiAS2a2~zs)Q/Lx/ebzI#Abu77;.e' );

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
