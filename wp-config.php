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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'WyExH*z!<)MBCy@b44Bk;yD)A)%;iL~yX{%0(CQ_B(M5N/:k{Hk7;6WLmi%zM>I}' );
define( 'SECURE_AUTH_KEY',   '+m)191VHIu| ev2Ft%Y2G8fIqb^21!`Of&D;g6M(||//5*E4Hv4wY{3RKvKV!9;[' );
define( 'LOGGED_IN_KEY',     'p ANQWnd!g3%py%(D`$yfu7#3^QNlMX<FSVzkSxn9hc/}mb+pGzx~d3s)=E=[OV{' );
define( 'NONCE_KEY',         'XKJ3hN]zdywG.N>a{gupm=ro_0|]T&Dpe8!0E?ltOW2CWPvc^!>x}ok-qcZ 6&)*' );
define( 'AUTH_SALT',         'rBP&p?HmR6+-V>#u$CtFmK~.ZLCw7LmHfDd10.rw~33}BsKq$ D.6]`Oq,cz)arf' );
define( 'SECURE_AUTH_SALT',  '|E!Q3|=I<SUK`X@^lqpYY7qW9S6E`#c:P>W!2`JI7PM/}*5O|13z$M5IL-K-R&M<' );
define( 'LOGGED_IN_SALT',    '|]^J10}}h#WfVF(<!pk}Q*C_Ar9EK(TTQL?7,tqLI:Tx)47q2W_R>M0Y5mn{F`6;' );
define( 'NONCE_SALT',        ';v^jO>AQA|cj=!$ygo`$5/ZGeO;un@/*(Xd#+ZJh:&XVi !+bn~dH-f72J5(@3Ku' );
define( 'WP_CACHE_KEY_SALT', 'Z/tYlD-IzeRUEju~ 2_7)Q#cw3j<>mP`)&J3BEGe1Y!VDW+Rs9lxM1zUzs&W4|;M' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
