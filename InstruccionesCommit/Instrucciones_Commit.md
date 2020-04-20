
<!-- title -->
<h1 align="center">Curso - Dominando Laravel de Cero a Experto Laravel 5.7</h1>
<!-- end title -->

<!-- commit name -->
### Commit | __Eloquent: Actualizar registros__
<!-- end commit name -->
===
<!-- official documentation -->
[Documentación | `Updates`](https://laravel.com/docs/5.7/eloquent#updates)

[Documentación | `Form Method Spoofing`](https://laravel.com/docs/5.7/routing#form-method-spoofing)
<!-- end official documentation -->

<!-- commit instructions -->
1. Edición de la vista `resources\views\projects\show.blade.php`
2. Edición del archivo de rutas `routes\web.php`
3. Edición del controlador `app\Http\Controllers\ProjectController.php`

     **Se cambio `CreateFormRequest` por `SaveFormRequest`, **sólo hubo cambio de nombre***
    - Edición de la función `store(CreateProjectRequest $request)`
    - Creación y edición de la función `store(SaveProjectRequest $request)`
    - Creación y edición de la función `update(Project $project, SaveProjectRequest $request)`
4. Creación y edición de la vista `resources\views\projects\edit.blade.php`
5. Renombrar `app\Http\Requests\CreateProjectRequest.php` por `app\Http\Requests\SaveProjectRequest.php`
6. Edición del archivo form request `app\Http\Requests\SaveProjectRequest.php`
    - Renombrar `class CreateProjectRequest extends FormRequest` por `class SaveProjectRequest extends FormRequest`
7. Edición de la vista `resources\views\projects\create.blade.php`

<!-- end commit instructions -->
===
<!-- notes -->
#### Notas:
  - [Documentación oficial de `Laravel 5.7`](https://laravel.com/docs/5.7)
<!-- end notes -->
===
<!-- information -->
#### Información
**Más información en `resources\views\projects\show.blade.php`
*
**Más información en `routes\web.php`*

**Más información en `app\Http\Controllers\ProjectController.php`*

**Más información en `resources\views\projects\edit.blade.php`*
<!-- end information -->