<?php
/**
 * The base configuration for WordPress
 */

// ** MySQL settings ** //
define('DB_NAME', 'wp_724e4e9f11fbbca7');
define('DB_USER', 'wp-724e4e9f11fbb');
define('DB_PASSWORD', 'vmQsRYsD');
define('DB_HOST', 'localhost');
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');

/** Authentication Unique Keys and Salts */
define('AUTH_KEY',         'BM1KUV%&opESKObrs6mzbN8@(91oeszLA#wTBj*!8C!l0!yzRHi1KySlWrkHAYxi');
define('SECURE_AUTH_KEY',    'VOQCoQG2dErVQA#mV#3^y$z@NGUsEd696AB#utV3tWX#VYZ5um!H3RWcSIEBc2pa');
define('LOGGED_IN_KEY',        'RBow9YQCjoBYk0cvF6mwJloq40Z#V@kuGJGS#^&trDyWr%wWKeVGZCCO$IcCbpxW');
define('NONCE_KEY',        'W$3K2L%D2k2U@db(SisXM(H@snUg5dPzq&n5uACs3Uko4P(#5iNu9u%rT9NKB@NL');
define('AUTH_SALT',        'kTKa7J@kyc#c0yYvfbe&Vuod3i7lX00FNKUw1Ra3zQ@Dw%gCsbN4629yNHFF*jnp');
define('SECURE_AUTH_SALT',    'BDf#3PQ#mQtF4xr#%j@snG@Uwnz3^by%VCiW#3xc#&AIMrWV^t!yECZkkHkbOt6K');
define('LOGGED_IN_SALT',    'HOMbopdJPE@tJ0Kwkw069thqome!y%l5Di&AaTRF*NfstQiMW6HAng6H$3x9uAHK');
define('NONCE_SALT',        '%rGRjCDgsqrWo83sD2%lwXBbGchat7pxdv&sIuAisfr4ek4xc13g8Yww8ZMvro3#');

$table_prefix  = 'wp_';

define('WPLANG', 'es_ES');
define('WP_DEBUG', false);

/** * FUERZA DE PERMISOS Y MÉTODO DE ESCRITURA 
 * Esto ayudará a que el servidor deje de dar errores 403 al leer archivos
 */
define('FS_METHOD', 'direct');
define('FS_CHMOD_DIR', 0755);
define('FS_CHMOD_FILE', 0644);

// Corrección para servidores Dinahosting (Proxies SSL) - Mantenemos esto por estabilidad
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
    $_SERVER['HTTPS'] = 'on';
}

/* That's all, stop editing! Happy blogging. */

if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

require_once(ABSPATH . 'wp-settings.php');