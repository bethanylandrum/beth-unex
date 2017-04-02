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
define('DB_USER', 'wpadmin');

/** MySQL database password */
define('DB_PASSWORD', 'wppass');

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
define('AUTH_KEY',         '9+;SsXM]ZxM$_ohzi-g^_V ][SvaSSJ<b+ZdtmW).knT|PNm$NDbsUv9.xCA{<[(');
define('SECURE_AUTH_KEY',  '`|^*[}uU_G+PUeiYV_%3;?(4s[A?fvDuu^A6%deY[jP_F@.v(tMecfrsFM^uv:V2');
define('LOGGED_IN_KEY',    '$(w,Q(|>[F&S%eLWIvuqRl: fp^-fcUPXDv8bsSA~@`8qDvX(f5*Pq`GCoS|*@|k');
define('NONCE_KEY',        'At&gi{F-+co.#I~7P<4-8,:l9VNnSt@#Ldmje5:y?R:&Hh,W0iP7t^}8ma;X^Y0<');
define('AUTH_SALT',        '0O^vXHdNmOmcqPn>I?a_n{AO@&r[[_xG-%RHV32+Ge+}yt{l_?$.*gv@^cubrEJW');
define('SECURE_AUTH_SALT', 'K8M,39|O 2s$l}/|0a%cF.4|AXt1C<^mZ!6O @j`^/2LOJB^U`X@$9>(,!V+Hl;L');
define('LOGGED_IN_SALT',   'mXJ4eNoUC;F?a@D]s-4ESD?7=*wFR<:69TRoR~8G$XmT{^B&tSk]G6P6oK9?$3?>');
define('NONCE_SALT',       '7]b!UE&amxK8KgChgc&275jw_^BSs#gDk_}l>C-{f#>}J~pT.[A&wYGdM_5Qo<n2');

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
