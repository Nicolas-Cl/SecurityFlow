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
define('DB_NAME', 'securityflow');

/** MySQL database username */
define('DB_USER', 'securityflow');

/** MySQL database password */
define('DB_PASSWORD', 'flow1234');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         '&F@qIt@}Kg|GG:T<uq;;:[{O#/Sb6I!|pSuHq9{R}rhJ;};70^sB@GUeT44_yd[J');
define('SECURE_AUTH_KEY',  '~7cLd,=:c%_};_._ddC><ikT??MGwDjq??jQwJYM&7OZI.fKE4Gr$8#PFO0V2,m-');
define('LOGGED_IN_KEY',    'U(8oy$<Y~}ntW5(97Yrk4S#3%lk5iAe&CIhx>ThT5hJ[^A<f7y;]?V?~_|cA?75 ');
define('NONCE_KEY',        'maWt+<n}t={rf+P(48h@dH}7hZc%^Ln$15&%Wa_?.>>vhJPN]iIA=UR1=2_Y^[<&');
define('AUTH_SALT',        'Dut~P)_p)*]iwx*){5|ZB,Z](uVP_4y&as@5<[J.(h}7TEJ1/C2PJWpK|kD%AzU/');
define('SECURE_AUTH_SALT', 'k-g+79*3~ TQNb2+EB/,~91aoP`7wfL]W^!*he^6/^f~,YXO .`yww,C8R&4*+&{');
define('LOGGED_IN_SALT',   ',a,w]L%7*VN89Od1o@Lw.XLnwI9M.6Twp+0MR=M:2(E4e*utGauT1SK%,J=Fp~Ht');
define('NONCE_SALT',       ';~u*,W]J?q&bb6w`7ae0cCqZc[1Vj`|11_{4~^t*zQiPCqk-h~+B>|0j%M:)T$fR');

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
