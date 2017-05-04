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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '123sqwert');

/** MySQL hostname */
define('DB_HOST', 'db');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'DQ6TLJ1N+NPhq_|Wm[HucHpvMZ[&Jqb^d/^ll#>2-G2hX?eL}}I#lMr)I<m4)Lb>');
define('SECURE_AUTH_KEY',  'O2]OZ?1y:``@w6=%oK7}fay$Z@_F@%UMx%hB`zw4ho<9{)PwX5/|mtFw{J,[nVl-');
define('LOGGED_IN_KEY',    'vg#@&p/ H^xY/~@.gxJ~{bE 5[eOMlZR^BRGN?uXe6n)F>f.nZ(-y]x~vW#f.*DL');
define('NONCE_KEY',        ' 6F #L!!-CJ_GogUh5`l= ~TFxj:_#BZ^5.dVUexwg=VJ!p/A<yZLSVd ]+^|Bs<');
define('AUTH_SALT',        'Jut:C!!~%g5SpDP3$eLeb=kW4.M6e-43v}{7|nI*AbZ:}ISHR{%A`q0tJCD_?C9g');
define('SECURE_AUTH_SALT', 'giswm<$]U7qmsmH]hq@8AeW,sOO2|U#/m7pC}S;x|;=T7NHWa*R3mH4[5|sFk-&9');
define('LOGGED_IN_SALT',   'HinE(}=b2L]#x;e[:t%0EywA<,Ep8TsLE8)Ksc%;]5/mw^vGpOWc78foYQNhum?y');
define('NONCE_SALT',       'bIQTng0SeOMUg3}AD3k12[g/QozsIc)I/?|[u@,qH0!3UPST(Z!]ju)e>.)@~Z$H');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
