
<!-- title -->
<h1 align="center">Curso - Dominando Laravel de Cero a Experto Laravel 5.7</h1>
<!-- end title -->

<!-- commit name -->
### Commit | __Controladores__
<!-- end commit name -->
===
<!-- official documentation -->
[Documentación | `Controllers`](https://laravel.com/docs/5.7/controllers)

[Documentación | `Single Action Controllers`](https://laravel.com/docs/5.7/controllers#single-action-controllers)
<!-- end official documentation -->

<!-- commit instructions -->
1. Creación y edición del controlador `app\Http\Controllers\PortfolioController.php`
    > php artisan make:controller PortfolioController -i
2. Edición de la vista `resources\views\portfolio.blade.php`
3. Edición del archivo de rutas `routes\web.php`
<!-- end commit instructions -->
===
<!-- notes -->
#### Notas:
  - [Documentación oficial de `Laravel 5.7`](https://laravel.com/docs/5.7)
  - `php artisan make:controller nombreController` crea un controlador básico
  - `php artisan make:controller nombreController -i` crea un controlador con la función `__invoke(Request $request)`
      - Si tiene la función __invoke() significa que ese controlador solo tendrá esa función 
  - **Para ver las rutas existentes del proyecto, desde la consola se usa el comando*
      > php artisan route:list

      > php artisan r:l
<!-- end notes -->
===
<!-- information -->
#### Información
**Más información en `app\Http\Controllers\PortfolioController.php`*

**Más información en `routes\web.php`*
<!-- end information -->