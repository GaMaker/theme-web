<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 't_gamakerweb');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'joar');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 's{N3c!DWLDtH9FQdxrj0U@o}*g)5VC~[#+hS|Bh~^9tF|YtX+q:4%d~ktIhrU*7P');
define('SECURE_AUTH_KEY', '[?qq+XTJN| nh|;~kunTM%a$z#HRfaP)kj(ph%aNn;oZ&yV/M  -<FHU_||bA6.g');
define('LOGGED_IN_KEY', 'vSfWt{i66/@Ve/wp-ymgCl!:n|rgJ*+Dd[/WCV+n?|57~MF]8Wyd/je=BUqc]e#p');
define('NONCE_KEY', '1X^J__]Bznb2^Lx~ Xt@6G]@wl`*=NhjWtjy0qPUc32W&&!Wf44h.q*.W30@HZ$R');
define('AUTH_SALT', '#=4=nMK}o6|uYK+ZP|,E(|}X-KMo$*V ,n}%3En~6+HFu79y$S&J9[r!{E;C$0&u');
define('SECURE_AUTH_SALT', 'Kf+3LA-tP|XGbn^V|BOR.RAt:fV3]bO8lDCjC5R[ZmvaG8#Ewc+Jj_>RTYYC5c$.');
define('LOGGED_IN_SALT', '^,E>c~k <+(}K<?brNhI-Krs7@yZVsM-`V~d64SgB{32w+|z-W>.$j[?8E(5T{/Z');
define('NONCE_SALT', '1:oVPlK-%,(8mmt;Xjsz6jFA-^|(N2&W*8m9jUy:1>Zcq#~dubpH^7c1,,i&=9jW');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

