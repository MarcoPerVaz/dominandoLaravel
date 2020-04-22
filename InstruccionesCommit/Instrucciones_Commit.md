
<!-- title -->
<h1 align="center">Curso - Dominando Laravel de Cero a Experto Laravel 5.7</h1>
<!-- end title -->

<!-- commit name -->
### Commit | __Cómo proteger rutas con usuario y contraseña__
<!-- end commit name -->
===
<!-- official documentation -->
[Documentación | `Middleware`](https://laravel.com/docs/5.7/middleware#introduction)

<!-- end official documentation -->

<!-- commit instructions -->
1. Edición del archivo de rutas `routes\web.php`
2. Edición del controlador `app\Http\Controllers\ProjectController.php`
    - Creación y edición de la función `__construct()`
3. Edición de la vista `resources\views\projects\index.blade.php`
4. Edición de la vista `resources\views\projects\show.blade.php`
<!-- end commit instructions -->
===
<!-- notes -->
#### Notas:
  - [Documentación oficial de `Laravel 5.7`](https://laravel.com/docs/5.7)
  - Para proteger rutas se usan middlewares
  - Los middlewares filtran las peticiones HTTP
  - Los middleares se almacenan en `app\Http\Middleware`
  - Los middlewares se deben registrar en `app\Http\Kernel.php`
  - Para reestringir o permitir que funciones deben pasar por el middleware se usa la función `__construct()`
      - La función `__construct()` debe crearse antes que cualquier función
  - En Laravel 5.7 la localización del midllware Aut está en `app\Http\Middleware\Authenticate.php`
  - En Laravel 5.5 la localización del middleware Auth está en `vendor\laravel\framework\src\Illuminate\Auth\Middleware\Authenticate.php` 
<!-- end notes -->
===
<!-- information -->
#### Información
**Más información en `routes\web.php`

**Más información en `app\Http\Controllers\ProjectController.php`

**Más información en `resources\views\projects\index.blade.php`

**Más información en `resources\views\projects\show.blade.php`
<!-- end information -->