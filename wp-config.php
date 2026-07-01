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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
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
define( 'AUTH_KEY',         '3P!Ac<Ycs`R?60x_)k;-m7=lwZ^j^6I/Ib2KicS.p(Of]Aqa[=]x3fB[&d};y!(1' );
define( 'SECURE_AUTH_KEY',  'Rp$D:^i1Vu7oAPx%2 i G*3l0@_bq%`~}&asdA?c|[0O?oeuD0jC>Z]F*i*L:UYR' );
define( 'LOGGED_IN_KEY',    'RR6fsN[}[Qv^K)1gH}eK9ZBRlTDzUFu^ 0uc;fCqCF&h!eo|.$;c5+)SW&#lr<iV' );
define( 'NONCE_KEY',        'E9FfL!O(0c8@W7Wkt-Gr%*OI[0X*?15U<kLD0p!}78W5Shdk,J,OAnnbl~i`cN(*' );
define( 'AUTH_SALT',        'nRRb7|6R-<B9} Gk^-rs.yROLA<gDW&zU-qoe]rvGD_!o]V`?*AH/8yPIo[*|bcl' );
define( 'SECURE_AUTH_SALT', 'UZ>~U*WKCbEXN`lV0~hWnSHaMCt.ZdJp}>%P3FDpV0=LLFoVC*ghmT7F}Xe*;,7m' );
define( 'LOGGED_IN_SALT',   'yJHs90g@9f=Zl^.N&.Hug qR@p5}]Jk5=mP!f]*c;0]6 ;O/FuK1uz{^@@XTlD%U' );
define( 'NONCE_SALT',       '+eOAd* Yp:{7K$%}3y~vnC<IT-a!1OZjZBn]@ykrU8n3j-uJ1Zt03h=5#4@Bu?O/' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
