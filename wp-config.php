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
define('DB_NAME', 'wp_property');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '?hKOO{0+Q(:Ns<ORI1:!75UW,Pcg@Zgnb.lS~T|)f]%b)1<APl|4qV0]#GyJo}$ ');
define('SECURE_AUTH_KEY',  'Z0/Rm?M`zDr[-7Q8YD}(jkxq|>91Oq#FM^<7M>o7@FW-&@Mf6JYD{oiICcFw6x3e');
define('LOGGED_IN_KEY',    '$fV29E=BCL%S>I:Kx$|XcK*8595A]+g>F>_x!85m!g?z}bcH>cHi=3pIn6=ke$p{');
define('NONCE_KEY',        'gQA}cCpG7n!rPNkjV.Y;HSsv{G*21JV_0]f)D`RNDL9S0[m:=OfY8kk>-#o2,9Jk');
define('AUTH_SALT',        'O>14i|6p`{-_TF?+.$i]mPY]Lba1VY1?d1GufV3o{RUcFjd/o}n=nZ0i_n}7BAN$');
define('SECURE_AUTH_SALT', 'B,vJAv@uhg/flGso&:HLTtmv+=h~sgZ?^~b3}Ws3qvQ*o?fA|LI^:M~xdFUCV.]v');
define('LOGGED_IN_SALT',   '@)>eV)}V{lx}RYz&,<I:N+HylnOdtF$ect1}dJBRv,1L}qW>5:9G3nZt4|6s)|$p');
define('NONCE_SALT',       '%F??9QFRgJR9L{75b.qR8StbD.;.lvNICEU-epe ~T=~#Vni56[/!G0 [5K?3nG=');

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
