<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wptestone');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'CESa<V/D]>pY*lIhssRb20/dJpdp|8?%=u18=bD9ZKHi{/-$n*DMzH:[/Yr<-i=*');
define('SECURE_AUTH_KEY',  'Jr|4{/;HRpD]ykHk@0sZ{%l!aLx7B` *^5}:slc^,FnSL,,LU@?@_9TyFvDFY(;M');
define('LOGGED_IN_KEY',    '},Q5L)*?_I#F>md.y`]Hbr%h-P`>0cEOCZ,-j?>pt*[2Hx*I*xIE#l{nXHy2|,)U');
define('NONCE_KEY',        'BjIW0$SLMd8]+>G6uYLY%im?0D2&=7ZLUM3G?gLPjjZ4.|@),X_GlwAO{><cf:(C');
define('AUTH_SALT',        'hlQxrePJ2mwR-w[pLMJZGB[ggRb|Q!>e:IGs$C$c}iNQnQ7q&|N>%YR4EkLa,5KU');
define('SECURE_AUTH_SALT', '8Hc*_lOq*WJXN.4*._Lw6-r18fOnIUQRqE@RYlj|yP_}Ac9Ame@![79= E,$F!f{');
define('LOGGED_IN_SALT',   'f%k7B-@~33Uu&+sXC+m6LN{U=o-3<?v (!4/STW[L1W:PuX&jRoJq^X*73!|&SUe');
define('NONCE_SALT',       '6;MghMf-att+R!9q |7L/o]g&<bYQ5Wl=vBVPN=Aie+GR-+lw$I5#ba|O-Rz5-~C');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
