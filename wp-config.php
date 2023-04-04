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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '1_^e~!c},r6VhTRIpy}l5mxyc,H]is+HBp&?)r9Z>Z~F=2:mq[7<={X]vegH3RFM' );
define( 'SECURE_AUTH_KEY',  'J;:ab!<= `&$)<7`zjd,+QfS}MJ%aYW=S|X0}nTw} ;@@N=%H=GsDbQ8Y#NSDB`S' );
define( 'LOGGED_IN_KEY',    'Ue]iPe/ETv/nyu(W*zap<cDhhwp3tS0~BP;(PzkA$9tI@J|OCye?NKUp,yZ^?3#0' );
define( 'NONCE_KEY',        '{pG[lxUij~{$OQ<V[%+F[^/<b .e_C<BhB3B;,`o]r} &?m;>F=~pI[g#.D`{-{o' );
define( 'AUTH_SALT',        'im}v@nEcs1?/j2;3Zj>LO]9yDcV-yS;Q0d%PEwKxV&qdm92=k;:u2OlKbRpW-_/u' );
define( 'SECURE_AUTH_SALT', 'bzx&Dfqw2T={4Q5,oAFzmPcaq2Ch?A};ril3!{ceM`)Q(e^tSDQS- |5N>?WMcCi' );
define( 'LOGGED_IN_SALT',   'k] KABIfV,L.SSzQBRmq!)d[j6S]WD#]8FT;grB#;*,Y)Mf4~~MlJ?RzjFmN;mT|' );
define( 'NONCE_SALT',       'P3H)nntQwlrJBvgo%8*udD}}h~5AfM(J&`KTIfP:I&!5HG7)-isR8Bn-.St(mWKL' );

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
