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
define('DB_NAME', 'casabellam');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '');

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
define('AUTH_KEY', 'r$0*5`VEsp{n|# #6>DF$]B#m%xt+@+^ `>nzMYHtiB|Vq|EjnWK;sv 1l9W_gYF');
define('SECURE_AUTH_KEY', '`}}jh_,P&|]=6z9@M34uh@hAkI3kW9!-XVavgJ5 L{;beZA|4lXwb7_ad{Qp+}X|');
define('LOGGED_IN_KEY', '0$E35!Y7z-3iJGdq&ux1`[ee~D]?U9b-nSCRxZxa).3$|;5B;Z]87)5 J0yqM/PE');
define('NONCE_KEY', '4aCkx;=%y~!d0z)Byy9?NIV{W}iiUPA+O_|4/ w-;lIV,k-&WR:eol3q*C6F#^|C');
define('AUTH_SALT', '.T/X#7WMLW,u7#H.q@`yN+Ty[|~rzK,hJ9tA#}qJ.4F.j0giFCUbdT919S1=JUjt');
define('SECURE_AUTH_SALT', 'pF~9mu5-~`|/t|9Cv9P[to1>^|]Zu7}88N3E/h5TvXQ.Lzz3:5?)_q/1O+;0K5r|');
define('LOGGED_IN_SALT', '#%GP )7tMr?Nvs_X^~:@vkL$D;K@7-1yp72^_eG27*>):Qcq~^7.540()@w.e.FM');
define('NONCE_SALT', 'LKpbm?0.p.Z&0leq(9> =(qE~_^{e`OtC5%99PYOhumn<v>]bnXiIT-)o)2k4h]Z');

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

