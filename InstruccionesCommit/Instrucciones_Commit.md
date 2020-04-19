
<!-- title -->
<h1 align="center">Curso - Dominando Laravel de Cero a Experto Laravel 5.7</h1>
<!-- end title -->

<!-- commit name -->
### Commit | __Eloquent: Obtener registros individuales__
<!-- end commit name -->
===
<!-- official documentation -->
[Documentación | `Database: Query Builder`](https://laravel.com/docs/5.7/queries)

[Documentación | `Eloquent: Getting Started`](https://laravel.com/docs/5.7/eloquent)
<!-- end official documentation -->

<!-- commit instructions -->
1. Edición del archivo de rutas `routes\web.php`
2. Creación del directorio `resources\views\projects`
   - Creación y edición de la vista `resources\views\projects\index.blade.php`
       - Se corta todo el contenido de la vista `resources\views\portfolio.blade.php` y se pega en `resources\views\projects\index.blade.php`
   - Creación y edición de la vista `resources\views\projects\show.blade.php`
3. Eliminación de la vista `resources\views\portfolio.blade.php`
4. Creación del directorio `resources\views\errors`
   - Creación y edición de la vista `resources\views\errors\404.blade.php`
5. Renombrar el controlador `app\Http\Controllers\PortfolioController.php` por `app\Http\Controllers\ProjectController.php`
    - Cambiar el nombre de la clase `class PortfolioController extends Controller` por `class ProjectController extends Controller`

    **La convención en el nombre de los controladores es que lleve el nombre del modelo seguido por la palabra Controller ejemplo: `ProjectController`*
6. Edición del controlador `app\Http\Controllers\ProjectController.php`
    - Edición de la función `index()`
    - Creación y edición de la función `show($id)`
7. Renombrar el controlador `app\Http\Controllers\MessagesController.php` por `app\Http\Controllers\MessageController.php`
    - Cambiar el nombre de la clase `class MessagesController extends Controller` por `class MessageController extends Controller`

    **La convención en el nombre de los controladores es que lleve el nombre del modelo seguido por la palabra Controller ejemplo: `MessageController`*
8. Edición de la vista `resources\views\partials\nav.blade.php`
9. Edición del archivo de idioma `resources\lang\es.json`
<!-- end commit instructions -->
===
<!-- notes -->
#### Notas:
  - [Documentación oficial de `Laravel 5.7`](https://laravel.com/docs/5.7)
  - El directorio `resources\views\errors` va a contener todas las vistas para los errores regresados por Laravel o por el navegador

     **Ejemplo: Sorry, the page you are looking for could not be found. que es un error 404 not found*

     **El mensaje anterior es sustítuido por la vista `resources\views\errors\404.blade.php`*
  - La convención en el nombre de los controladores es que lleve el nombre del modelo seguido por la palabra Controller ejemplo: `ProjectController`
<!-- end notes -->
===
<!-- information -->
#### Información
**Más información en `app\Http\Controllers\ProjectController.php`*

**Más información en `resources\views\projects\index.blade.php`*

**Más información en `resources\views\projects\show.blade.php`*
<!-- end information -->