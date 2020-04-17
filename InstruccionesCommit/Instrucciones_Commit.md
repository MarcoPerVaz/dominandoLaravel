
<!-- title -->
<h1 align="center">Curso - Dominando Laravel de Cero a Experto Laravel 5.7</h1>
<!-- end title -->

<!-- commit name -->
### Commit | __Cómo traducir tus aplicaciones en Laravel__
<!-- end commit name -->
===
<!-- official documentation -->
[Documentación | `Specifying Custom Messages In Language Files`](https://laravel.com/docs/5.7/validation#localization)
<!-- end official documentation -->

<!-- commit instructions -->
1. Edición del archivo de configuración `config\app.php`
    **`'locale' => 'en',` por `'locale' => 'es',`*
2. Creación del directorio `resources\lang\es`

      **Para no tener que traducir validación por validación existe el repositorio [Laravel Lang](https://github.com/caouecs/Laravel-lang/tree/master/src) que ya tiene la traducción a muchos idiomas, aquí para [Español](https://github.com/caouecs/Laravel-lang/tree/master/src/es)*

      **Sólo debe copiar el contenido de los 4 archivos y crearlos en `resources\lang\es` tal
           cuál están en `resources\lang\en`*
      **Copiar el contenido de [es.json](https://github.com/caouecs/Laravel-lang/blob/master/json/es.json) y pegarlo en `resources\lang\es.json`*
3. Edición de la vista `resources\views\contact.blade.php`
4. Creación del archivo `resources\lang\es.json`

    **El nombre del archivo con formato json debe ser el mismo que el declarado en `config\app.php` (ver paso 1) 'locale' => 'es', o cualquier abreviación de el o los lenguajes que querramos usar ('en,json', 'es.json', 'ar.json', etc.)*
5. Edición de la vista `resources\views\partials\nav.blade.php`
6. Edición del controlador `app\Http\Controllers\MessagesController.php`
      - Edición de la función `store()`
7. Edición del archivo `app\Providers\AppServiceProvider.php`
8. Edición del archivo de rutas `routes\web.php`
<!-- end commit instructions -->
===
<!-- notes -->
#### Notas:
  - [Documentación oficial de `Laravel 5.7`](https://laravel.com/docs/5.7)
  - Laravel lang también incorpora otras traducciones para textos estáticos [Otras traducciones]("https://github.com/caouecs/Laravel-lang/tree/master/json)
  - Si desea el español [es.json](https://github.com/caouecs/Laravel-lang/blob/master/json/es.json)
      - Si desea puede copiar las traducciones y pegarlas en resources\lang\es.json
<!-- end notes -->
===
<!-- information -->
#### Información
**Más información en `resources\views\contact.blade.php`*

**Más información en `resources\views\partials\nav.blade.php`*

**Más información en `app\Http\Controllers\MessagesController.php`*

**Más información en `app\Providers\AppServiceProvider.php`*

**Más información en `routes\web.php`*
<!-- end information -->