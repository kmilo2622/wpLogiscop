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

define('DB_NAME', 'u864021742_lezat');



/** MySQL database username */

define('DB_USER', 'u864021742_veruq');



/** MySQL database password */

define('DB_PASSWORD', 'HyPyTaQeVe');



/** MySQL hostname */

define('DB_HOST', 'mysql');



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

define('AUTH_KEY',         'MD0ouxzeV3lCRN4GEJqeSE4ocQ2CfYlsCD76ygMGd7t6WBsa7qJDlacuTnMZp26Y');

define('SECURE_AUTH_KEY',  '83ovorKTPI9KCzTkLL6uZ8VgtIxDXFE829QsMRs5GJuqhp1t7s5D6GF3JN0a7NVi');

define('LOGGED_IN_KEY',    'biXt6Z28pWezspjWX0v3mrIAFmotIcG2wL2klCFFiTtHuTY4ETqe1UklU7rmdn0e');

define('NONCE_KEY',        'gCGdG88MafJhB3NCcgLUCkfq4S2ywGmZs6CaxDKjlaqn2tb4L3wU069G6RbY4IPn');

define('AUTH_SALT',        'NdsPDcQ3XTRcr84hTbuIcxnQPWQ89TBRFwlpD8Llspr2wW2BsWY7Ii2oTeUP3ZAp');

define('SECURE_AUTH_SALT', 'FYLlbuC53ATQyGKP3ysjyFpI35YNPMQmU1CUJWTR43xXqOKohRm5jNSyMFYCUFUa');

define('LOGGED_IN_SALT',   'oj6RH77jgrzzokQcCS1EXt4HgbdJvnlLzW3MMrHqEIDQkCozh3pPdFthmJzT7UGS');

define('NONCE_SALT',       'OzCbFMiIRMzLFCnLR0rVmBe2hkKoV60c3Ce2uqqZUlLuTHWTH6g77XFDXUrs1sau');



/**

 * Other customizations.

 */

define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');



/**

 * Turn off automatic updates since these are managed upstream.

 */

define('AUTOMATIC_UPDATER_DISABLED', true);





/**#@-*/



/**

 * WordPress Database Table prefix.

 *

 * You can have multiple installations in one database if you give each

 * a unique prefix. Only numbers, letters, and underscores please!

 */

$table_prefix  = 'mpbe_';



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
