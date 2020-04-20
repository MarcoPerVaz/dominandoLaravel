
<!-- title -->
<h1 align="center">Curso - Dominando Laravel de Cero a Experto Laravel 5.7</h1>
<!-- end title -->

<!-- commit name -->
### Commit | __Qué son y como utilizar Form Requests__
<!-- end commit name -->
===
<!-- official documentation -->
[Documentación | `Form Request Validation`](https://laravel.com/docs/5.7/validation#form-request-validation)

[Documentación | `Available Validation Rules`](https://laravel.com/docs/5.7/validation#available-validation-rules)
<!-- end official documentation -->

<!-- commit instructions -->
1. Edición de la vista `resources\views\projects\create.blade.php`
2. Creación y edición del formrequest `app\Http\Requests\CreateProjectRequest.php`
    > php artisan make:request CreateProjectRequest

    **Si el directorio `app\Http\Requests` no existe y se usa el comando, Laravel automáticamente creará el directorio*
    - Edición de la función `authorize()`
    - Edición de la función `rules()`
    - Creación y edición de la función `messages()`

      **Esta función es para personalizar los mensajes de validación*
3. Edición del controlador `app\Http\Controllers\ProjectController.php`
    - Edición de la función `store()`

      **No olvidar importar use `App\Http\Requests\CreateProjectRequest;`*

      **No olvidar inyectar el FormRequest en la función `store(CreateProjectRequest $request)`*
<!-- end commit instructions -->
===
<!-- notes -->
#### Notas:
  - [Documentación oficial de `Laravel 5.7`](https://laravel.com/docs/5.7)
  - Los `Form Requests` son clases dedicadas para encapsular la lógica de validación y autorización
      - No son necesarios en aplicaciones pequeñas (se puede validar directamente en el controlador)
<!-- end notes -->
===
<!-- information -->
#### Información
**Más información en `resources\views\projects\create.blade.php`*

**Más información en `app\Http\Requests\CreateProjectRequest.php`*

**Más información en `app\Http\Controllers\ProjectController.php`*
<!-- end information -->