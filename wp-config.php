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
define( 'DB_NAME', 'musicsh' );

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
define( 'AUTH_KEY',         'o/|6g.UmT&(OU,Q##$cK/bHNdv Z.ll}&9HK3B~u7f:~q)I}Fnz{=S8^LX*InlqT' );
define( 'SECURE_AUTH_KEY',  '=9kiq>q1I?T/qma;<t1M:K}N`O?[obPBNT#bDLkq3%VIX*zK!~%*93g7^Ty]D`$s' );
define( 'LOGGED_IN_KEY',    ';x=Z :P7HTAm^==?mCgZak@]bRhiMGA5]w5|il&ztoYuw/p}7N_Np4K[c7QGN,l3' );
define( 'NONCE_KEY',        'mul_!fcLsLFQC-!q#;w,c`Be&<;4eM8XH),gPZ?}VeIy<DrfKsZMJt&0GeC$!.o9' );
define( 'AUTH_SALT',        '+kEQuVM ]#TOC`A~O}/&u{q!`?l`mE-:IldX@l-UE(D01tM2;+9,sh*6ki1 }Quz' );
define( 'SECURE_AUTH_SALT', '#8jM?MEyX6*f+U8O,2KuG&U<j>7o+)qdb?Az3(i~JOwhu-Z_b/5Y[z+avHZpH(%%' );
define( 'LOGGED_IN_SALT',   '|O6$1S J3TACJL+,;s>EHn_1ohJM$;.Ogc4!%@{:RVVe<#Lr37sWx3?_Vn!pms0-' );
define( 'NONCE_SALT',       'KL.C=a|hksxJ,`d?<JVU`[UTPORtPs^ W_J8/ *[lI ltgtmr_t5gGw4&Z8ugd!}' );

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
