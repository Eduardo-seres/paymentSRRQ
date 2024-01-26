# Guía de Configuración de Desarrollo Local en Windows

## Instalación de XAMPP con PHP 7.4

1. Descarga XAMPP con PHP 7.4 desde [este enlace](https://sourceforge.net/projects/xampp/files/XAMPP%20Windows/7.4.30/).
2. Ejecuta el instalador y sigue las instrucciones.
3. Copia la ruta de instalación de PHP (por ejemplo, `C:\xampp\php`).

## Configuración del Path Global

1. Haz clic derecho en "Este Equipo" y selecciona "Propiedades".
2. Ve a "Configuración Avanzada".
3. Haz clic en "Variables de entorno".
4. Selecciona la variable "Path" y haz clic en "Editar".
5. Pega la ruta de PHP copiada en el paso anterior.
6. Haz clic en "Aceptar" en todas las ventanas.
7. Abre una terminal y escribe `php -v` para confirmar la instalación correcta.

## Instalación de Composer

1. Descarga Composer desde [aquí](https://getcomposer.org/download/).
2. Durante la instalación, selecciona "Install for all users" y sigue las instrucciones.
3. Ignora la opción "Developer mode".
4. Completa la instalación.
5. Abre una terminal y escribe `composer` para verificar la instalación.

## Configuración del VirtualHost (si es necesario)

1. Abre el archivo `httpd-vhosts.conf` ubicado en la carpeta de configuración de Apache.
2. Asegúrate de que la directiva `Include conf/extra/httpd-vhosts.conf` esté habilitada en el archivo `http.conf`.
3. Configura tu VirtualHost según sea necesario.

---

