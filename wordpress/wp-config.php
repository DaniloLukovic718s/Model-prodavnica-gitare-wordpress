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
define( 'DB_NAME', 'drugiprojekatep' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'JU!|/E G&,W_#;%HiwTxCml4A)BtDV&:-X<hJ}k(Vz`@xjQ8bK=!t74]mc.@.hsC' );
define( 'SECURE_AUTH_KEY',  '=5L2@HCYd>_^/%a(+^|4a_WE%MR) JFoF{m[]|=BykdS+AXBg*XF6wIsY80N9^_A' );
define( 'LOGGED_IN_KEY',    'UdnKWAwe<4p~<)W*=AEN+clsxCS(=)G]5}{PQOs5V,3ofLz$i/Br>4M@uRjbc4Pv' );
define( 'NONCE_KEY',        'T~i6am^@cZffrLBeF?K?rD.m1g;rRX+U~ytIbOSx5`95.*F.LJI,jkt;%LKF_PWf' );
define( 'AUTH_SALT',        'LTreQ%V{`8L#3<^u,G<btS8++x9x2Rp-dnGRr:jNQ:DJ{r@Jvl uV:NsEqKB,Y@e' );
define( 'SECURE_AUTH_SALT', '&ZdC5Nbx+2/D_6c|~F6O(F/16k$iDVL~Eoh<&0DYA&*_LVSMqQu;u~N~C/7YNHwg' );
define( 'LOGGED_IN_SALT',   '7=bhx,DO/|:>o^sty!EDgn/9eUi~-R=!e8n6FI[J7jW$cR4 e<gTkKt8]WqrG*vU' );
define( 'NONCE_SALT',       'TUcQ<,A&/189;,7{p9qF_v;h6t*]~}^{(0ShaO)LH~YRb@e[RR=~k:A:HaZtrhG+' );

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
