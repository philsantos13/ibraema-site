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
define('DB_NAME', 'ibraema');

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
define('AUTH_KEY',         '<O0!#sBnbtfLc9lBG,ox8D&>M,9$@JlViD]mz_zze:O,!7PX9fMcR=zy~r4I0Da(');
define('SECURE_AUTH_KEY',  '4~vgzk@k/F~ daI{vBGfs!w.k<[J:*vb.3@,)SY5*aZq3(WA92`xg)0}O)+bQbYd');
define('LOGGED_IN_KEY',    '/:iet^4|aYe82EN*$4-TxgGfx0+XM}y!1%U}FU ;qn=)iuWVtyd+xmGIp8J/fYf%');
define('NONCE_KEY',        ':(z[r=oa~q|}t_UlBpF6&3sPMP`Q6W2H$zz{D*np)@;5>F6.czq!Qex9) =x Ptj');
define('AUTH_SALT',        '}lRa9,1x`2iq93L*t:Fqja7BFzGY]zj)BPyXtuFkV$t*}Wprv;2*^5XqE_e;vch<');
define('SECURE_AUTH_SALT', 'e.$jbmH/tV9w53SN1hj.#NtKoWon%[y*~^nc9e3taEdR_5N0Fq1jN1g-iznb]4l7');
define('LOGGED_IN_SALT',   'O&/_b&:o&#(>_lqznb4W4>SCM;=}e:h%tGI_a|Ou?H,s)V)@=eQdDZ%eb@ntFl:$');
define('NONCE_SALT',       'gh_~wd}e?gmP*8:+=uW[4&rNlLNL80I3O>N:#L&[=61S7vT~:F|B&,)rA_Bh9fcq');

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
