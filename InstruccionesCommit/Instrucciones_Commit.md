
<!-- title -->
<h1 align="center">Curso - Dominando Laravel de Cero a Experto Laravel 5.7</h1>
<!-- end title -->

<!-- commit name -->
### Commit | __Controladores Resource y API__
<!-- end commit name -->
===
<!-- official documentation -->
[Documentación | `Resource Controllers`](https://laravel.com/docs/5.5/controllers#resource-controllers)
[Documentación | `API Resource Routes`](https://laravel.com/docs/5.7/controllers#restful-partial-resource-routes)
<!-- end official documentation -->

<!-- commit instructions -->
1. Eliminación del controlador `app\Http\Controllers\PortfolioController.php`
2. Edición del archivo de rutas `routes\web.php`
3. Creación y edición del controlador `app\Http\Controllers\PortfolioController.php`
    > php artisan make:controller PortfolioController --resource

    > php artisan make:controller PortfolioController -r

    **Cualquiera de estos 2 comandos crean el controlador con los 7 métodos REST (index, create, store, show, edit, update y destroy)*
4. (opcional)Si desea cambiar el nombre a las rutas

    **Ejemplo: create por crear*

    - Edición del archivo `app\Providers\AppServiceProvider.php`
        - Edición de la función `boot()`

          **No olvidar importar use `Illuminate\Support\Facades\Route;`*
<!-- end commit instructions -->
===
<!-- notes -->
#### Notas:
  - [Documentación oficial de `Laravel 5.7`](https://laravel.com/docs/5.7)
  - **Para ver las rutas existentes del proyecto, desde la consola se usa el comando*
      > php artisan route:list

      > php artisan r:l
  - Crear un controlador API
      > php artisan make:controller API/nombreController --api
      - Para declarar la ruta API en `routes\web.php`
        > Route::apiResource('portfolio', 'PortfolioController');

      **Éste comando fue introducido a partir de Laravel 5.6*

      **Éste comando no genera el método create ni el método edit*
<!-- end notes -->
===
<!-- information -->
#### Información
**Más información en `app\Http\Controllers\PortfolioController.php`*

**Más información en `routes\web.php`*

**Más información en `app\Providers\AppServiceProvider.php`*

**Más información en `app\Http\Controllers\PortfolioController.php`*
<!-- end information -->