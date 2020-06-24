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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'thebioin_743' );

/** MySQL database username */
define( 'DB_USER', 'thebioin_743' );

/** MySQL database password */
define( 'DB_PASSWORD', 'C74685ABFDEt1da9hse0b2' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'BG;OYqkXUhozK_)H=IUL=C |u8yGMlYu$k$6O+PaJ=#n(&7*ME|vo`fD3@a]OR4~' );
define( 'SECURE_AUTH_KEY',   '+ycE)V:Sgr![y_A,}#K+hy::L[2GZo8@.gM1M%S2`WVANgB`wrjge1WvohANcYoN' );
define( 'LOGGED_IN_KEY',     'MT>MGkO5WXi>{o*Il&nR|g6%H>4IWoa:F]IudkKDCf>S~3$%NlwQHvV8+X%W],WH' );
define( 'NONCE_KEY',         't8]P&zoD)FR[<9ZX(j2iVy{9}/9l^H>)F+XnrXg8.[hYm6rAn8g!fgpgZpfZ_+]P' );
define( 'AUTH_SALT',         ':4tp>c^&s5x/o)laB<E*Oyl81;&rB6nJ>Ofiu]@XYLtT[J$hQ7;vDVy8*@_MTRF(' );
define( 'SECURE_AUTH_SALT',  'E`yIIk29:_eovgUVkI#:CmGzx.]&WwND9}33~jxe~+X5F8WPVf`|=~26}g<^#&(6' );
define( 'LOGGED_IN_SALT',    'W~UKIW)@p0o*T,p:|:9y2.11K +%6>UqDOja){?D~tbE2+XjoBw4`A{$d6cxr1uo' );
define( 'NONCE_SALT',        'AM;9>YS,AL`Yjr8>%()*)to>5_Wk!}IZ*Tsn)X#zP4/=}i|#FWIe:m&pocK1le9,' );
define( 'WP_CACHE_KEY_SALT', '3fQ#wY3Cu%ZU* |W|$tNjyQ:~:#U(!X(nKEcbNX!Z/PB$W_g[9p>aZ!u$}M~Zjss' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = '743_';



define( 'AUTOSAVE_INTERVAL',    300  );
define( 'WP_POST_REVISIONS',    5    );
define( 'EMPTY_TRASH_DAYS',     7    );
define( 'WP_AUTO_UPDATE_CORE',  true );
define( 'WP_CRON_LOCK_TIMEOUT', 120  );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
