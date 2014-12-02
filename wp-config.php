<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'haha');

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
define('AUTH_KEY',         '[!1[)oEGtNc$2@yRZEU]&7r+@(u*E?_vF}|M`:7j K}hmJuY=)ABkOpmaW$|-.jk');
define('SECURE_AUTH_KEY',  'dpWeM<DwE+3CHr/$M-l]|${JkfD^jk|ePN^jia{NY)FKl^obe}m: =p8`-f2JhD6');
define('LOGGED_IN_KEY',    'S@]g)9jDz+`s:|Yxr,A/39OeKPF@-[GU21w4R.@qxl4<eH{zPY_Stxn_q+fZJL,J');
define('NONCE_KEY',        ')++#?{95+_4O!7S%+4lqL>VaP@76*8-GQ|}K?i_!65!>R^Nd0}1>G~UZ3{KL_}dr');
define('AUTH_SALT',        'e@u]=S{_*2. 79lO,hFt`/c2~>>P.zSYJ>^xha=AVw9mm`IRh|N)zifmd+U&9D>Y');
define('SECURE_AUTH_SALT', '@ 1&&$AfIRL@K>Lr%:isZ[9[okF0Bf]x*J5aDJ|Sp_-UG]k^UW~gJcPsJ*OzC7SZ');
define('LOGGED_IN_SALT',   '9ASus55 QT%,{-U,$&ndDd-|@7+ :PI,)%T21mK=yC4:k~X!6:`GJgn@&Dc?(. }');
define('NONCE_SALT',       ',eV|i<:[azjUMs$~3aHr.RK#::/2dG(l,M~||&y_99gf7pFc!v(^BQF^R@b3PzW-');

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
