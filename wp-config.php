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
define( 'DB_NAME', 'my_wp_task' );

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
define( 'AUTH_KEY',         'HN>HCeg}V|q!s38Jl}.AvZ|,J jNqE:/M=fx>*][Ic#X&RHR-~Zv<USeG1LP(~sK' );
define( 'SECURE_AUTH_KEY',  'rh+=4`e|_E[gE1/-{_*d1p[p#c%7}cg!xw#>ODqCm<t>Lf>`igO~;2,xxG*%<VI@' );
define( 'LOGGED_IN_KEY',    'h2pgyq(p6ddR.Ec],MdI7[Ax]``-hXBhZ|EZ8r#llF.YSg=rhAjKV~87v p!%/-+' );
define( 'NONCE_KEY',        'SZwo:a^C7n~^*3=yJ&Xx[n?f|Fk0Xd({E>9=P/;saBJl!#wI2)MZd@VReArKu97=' );
define( 'AUTH_SALT',        '27:Zk`%aoy`~-fj}l>9f__eq-wyp9 O<d^0Jz~`-@tH=]TuyFze~,[<.%|>2owqF' );
define( 'SECURE_AUTH_SALT', ']_rEy}v110f3;_t1Aoym5x!}.6TT3j85$4#D||kZGgzOcMJumG&/q)oqb]sX|}T#' );
define( 'LOGGED_IN_SALT',   '/6`<qhv^.)pK$kDE@NB.%`T$i~VtQ=hU:kzYH gN(lrTecxS.498,oCNm-D@M[F.' );
define( 'NONCE_SALT',       '^wgbZ&|w*:{V|&Suu-eCzn%%`JgbfUWP5lcWye{gbMPl/Yl{7>YziJ=2?MJA4ciF' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wptsk_';

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
