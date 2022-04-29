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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */
define('FS_METHOD', 'direct');
define('WP_CACHE', true);
// ** MySQL settings - You can get this info from your web host ** //

// define( 'DB_NAME', 'chefpost_6996' );
// define( 'DB_USER', 'root' );
// define( 'DB_PASSWORD', 'Chefpost!123456' );

define('DB_NAME', 'chefpost_db_wp_2022');
define('DB_USER', 'root');
define('DB_PASSWORD', 'Chefpost@2022');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

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
define('AUTH_KEY', 'lNlb{T6V6$fEtGaVkbr1W_s]i-j$GVx}~0$=$v%$K%A0(_t&t_8~Nxm$m&Hz~Pil');
define('SECURE_AUTH_KEY', 'ZFj!D}FXFIsI*rC:Qs_?8JSG4}%i{,vlI7RlTO=.HU5@J=H**aJXj$G!r8;?]?9:');
define('LOGGED_IN_KEY', 'W&C}+VWa@!w!uXo/&6*rN/5-4lk|46hOqg6gVP^[Emkc*vM|TFcH1<SL:.sg>~-n');
define('NONCE_KEY', 'r=1n=X[Ul@MA+%hds4MQuiucEYZ%qd)wu3)h/c[5-Trc%zSW[RD q$?G|!uT&UF@');
define('AUTH_SALT', '7~]|].;tSj<4qt{F>4nP>iHeT3egFKW~`B+ajzT5zTNLT*Mph&H}/(0YK/+x(rK~');
define('SECURE_AUTH_SALT', 'oJy3]VaWq+x^O1oE 3lo=d.ZW.Lu4Q|DA&5ewyp%5P4 Gvqp<V%S+N8^2|2H6jHC');
define('LOGGED_IN_SALT', 'f Ko-)=x0 sMu?r}?a[#^_L*kabxve{%SQrr,%B8D-MPG]+B^kUH`( TiAGP-HmR');
define('NONCE_SALT', 'o2o(oF>d`,<r>HwZ2AL&O|bx.>iy#.Xxk}@l(Je[_><lj:(eB8N%/>OYEKSf%:oc');

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

define('WP_DEBUG', false);

/* Add any custom values between this line and the "stop editing" line. */
/*SSL*/
define('FORCE_SSL_ADMIN', true);
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https')
    $_SERVER['HTTPS'] = 'on';


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */

if (!defined('ABSPATH')) {
    define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

define('CONCATENATE_SCRIPTS', false);
