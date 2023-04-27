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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'buho' );

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
define( 'AUTH_KEY',         'ikwXOARZhI^Ewq#f>z|K!i/l%{t`lXQ7b;`/:IsY`Rb8}38Gx_7Of|Jzn#*rj-/.' );
define( 'SECURE_AUTH_KEY',  'zK4_J?Lag|i{Z[J]4dv.%#ld@776CgiAlPGH$iL!7F=WX V _$KMR6tDwG:itVMC' );
define( 'LOGGED_IN_KEY',    'wWaEYCb~-.f_/m!*wPj^jjh@(c,<YRHF`nR}-3U){B@D>Y:%e bH:bi|>t-p AB2' );
define( 'NONCE_KEY',        'p,&7o#CdG0V% oxAk;X_-qoYXH=l;azKi_),5uG0#-4aY/{)j5Rv+BZecY~/mQ!~' );
define( 'AUTH_SALT',        'U+>Sxf7{y~eF=} 7<n0bTZw!O#$bR[9evgP=HFP+{}UKvN3|~iN^Q:uD52%;K1qB' );
define( 'SECURE_AUTH_SALT', 'M|PF*<B703O;+_ f;u1_z:!_fY)OBk5B-^SoW.Y0?y myf?<Bs{0{GQl[y3W#wp=' );
define( 'LOGGED_IN_SALT',   '$n~[=g1@Q35rHo0a^{)?C3wVv+45q^`Z37qG39~`sFL&SpO+:rI]%/gUv>#]~b-A' );
define( 'NONCE_SALT',       'p&cXi&Du)Wn%h]<&%@OsRFDwxkptI3R*sOs@`e%J8mq#eQcnjZF{-6lcl<&[=Qxs' );

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
