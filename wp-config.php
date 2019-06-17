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
define( 'DB_NAME', 'dentalmas' );

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
define( 'AUTH_KEY',         'pX,?FPOK|)!jdG)_AG6Ad]GYLPoi8i1SB`zT0k%OB14OgH::5~PdtvmnjC!4HKkt' );
define( 'SECURE_AUTH_KEY',  '7wasIbOHQxrbTnHX=/7?]#WWv86ofr1oIYs8qIi_hWJE~Tfq|5AlTUkjum3#jL,9' );
define( 'LOGGED_IN_KEY',    '#~ |96Z%g=spgDdfe7K|b_d?gw.rxR*^IgtI[X}f[%1C%Ex`NK{OB$cBR3h[36!k' );
define( 'NONCE_KEY',        '`}cN7r[?)s_ki0#b6m|63,(si1|;C5 -x iwl&!Kt;$T0/PF*JB|43GVj{1f_JAw' );
define( 'AUTH_SALT',        'plPVbzp~h2^+pEt@VFp=v}l&p[.{V]_2@NZ}r1D5&b,,l`RvU#3 ETnYcyVYe>vg' );
define( 'SECURE_AUTH_SALT', 'CwF:)//C)>`%XwOG#9TiRsqu>|Z;wXD];K>bql;w-eGp^eogA*N9O[g7A{;+@GBY' );
define( 'LOGGED_IN_SALT',   'DB/5lTHDr}$W-~@3F#60P@t7`qFvSbE*wrBs,ZWOq7AAt!(hbq ~mP]9DE<Y=2.?' );
define( 'NONCE_SALT',       '#[))0}up^I>= 6=J$c]%R%nx;<Wd,oL5TXzeDjEx>u/`q=vYCB t:/&#7#J>!t!O' );

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
