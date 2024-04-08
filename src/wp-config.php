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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_dp' );

/** Database username */
define( 'DB_USER', 'wordpress_user' );

/** Database password */
define( 'DB_PASSWORD', 'sandi_wordpress' );

/** Database hostname */
define( 'DB_HOST', 'mysql-server' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define( 'WP_REDIS_HOST', 'redis-server' ); 
define( 'WP_REDIS_PORT', 6379 ); 
define( 'WP_REDIS_PREFIX', 'dolanan' ); 
define( 'WP_REDIS_DATABASE', 0 ); // 0-15
define( 'WP_REDIS_TIMEOUT', 1 ); 
define( 'WP_REDIS_READ_TIMEOUT', 1 ); 

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
define( 'AUTH_KEY',         '<kgENUvd{zz4A49VA>?]GE8#W476k]CTlblVWG^!B);=}iAa`Bo1IwTfww<xh$uk' );
define( 'SECURE_AUTH_KEY',  'iC+8U}.28[pp0)T(hhE1:J(&>8l-.6cFdnSBOudH.sWD^PH<SHLFLy&L9yh2l~gp' );
define( 'LOGGED_IN_KEY',    '3R3v~gw.%j> _qC?+O|]V]>wa7H7h aX(IaJfX|0F7}!J>e~y]E);3.9^LhX*qAf' );
define( 'NONCE_KEY',        'iav]t1SB[fGzJ)1le|HHvYZw6[!rI_FZm!K7y3sz~~h@@--G 0m6b#yGAA}IyzFl' );
define( 'AUTH_SALT',        'N8_WQ{1?Z3D{huiIK-.l6(%Eu{>bx}5*8JHb+L)Qn/|oX(v|P^)&,DsdwIFsYLaE' );
define( 'SECURE_AUTH_SALT', 'gt.+|+w9WUcslgi^O)Je~-bR9@`fjYf4ON2YXY9U*M0~LR1bVz`<>Hv)SW2.m1!N' );
define( 'LOGGED_IN_SALT',   'sg):RUwdNm8d?va8rBv<#-BrNOi8(,w%Axd(5hgM<9Lrgb7*[|48s:&618Mdfq,u' );
define( 'NONCE_SALT',       'C7g,7D73VQHKdR+idb7ZA Z^l%#M7Jw-Ioue|$<m{s(iIN|yIsmSXEn*KILpv2t*' );

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

define('FS_METHOD','direct');