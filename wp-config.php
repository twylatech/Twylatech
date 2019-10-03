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
define( 'DB_NAME', 'twylatech' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'EO^:;nG4^O|g7B6]=>D7n3i-[8y~L<2fMuW!K!AKZc387:-< I}IsVMA7&X2K};!' );
define( 'SECURE_AUTH_KEY',  '8l..uXI8+C_X18{S9pZ_ [uJ<[:S:u9}AKO8ca, zJRVJG|^>eh]h*#$|1ApFOe5' );
define( 'LOGGED_IN_KEY',    '8>aPiml.(PP]qd:usX{lac}r-@B/I{yk?c8TLkbg/8iezzD~O}-HmtYnfO=MY7BB' );
define( 'NONCE_KEY',        '*:luu5*,U-K%s$E1`dJ]#0{_xL9Fzm~$0 j?{(A~bX3Efh%_];f-;[#Mew*yw**Q' );
define( 'AUTH_SALT',        'kwqlz1[%T#E[I.Mc <,$m{f^ .`-U`sg}mROh#mtjg@Q7(BEn$V}$/?41XFsa01f' );
define( 'SECURE_AUTH_SALT', '<4jM*@t@&q)[%~8@3{c(xH&Zcm@GnE%D8V&TS:lw!RqRvhi|P|$EguQAlo)=r;^9' );
define( 'LOGGED_IN_SALT',   '^py|c2 u+MLOp5).*Ou(oCoH}3T0+e*2:qJP::JZXtSw;L%?Bdfj2,t8v{UW0mcP' );
define( 'NONCE_SALT',       ',heN66H/0eI9U,P4#=!{-kKBE[UiNkLV3[oNul<Vfk<r*?e{z?/jX>yS9aWx7}n~' );

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
