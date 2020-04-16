
<!-- title -->
<h1 align="center">Curso - Dominando Laravel de Cero a Experto Laravel 5.7</h1>
<!-- end title -->

<!-- commit name -->
### Commit | __Activación de links de navegación__
<!-- end commit name -->
===
<!-- official documentation -->

<!-- end official documentation -->

<!-- commit instructions -->
1. Edición de la vista `resources\views\layout.blade.php`
2. Creación y edición del archivo helper `app\helpers.php`

    **Archivo o helper que sirve para activar los links de navegación*
    - Edición del archivo `composer.json`
        - Agregar: `"files": ["app/helpers.php"]` en `autoload`, después de `"classmap":[]`

        **Para que laravel vuelva a cargar las clases y esta vez con el helper `helpers.php`, desde la consola y dentro de la ruta del proyecto*
        > composer dumpautoload
3. Creación del directorio `resources\views\partials`
    - Creación y edición de la vista `resources\views\partials\nav.blade.php`
<!-- end commit instructions -->
===
<!-- notes -->
#### Notas:
  - [Documentación oficial de `Laravel 5.7`](https://laravel.com/docs/5.7)
<!-- end notes -->
===
<!-- information -->
#### Información
**Más información en `resources\views\layout.blade.php`*

**Más información en `app\helpers.php`*

**Más información en `resources\views\partials\nav.blade.php`*
<!-- end information -->