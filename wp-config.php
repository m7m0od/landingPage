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
define( 'DB_NAME', 'landingPage' );

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
define( 'AUTH_KEY',         '{8l7**>([$@_l41w98BYK6)CC0pw!dHigziZ($9~ww2o#lLb@dj1z|]wA0C5f5p0' );
define( 'SECURE_AUTH_KEY',  ']49>Rd1uS|;qPEu#tRPyyzv@S{?KH`i&zM]]tho}_GP+Qv<*d:|%=5;|YA}M0!EJ' );
define( 'LOGGED_IN_KEY',    'u5^I,ena:e,Zdj5Tl?*7)1]Pv/W`lXJeq6=0*O{.bJp3u!Zu*]i(MCh0:gLAPy@`' );
define( 'NONCE_KEY',        'eh4UD=T%Hp(J5Rqoa|3[a[rcF 0#FEOZ)4 ug;2dCaC/f?is3)]_kzsr?gGiUS2r' );
define( 'AUTH_SALT',        'W[{i/j-]vaT(ylKdLxKSEHgnj!i?.AH ociEau9i. yY+S*<p}MduX~#l2s7{26X' );
define( 'SECURE_AUTH_SALT', 'l~1p(NY?Apm}8mto8ePAR@gCv+&?xYnmb-}OJF@2ArBn4NL_$D$.oE3ZKWMyLaqY' );
define( 'LOGGED_IN_SALT',   'YjY;:<N)$p]R=Ls2!$WHos|&NEn<b_G&5W8LS~F;s.@p6HD6^JHB 1<s[#jioXuL' );
define( 'NONCE_SALT',       'X_f8n{8uTY4B~HV>A3(Haz1k%qd${O?}HkB+{!SWR}fu-2]*/J6/l]})uDO}n=%L' );

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
