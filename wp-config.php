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

// Database settings
define('DB_NAME', 'wordpress_49');
define('DB_USER', 'root');
define('DB_PASSWORD', 'admin');
define('DB_HOST', 'localhost');
define('DB_CHARSET', 'utf8mb4');
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
define('AUTH_KEY',         '`R%lvW(G93XU^YbIX{+B<;R|.1;^)}:{5e!_tBip:I!D0+Y)+V^aj4klcJ9R?JDC');
define('SECURE_AUTH_KEY',  '*O$:>cv*(Qd|Ti4YaONI&pj8lLa$f$O5:f2mni:Ah8O;F?!j*26&IQ{-n `bq/q6');
define('LOGGED_IN_KEY',    '%~%q-z,O1z,~O(4*AjA|S)BMm[9#*B!R!,[hBqdS~;9GS@ik->la9?dO6mPZ9on>');
define('NONCE_KEY',        'k_3)BIs~J<8:|2E*K)v@[E-TT5Ji-eV6s0l(?XX%oy(7raTG*0OE3rW1}v,$4 .L');
define('AUTH_SALT',        ',3f`A;^1SMk?sG&PQ(g{v5S(4@BoP#pdanQA`?H&lLDBFS:[.P,.k6_.,P}2!=4}');
define('SECURE_AUTH_SALT', 'V]DD|lc5/UwF,):F6;7$FA51QZ<8l->T%7G2 BxhgbZom +ds7=re2))jS]Q8ntL');
define('LOGGED_IN_SALT',   'N7Hy_WUquomyA}AHCUe;A@.6$9+mm ,PaYmbqte?JWR-i$d#DeR-)s}@lxj[MnI]');
define('NONCE_SALT',       'iO2|RpS!Q?2hwwe%.g%9xkQf. ZN FTv^EEy_9y-.!wp9A6k:c/lG)OUe-9dpOOd');

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

// Custom settings
define('AUTOMATIC_UPDATER_DISABLED', true);
define('WP_POST_REVISIONS', 0);
define('AUTOSAVE_INTERVAL', 1800);
define('WP_AUTO_UPDATE_CORE', false);

// Network settings
define('WP_ALLOW_MULTISITE', true);
define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', true);
define('DOMAIN_CURRENT_SITE', 'wordpress49.dev');
define('PATH_CURRENT_SITE', '/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') ) define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');