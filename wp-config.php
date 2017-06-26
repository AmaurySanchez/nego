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
define('DB_NAME', 'nego');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY', 'KQf$|2?,uc,=dee*W=)aN^^2~n!~8$:uvE8>6%*: #JK/_7&VPTIhCNv`Aey:w1X');
define('SECURE_AUTH_KEY', 't} sv69nt;zL$MMT}jA[>>EW}D_jdTYt_wyNQZqx|Nx.3UHNYITm5]L_{<OHZbZe');
define('LOGGED_IN_KEY', '/&5q>eHB99i_%ZTKvia)qwvN0Yo%oxj0)oPwH&JjT=?r* xE-$o2StuBWk{*it/.');
define('NONCE_KEY', 'n8rpu~V]]pI?X;|-h~x$-@K_5MDJ E6^[A!&H+h>>n]j;795M)t3R}5ML!%y+%<t');
define('AUTH_SALT', ':RxPT<$]+_@-o)&;1+wuHPYUJ^3i@UqgHO>gSy~0i:b2l>$&,XU0bz>>jm2cAxo?');
define('SECURE_AUTH_SALT', '9@h-CdhgRf2ihYwTQHHMqqW$emqM4p85;bg =9yuwM7o}=Ag58#L@yQsNB}/*|!G');
define('LOGGED_IN_SALT', 'leR7olX.I3t>v,z~*v5e*u}dk@zBLX>vd3gjQC6cz%Q}*_kttUfWak=yI~9R;tB;');
define('NONCE_SALT', 'Ggz<^[M_>5~Oxo2h9 MB;2Heg,yFd(|H`?(L|Z(A(,:d:cX6u#8AIVMsR1|bYV*Z');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wl_';


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

