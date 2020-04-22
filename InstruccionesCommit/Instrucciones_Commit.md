
<!-- title -->
<h1 align="center">Curso - Dominando Laravel de Cero a Experto Laravel 5.7</h1>
<!-- end title -->

<!-- commit name -->
### Commit | __Agregando login y registro__
<!-- end commit name -->
===
<!-- official documentation -->
[Documentación | `Using The Session`](https://laravel.com/docs/5.7/authentication#authentication-quickstart)

<!-- end official documentation -->

<!-- commit instructions -->
1. Instalar scaffolding para login y recuperación de contraseñas (rutas y vistas)
    > php artisan make:auth

    **Como ya existe una vista llamada `home.blade.php` Laravel pregunta: __The [home.blade.php] view already exists. Do you want to replace it? (yes/no)__*
    > no
2. Eliminación del controlador `app\Http\Controllers\HomeController.php`
    
    **php artisan make:Auth crea este controlador*
3. Edición del archivo de rutas `routes\web.php`
    
    **php artisan make:auth genera 2 rutas y como eliminamos el controlador `app\Http\Controllers\HomeController.php` pues también debemos quitar la referencia, osea quitar `Route::get('/home', 'HomeController@index')->name('home');`*
4. Edición del controlador `app\Http\Controllers\Auth\RegisterController.php`
    - Edición de la función `__construct()`
5. Edición del controlador `app\Http\Controllers\Auth\LoginController.php`
6. Edición de la vista `resources\views\home.blade.php`
7. Edición de la vista `resources\views\partials\nav.blade.php`
8. Edición del middleware `app\Http\Middleware\RedirectIfAuthenticated.php`
<!-- end commit instructions -->
===
<!-- notes -->
#### Notas:
  - [Documentación oficial de `Laravel 5.7`](https://laravel.com/docs/5.7)
  - Las sesiones se almacenan en `storage\framework\sessions`
  - A partir de Laravel 6 el login y el registro funcionan diferente aunque nada complicado (ver documentación)
      - Más información en `https://laravel.com/docs/6.x/frontend`
  - `make:auth` genera una sola ruta para todas las rutas de Auth
      
      **`Auth::routes()` en `routes\web.php`*
      - GET /login => Para mostrar el formulario de login 
      - POST /login => Dónde se envía el formulario del login 
      - POST /logout => Para cerrar sesión 
      - GET /register => Para mostrar el formulario de registro 
      - POST /register => Dónde se envía el formulario de registro
  - Los controladores encargados del Login ya vienen por defecto en los proyectos de laravel 5.5
      - `app\Http\Controllers\Auth\LoginController.php` 
      - `app\Http\Controllers\Auth\RegisterController.php`
  - El comando `make:auth` crea:
      - Crea el directorio el `resources\views\auth`
          - Crea la vista `resources\views\auth\login.blade.php`
          - Crea la vista `resources\views\auth\register.blade.php`
          - Entre otras...
      - Crea el directorio `resources\views\layouts`
          - Crea la vista `resources\views\layouts\app.blade.php `

          **La vista ya incluye estructura HTML y diseño con Bootstrap*
      - Crea la vista `resources\views\home.blade.php`
          
          **En este proyecto ya existía una vista home.blade.php por lo que se evitó se creará la vista home.blade.php de auth*
      - Crea el controlador `app\Http\Controllers\HomeController.php`
          
          **Este controlador se eliminó porque no se usó*
      - En routes\web.php crea la rutas
          - `Auth::routes();` incluye varias rutas dedicasa a login
          - `Route::get('/home', 'HomeController@index')->name('home');`

              **Esta ruta fue eliminada porque también se eliminó el controlador y sobreescribía la ruta creada anteriormente en el proyecto*
<!-- end notes -->
===
<!-- information -->
#### Información
**Más información en `app\Http\Controllers\Auth\RegisterController.php`

**Más información en `app\Http\Controllers\Auth\LoginController.php`

**Más información en `resources\views\home.blade.php`

**Más información en `resources\views\partials\nav.blade.php`

**Más información en `app\Http\Middleware\RedirectIfAuthenticated.php`

**Más información en `routes\web.php`
<!-- end information -->