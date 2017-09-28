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
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '^0TfUY dG4QW7LMr,_lzv&N@.}0zl@M^l8u]6^0HM=6L[_.0c]Uw^_3xRvlknl!=');
define('SECURE_AUTH_KEY',  'WAEx^Ss)xZo t,Y+br7dGH]5:i`h;*OCe~aIQs1jU(!28;UY9&XFgOK~SgU4*jcm');
define('LOGGED_IN_KEY',    'E{]l7,QnQxmr%@wIlB{Wd$%Y1> `g}[yR}DAuU-]-by2]8BJU2r?mHo6~*f)~c{(');
define('NONCE_KEY',        'W[G&&Ie5LkbbQl% 7xy4X!9C`<OoIO:%(?Da8SDDi$2c@WcS_!>)rGtDX|[Q_Ded');
define('AUTH_SALT',        '5^1z?E]mN1>d$;vvfTwK;^g/C-y`U$S}T-(7QDmW[X_o0)8`LH_Gg6H3=tUfqioS');
define('SECURE_AUTH_SALT', 'aTQk]Ym,AZa?g[)p=u?;T{e6wgNjY&Kl<2xTx`/s*gGI<|5g&hm+}l5+hIUu<g;?');
define('LOGGED_IN_SALT',   '1|%7@W|8O%>_lCAQS?<Bf>gKH=OZ7ic-Yrok+>efF(NdZ>.PBH<rQE#l]Kwm`|+{');
define('NONCE_SALT',       'q@(^OStv2Szgo:KdL[C|c*/%)yX!(yysY:Ig-X]aidXCo`-bxJ}Ai{S(H=aG*8v6');

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
