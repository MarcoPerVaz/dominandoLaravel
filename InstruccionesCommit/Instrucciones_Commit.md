
<!-- title -->
<h1 align="center">Curso - Dominando Laravel de Cero a Experto Laravel 5.7</h1>
<!-- end title -->

<!-- commit name -->
### Commit | __Cómo mostrar mensajes de sesión__
<!-- end commit name -->
===
<!-- official documentation -->
[Documentación | `Using The Session`](https://laravel.com/docs/5.7/session#using-the-session)

[Documentación | `Redirecting With Flashed Session Data`](https://laravel.com/docs/5.7/responses#redirecting-with-flashed-session-data)

<!-- end official documentation -->

<!-- commit instructions -->
1. Edición del controlador `app\Http\Controllers\ProjectController.php`
    - Edición de la función `store()`
2. Edición del controlador `app\Http\Controllers\ProjectController.php`
    - Edición de la función `store(SaveProjectRequest $request)`
    - Edición de la función `update(Project $project, SaveProjectRequest $request)`
    - Edición de la función `destroy(Project $project)`
3. Creación y edición de la vista `resources\views\partials\session-status.blade.php`
4. Edición de la vista `resources\views\projects\create.blade.php`
6. Edición de la vista `resources\views\projects\edit.blade.php`
7. Edición de la vista `resources\views\projects\index.blade.php`
8. Edición de la vista `resources\views\projects\show.blade.php`
9. Edición de la vista `resources\views\layout.blade.php`
<!-- end commit instructions -->
===
<!-- notes -->
#### Notas:
  - [Documentación oficial de `Laravel 5.7`](https://laravel.com/docs/5.7)
  - Las sesiones se almacenan en `storage\framework\sessions`
<!-- end notes -->
===
<!-- information -->
#### Información
**Más información en `app\Http\Controllers\ProjectController.php`

**Más información en `app\Http\Controllers\MessageController.php`

**Más información en `resources\views\partials\session-status.blade.php`

**Más información en `resources\views\projects\create.blade.php`

**Más información en `resources\views\projects\edit.blade.php`

**Más información en `resources\views\projects\index.blade.php`

**Más información en `resources\views\projects\show.blade.php`

**Más información en `resources\views\layout.blade.php`
<!-- end information -->