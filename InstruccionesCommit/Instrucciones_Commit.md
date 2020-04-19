
<!-- title -->
<h1 align="center">Curso - Dominando Laravel de Cero a Experto Laravel 5.7</h1>
<!-- end title -->

<!-- commit name -->
### Commit | __Route model binding - URLs amigables__
<!-- end commit name -->
===
<!-- official documentation -->
[Documentación | `Route Model Binding`](https://laravel.com/docs/5.7/routing#route-model-binding)
<!-- end official documentation -->

<!-- commit instructions -->
1. Edición del controlador `app\Http\Controllers\ProjectController.php`
    - Edición de la función `show($id)`
2. Edición del archivo de rutas `routes\web.php`
3. Edición del modelo `app\Project.php`
4. Edición de la migración `database\migrations\2020_04_18_025856_create_projects_table.php`
    
    **Se agregó el campo 'url' para usar rutas amigables*

5. Se recreó la base de datos **(sólo hacerlo en entorno de desarrollo)**
    > php artisan migrate:fresh
6. Se crean registros de forma manual en la tabla projects de la base de datos
<!-- end commit instructions -->
===
<!-- notes -->
#### Notas:
  - [Documentación oficial de `Laravel 5.7`](https://laravel.com/docs/5.7)
<!-- end notes -->
===
<!-- information -->
#### Información
**Más información en `app\Http\Controllers\ProjectController.php`*

**Más información en `routes\web.php`*

**Más información en `app\Project.php`*

**Más información en `database\migrations\2020_04_18_025856_create_projects_table.php`*
<!-- end information -->