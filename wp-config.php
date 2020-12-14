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
define( 'DB_NAME', 'clean-theme' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         'A>o||PW]FY$[X(=YSJgfjGdh8Ly:RD_4|uR5RUD7pMvDyzhe iffA!NPji~Vz}h&' );
define( 'SECURE_AUTH_KEY',  'D<OX$_bo{Amqx{Aj.G!XCT?Ba(B(zR:#mJphN<b{eTDR~yDO/QL9(6 -t/H_!aU<' );
define( 'LOGGED_IN_KEY',    'AQY;6?LCMjOUHFOo!: H-FC{KR~MuoJ<CEr|:SmON0t.8vv/nTr@7y?W*ax$F!j=' );
define( 'NONCE_KEY',        '%OVF#?y{L>]/L@Vh!szOO%RLO6Y2G89G?)>sQ$X(]4lT4oH`P2ZTzA.ZKkmhBX-!' );
define( 'AUTH_SALT',        '9Y1F_ ,%vvgqYh_ir6qdjh1lXCJyoNVu&H?)SpvYtvZhmv^vGKn8,iuji=+A>q|E' );
define( 'SECURE_AUTH_SALT', 'B3W@ST88o|V`722*+F7bPz?U3E1 ;P)^v5H:8,Nl*lP9<^{Q!0Ua?-D3Ip)Wj&I3' );
define( 'LOGGED_IN_SALT',   '~6%u<q}R#`xPq~OeRAs)} cnj4~ORIie!o<|O]8]RMwSP6a{f3>K0_VbW(u,}L5W' );
define( 'NONCE_SALT',       '5MOP; hMB8.ZAYUyS+#[Qo./0LICs=$:V:4S,IT@?/Z&wpbo?p@2K<RzY]k]9v0E' );

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
