
<!-- title -->
<h1 align="center">Curso - Dominando Laravel de Cero a Experto Laravel 5.7</h1>
<!-- end title -->

<!-- commit name -->
### Commit | __Eloquent: Obtener registros de la base de datos__
<!-- end commit name -->
===
<!-- official documentation -->
[Documentación | `Database: Query Builder`](https://laravel.com/docs/5.7/queries)

[Documentación | `Database: Pagination`](https://laravel.com/docs/5.7/pagination)

[Documentación | `Eloquent: Getting Started`](https://laravel.com/docs/5.7/eloquent)
<!-- end official documentation -->

<!-- commit instructions -->
1. Insertar unos cuantos registros en la tabla projects de la base de datos con fechas descendentes en created_at
2. Edición del controlador `app\Http\Controllers\PortfolioController.php`
   - Edición de la función `index()` 

     **No olvidar importar `use Illuminate\Support\Facades\DB;` si se usa query builder*

     **No olvidar importar `use App\Project;` si se usa Eloquent y el modelo específico (Project en este caso)*
     
3. Edición de la vista `resources\views\portfolio.blade.php`
4. Creación y edición del modelo `app\Project.php`
    > php artisan make:model Project
<!-- end commit instructions -->
===
<!-- notes -->
#### Notas:
  - [Documentación oficial de `Laravel 5.7`](https://laravel.com/docs/5.7)
  - Para crear un modelo junto a su migración
     > php artisan make:model nombreModelo -m

    **Laravel crea la migración a partir del nombre del modelo*
  - Convenciones o estándares al crear Modelos en Laravel:
     - El nombre debe ser en singular y su primer letra sea en mayúscula o letra capital
     - Si lleva 2 o más palabras deberán separarse por mayúsculas mejor conocido como CamelCase y sin espacios

       **Ejemplo: `MyModel`*
  - Librería de PHP incluída en Laravel que permite formatear fechas [Documentación de `Carbon`](https://carbon.nesbot.com/)
<!-- end notes -->
===
<!-- information -->
#### Información
**Más información en `app\Http\Controllers\PortfolioController.php`*

**Más información en `resources\views\portfolio.blade.php`*

**Más información en `app\Project.php`*
<!-- end information -->