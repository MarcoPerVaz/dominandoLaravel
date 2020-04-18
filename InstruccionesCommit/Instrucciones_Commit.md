
<!-- title -->
<h1 align="center">Curso - Dominando Laravel de Cero a Experto Laravel 5.7</h1>
<!-- end title -->

<!-- commit name -->
### Commit | __Qué son y cómo se utilizan las migraciones__
<!-- end commit name -->
===
<!-- official documentation -->
[Documentación | `Database: Migrations`](https://laravel.com/docs/5.7/migrations#introduction)

[Documentación | `Columns`](https://laravel.com/docs/5.7/migrations#columns)
<!-- end official documentation -->

<!-- commit instructions -->
1. Edición del archivo de migración `database\migrations\2014_10_12_000000_create_users_table.php`
2. Creación y edición del archivo de migración `database\migrations\2020_04_18_025856_add_phone_to_users_table.php`
    > php artisan make:migration add_phone_to_users_table --table=users

    **Migración que agrega un campo string('phone´)->nullable*
3. Creación y edición de la migración `database\migrations\2020_04_18_025856_create_projects_table.php`
4. Eliminación de la migración `database\migrations\2020_04_18_025856_add_phone_to_users_table.php`

    **Esta migración fue para practicar, pero aquí abajo se muestra lo importante*

    **`$table->string('phone')->default('valorPorDefecto');` Por si se quiere crear un campo con valor predefinido*

    **`$table->string('phone')->nullable();` Por si se quiere crear un campo que permita valores nulos*

    **`$table->string('phone')->nullable()->after('email');` Por si se quiere crear un campo que permita valores nulos y colocar después de algún campo en particular*

    **`$table->dropColumn('phone');` Revierte la creación de la columna `phone`*
5. Refrescamos la base de datos
    > php artisan migrate:fresh
<!-- end commit instructions -->
===
<!-- notes -->
#### Notas:
  - [Documentación oficial de `Laravel 5.7`](https://laravel.com/docs/5.7)
  - Las migraciones son un Control de versiones de la base de datos
  - Permite crear y modificar fácilmente las tablas
  - Permite destruir y reconstruir el esquema de la base de datos
  - Por defecto laravel incluye 2 migraciones y están en `database\migrations`
    - `database\migrations\2014_10_12_000000_create_users_table.php`
    - `database\migrations\2014_10_12_100000_create_password_resets_table.php`

    **Las migraciones por defecto varían dependiedo la versión de Laravel*
  - El nombre de la migración incluye la fecha de creación seguido por la acción que realiza
      - `2014_10_12_000000_create_users_table.php`
          - Dónde `2014_10_12_000000` es la fecha en que fue creada la migración
          - Dónde `create_users_table.php` es la acción de la migración (crear una tabla llamada usuarios)
  - Para ejecutar las migraciones
    > php artisan migrate
  - Para revertir cambios de una base de datos
    > php artisan migrate:rollback

     **Depende del número que se encuentre en la tabla `migrations` de la base de datos y en su campo `batch` para regresar un número anterior*

     **Ejemplo: si en batch existe un o varios 3, rollback quitara cualquier migración con batch=3</em>*
  - Para revertir ciertos pasos (steps) hacía atrás
    > php artisan migrate:rollback --steep=nSteps

      **Dónde nSteps debe ser el número de pasos hacía atrás que se quieran hacer*

      **Ejemplo: `php artisan migrate:rollback --steep=1`*
  - Para quitar todas las tablas y volver a ejecutar las migraciones
    > php artisan migrate:fresh

      **Este comando es destructivo ya que elimina toda la información de las tablas*
  - Para crear una migración
    > php artisan migration nombreMigracion

      **El nombreMigracion debe especificar para que es la migración*

      **Ejemplo: `create_categories_table` laravel automáticamente agrega la fecha a la migración*

      **Ejemplo: `add_phone_to_users_table` laravel automáticamente agrega la fecha a la migración*

       > php artisan migration nombreMigracion --create=nuevaTabla

      **El nombreMigracion debe especificar para que es la migración*

      **Ejemplo: `create_categories_table` laravel automáticamente agrega la fecha a la migración*

      **Ejemplo: `add_phone_to_users_table --create=nuevaTabla` laravel automáticamente agrega la fecha a la migración, por si queremos que laravel nos ayude con un poco de código al crear la nueva migración para una tabla nueva*

       > php artisan migration nombreMigracion --create=nuevaTabla

      **Ejemplo: <code>add_phone_to_users_table --table=tablaExistente</code> laravel automáticamente agrega la fecha a la migración, por si queremos que laravel nos ayude con un poco de código al crear la nueva migración para una tabla existente*

       > php artisan migration nombreMigracion --table=tabla
  - Para usar funciones de las migraciones para SQLite u otras cosas [Ver ayuda](https://stackoverflow.com/questions/22413408/install-dependency-doctrine-dbal-on-composer-laravel)
<!-- end notes -->
===
<!-- information -->
#### Información
**Más información en `database\migrations\2014_10_12_000000_create_users_table.php`*

**Más información en `database\migrations\2020_04_18_025856_create_projects_table.php`*
<!-- end information -->