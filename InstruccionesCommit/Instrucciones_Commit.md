
<!-- title -->
<h1 align="center">Curso - Dominando Laravel de Cero a Experto Laravel 5.7</h1>
<!-- end title -->

<!-- commit name -->
### Commit | __Estructura de carpetas__
<!-- end commit name -->
===
<!-- official documentation -->
[Documentación | `Directory Structure`](https://laravel.com/docs/5.7/structure)
<!-- end official documentation -->

<!-- commit instructions -->
1.  Directorio `app` contiene el código de la aplicación
      - Por defecto este directorio está bajo el namespace App y es cargada automáticamente por Composer
      - Directorio `app\Console` aquí guardamos los comandos que creemos nosotros y se registran en `app\Console\Kernel.php`
      - Directorio `app\Exceptions` tenemos el manejador de excepciones o errores de la aplicación y aquí se almacenan         excepciones personalizadas 
      - Directorio `app\Http` contiene los controladores, middlewares y el archivo `app\Http\Kernel.php` para registrar los middlewares
      - Directorio `app\Providers` contiene service providers de la aplicación y podemos almacenar los que creemos nosotros
2.  Directorio `bootstrap`
      - Archivo `bootstrap\app.php` que es el que arranca el framework
      - Directorio `bootstrap\cache` que son los archivos generados con laravel y no tengan que procesarse en cada petición y así optimizar el rendimiento de la aplicación
3.  Directorio `config` contiene toda la configuración de la aplicación 
      - Archivo `config\app.php`
          - Contiene la configuración del nombre de la aplicación
          - Definir si estamos en producción o en desarrollo
          - Si queremos mostrar errores sensibles de la aplicación
      - Archivo `config\database.php` maneja la configuración de la conexión a base de datos

        **Los cambios a la configuración deben hacerse en el archivo `.env`*

        **`.env.example` contendrá información para que en caso de clonar el proyecto se sepa que debe hacerse en `.env`*
4.  Directorio `database`
      - Directorio `database\factories` ó fábricas
      - Directorio `database\migrations` ó migraciones
      - Directorio `database\seeds` ó semilleros

      **Considerar guardar los archivos en este directorio si se usa SQLite*
5.  Directorio `public`
      - Archivo `public\index.php` que es el punto de entrada de todas las peticiones que se realicen a la aplicación
      - Contiene los archivos js
      - Contiene los archivos css
      - Contiene los archivos de imágenes

      **Es el único directo accesible públicamente para el usuario*
6.  Directorio `resources`
      - Vistas de la aplicación `resources\views`
      - Directorio `resources\assets` que son los archivos no compilados de la aplicación que luego de ser compilados terminarán en el directorio `public`
          - Contiene los archivos no compilados de css
          - Contiene los archivos no compilados de js
          - Incluso puede contener imágenes
      - Archivos de traducción `resources\lang`
7.  Directorio `routes`
      - Archivo `routes\web.php` es dónde definiremos las rutas de nuestra aplicación
      - Archivo `routes\api.php` no contiene sesiones, cookies que si contiene `routes\web.php`
      - Archivo `routes\console.php` sirve para agregar comandos fácilmente
      - Archivo `routes\channels.php` se definen los canales de transmisión o broadcast que la aplicación soporte
8.  Directorio `storage`
      - Contiene las vistas compiladas
      - Contiene las sesiones basadas en archivos
      - Contiene archivos en caché
      - Directorio `storage\app`
          - Contiene los archivos generados por la aplicación
              - Directorio `storage\app\public` puede ser usado para guardar archivos generados por el usuario, cómo por ejemplo: imágenes de perfil que deben ser accesibles públicamente y para poder acceder a este directorio se debe crear un enlace simbólico (symbolic link) en directorio  public\storage y que apunte a esta carpeta
                > php artisan storage::link
      - Directorio `storage\framework`
          -Contiene los archivos generados por la aplicación, cómo vistas, sesiones
      - Directorio `storage\logs`
          - Contiene información detallada sobre los errores que ocurren en la aplicación
9.  Directorio `tests` que da un ejemplo de tests
10. Directorio `vendor` que contiene todas las dependencias de Composer (no se toca, más que para leer lo que necesitemos)
<!-- end commit instructions -->
===
<!-- notes -->
#### Notas:
  - [Documentación oficial de `Laravel 5.7`](https://laravel.com/docs/5.7)
<!-- end notes -->
===
<!-- information -->
<!-- #### Más Información -->
<!-- end information -->