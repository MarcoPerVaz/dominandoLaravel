
<!-- title -->
<h1 align="center">Curso - Dominando Laravel de Cero a Experto Laravel 5.7</h1>
<!-- end title -->

<!-- commit name -->
### Commit | __Variables de entorno y bases de datos__
<!-- end commit name -->
===
<!-- official documentation -->
[Documentación | `Environment Configuration`](https://laravel.com/docs/5.7/configuration#environment-configuration)

[Documentación | `Database: Getting Started`](https://laravel.com/docs/5.7/database)
<!-- end official documentation -->

<!-- commit instructions -->
1. Edición del archivo de configuración `.env`

    **`DB_DATABASE=dominandoLaravel`*

    **`DB_USERNAME=root`*

    **`DB_DATABASE=`*
2. Crear la Base de Datos

    **Asegurarse de iniciar el servidor de base de datos de Laragon, Xampp, Wamp, etc.*
    - Opción 1
        - `Crear la base de datos de forma manual desde el gestor de base de datos` 
    - Opción 2
        - Abrir la terminal de Laragon o la terminal de Git Bash
        - Escribir el comando
          > mysql -u root
        - Escribir el comando
          > create database dominandoLaravel;
        - Escribir el comando para salir de Mysql
          > exit;
<!-- end commit instructions -->
===
<!-- notes -->
#### Notas:
  - [Documentación oficial de `Laravel 5.7`](https://laravel.com/docs/5.7)
    ##### __Variables de entorno__
  - [Documentación | `Retrieving Environment Configuration`](https://laravel.com/docs/5.7/configuration#retrieving-environment-configuration)

  - Las variables de entorno son las que varían dependiendo nuestra aplicación
      - Lo más comunes son `Entorno de desarrollo` y `Entorno de producción` 
      - `Entorno de Desarrollo` Es cuando estamos desarrollando la aplicación y se encuentra en nuestro ordenador personal
      - `Entorno de Producción` Es cuando la aplicación ya se encuentra en un servidor público
      - Cada entorno deberá tener separada la base de datos, es decir, el entorno de desarrollo tendrá su base de datos y el entorno de producción tendrá su base de datos
      -  Para especificar las variables de entorno en Laravel se usa el archivo `.env` que es un archivo adicional que contendrá todos los datos de conexión de nuestra aplicación, es un archivo sensible por lo que Git lo debe ignorar y cada que se clona el proyecto deberá configurar su propio archivo `.env`
      - El archivo `.env` cambiará dependiendo el entorno y el desarrollador
      - El archivo `.env` sabe en que entorno está, gracias a `APP_ENV=` y `APP_DEBUG=`
          - `APP_ENV=local` es Entorno de Desarrollo
          - `APP_ENV=production` es Entorno de Producción
          - `APP_DEBUG=true` muestra detalles de los errores de Laravel
          - `APP_DEBUG=false` no muestra detalles de los errores de Laravel

              **`Es importante tener APP_DEBUG=false en producción para evitar mostrar información sensible de la aplicación`*  
    ##### __Bases de Datos__
  - [Documentación | `Database: Getting Started`](https://laravel.com/docs/5.7/database#introduction)  

  - La configuración de la base de datos se encuentra en `config\database.php` (No se debe modificar)
  - Las modificaciones necesarias sobre la base de datos se hacen en el archivo `.env`
  - Edición del archivo de configuración `.env`

        **`DB_DATABASE=dominandoLaravel`*
    
        **`DB_USERNAME=root`*
    
        **`DB_DATABASE=`*
  - Crear la Base de Datos

    **Asegurarse de iniciar el servidor de base de datos de Laragon, Xampp, Wamp, etc.*
    - Opción 1
        - `Crear la base de datos de forma manual desde el gestor de base de datos` 
    - Opción 2
        - Abrir la terminal de Laragon o la terminal de Git Bash
        - Escribir el comando
          > mysql -u root
        - Escribir el comando
          > create database dominandoLaravel;
        - Escribir el comando para salir de Mysql
          > exit;  
<!-- end notes -->
===
<!-- information -->
<!-- #### Información -->
<!-- end information -->