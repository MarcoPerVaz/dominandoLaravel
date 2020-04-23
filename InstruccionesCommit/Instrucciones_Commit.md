
<!-- title -->
<h1 align="center">Curso - Dominando Laravel de Cero a Experto Laravel 5.7</h1>
<!-- end title -->

<!-- commit name -->
### Commit | __Diseño con Bootstrap - parte 1__
<!-- end commit name -->
===
<!-- official documentation -->
[Documentación | `Writing CSS`](https://laravel.com/docs/5.7/frontend#writing-css)
<!-- end official documentation -->

<!-- commit instructions -->
1. Desinstalación de Bootstrap
    - `Bootstrap 4.0.0` para Laravel 5.7
        > yarn remove bootstrap
    - `Bootstrap 3.3.7` para Laravel 5.5
        > yarn remove bootstrap-sass
2. Instalación de `Bootstrap 4.3.1`
    > yarn add bootstrap@4.3.1 --dev

    - Para Laravel 5.5 es necesario 
        - Instalar  popper.js
            > yarn add popper.js --dev
        - Desinstalar JQuery 3.2
            > npm remove jquery
        - Instalar JQuery 3.4
            > yarn add jquery@3.4 --dev
  3. Edición del archivo `resources\js\bootstrap.js` para Laravel 5.7
      - Para Laravel 5.5 `resources\assets\js\bootstrap.js`
  4. Edición de la vista `resources\views\partials\nav.blade.php`
  5. Edición de la vista `resources\views\auth\login.blade.php`
  6. Edición de la vista `resources\views\auth\register.blade.php`
  7. Edición de la vista `resources\views\auth\passwords\email.blade.php`
  8. Edición de la vista `resources\views\auth\passwords\reset.blade.php`
  9. Edición de la vista `resources\views\layout.blade.php`
  10. Edición del archivo `resources\sass\_variables.scss`
      - En Laravel 5.5 - Edición del archivo `resources\assets\sass\_variables.scss`
  11. Edición del archivo `resources\sass\app.scss`
      - En Laravel 5.5 - Edición del archivo `resources\assets\sass\app.scss`
  12. Edición de la vista `resources\views\contact.blade.php`
<!-- end commit instructions -->
===
<!-- notes -->
#### Notas:
  - [Documentación oficial de `Laravel 5.7`](https://laravel.com/docs/5.7)
  - Ayuda para instalar Bootstrap 4 o superior en Laravel 5.5 [Link de ayuda](https://blog.javymarmol.com/instalar-booststrap-4-en-laravel-5-5/)
<!-- end notes -->
===
<!-- information -->
#### Información
**Más información en `resources\js\bootstrap.js`

**Más información en `resources\views\layout.blade.php`

**Más información en `resources\sass\_variables.scs`

**Más información en `resources\assets\sass\app.scss`

**Más información en `resources\views\contact.blade.php`
<!-- end information -->