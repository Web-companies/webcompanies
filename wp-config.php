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
define('DB_NAME', 'webcompanies');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY', 'F:4~WV`A8Tw(f<Ik2M-:N_;?8c^w uwD:};J<KR.Ew>x}Pk|1IFb(aKqu>61^Hk(');
define('SECURE_AUTH_KEY', 'wIXO-M+kJ;:u)zec>*)=D-|loC28QEf$Iv|/&.]@/adbjz;Kj$X+%fiD`bw+ZgRQ');
define('LOGGED_IN_KEY', 'nsCYX55o||+U% B%an/JdaH<vN:DrS-<qyPT+Dy9Exn/Ol-|!M-NB}HhpO;(gl` ');
define('NONCE_KEY', 'sSRXsWmXv`70OCMz9d|*|^2hdcKa< QVM;9^)-|vMJ9Sb.(U2>+>pGx.HuV99lRr');
define('AUTH_SALT', ',NEy+0LE/*rtm9rDjzHE6Th(v%g!9Ag@2)eF;L1+}:=`bI7zqX^,FtpO7K+0*VMT');
define('SECURE_AUTH_SALT', 'I-,{ajS6~/`U1{3Tybf0[j[2vE/BYh+.x,,bc_}hD.t`<RhK?eE%%qDf|SSA}G9`');
define('LOGGED_IN_SALT', '&;a`C-[OT:4NcQ{%/|vw`eE>!=|Yw)|G.GO1f)Sz<p>qD} Q*m/W)k1g(+37icS0');
define('NONCE_SALT', 'W<8F p+Wsb2&Ldk-`LnAt_LTnM9$B~oB+&E)P6@Py6Px+}4=isUvTK`DH)]{dAf}');

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
/* WordPress debug mode for developers. */
define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', true);
define('SCRIPT_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
    define('ABSPATH', dirname(__FILE__) . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
