
<!-- title -->
<h1 align="center">Curso - Dominando Laravel de Cero a Experto Laravel 5.7</h1>
<!-- end title -->

<!-- commit name -->
### Commit | __Introducción a Laravel Mix__
<!-- end commit name -->
===
<!-- official documentation -->
[Documentación | `Compiling Assets (Laravel Mix)`](https://laravel.com/docs/5.7/mix#introduction)

[Documentación | `Browsersync Reloading`](https://laravel.com/docs/5.7/mix#browsersync-reloading)
<!-- end official documentation -->

<!-- commit instructions -->
1. Edición de la vista `resources\views\layout.blade.php`
2. Edición del archivo `resources\sass\app.scss`
    -En Laravel 5.5 - Edición del archivo `resources\assets\sass\app.scss`
3. Edición del archivo `resources\js\app.js `
    - En Laravel 5.5 - Edición del archivo `resources\assets\js\app.js`

   **Solo para pruebas*
4. Edición del archivo `webpack.mix.js`
5. Instalar dependencias de Frontend
    > npm install

    > yarn
6. Compilar archivos
    > npm run dev

    > yarn dev
7. (Nota) El primer `yarn dev` mostró error, pero el segundo `yarn dev` ya estuvo todo bien
<!-- end commit instructions -->
===
<!-- notes -->
#### Notas:
  - [Documentación oficial de `Laravel 5.7`](https://laravel.com/docs/5.7)
  - Laravel incluye Bootstrap pero la versión de este varía dependiendo la versión de Laravel
      - Laravel 5.7 por defecto inlcuye Bootstrap 4.0.0
      - Laravel 5.5 por defecto incluye la librería Bootstrap 3.3.7
  - No se deben colocar estilos en `public\css\app.css`
  - No se debe colocar código javascript en `public\js\app.js`
  - Para agregar o modificar los estilos se deben agregar en:
      - Si son js en `public\js\app.js`
      - Si son css en Si son css en resources\assets\sass
  - Laravel por defecto incluye sass que es un compilador de estilos que permite usar variables pero se pueden usar otros
  - El archivo de entrada de los estilos es `resources\assets\sass\app.scss`
  - Para que los archivos incluídos en `resources\js` y `resources\sass` sean tomados en cuenta por el sitio deben estar en `public` y para compilar se usa `Laravel Mix`
  - Laravel Mix proporciona una API fluída para definir los pasos de compilación de Webpack de nuestra aplicación de Laravel utilizando varios preprocesadores de CSS y Javascript
  - Para configurar Laravel Mix tenemos el archivo `webpack.mix.js` 
      - Para usar Laravel Mix se debe tener Node Js instalado en el computador 
        - Por si no se tiene instalado [Sitio Oficial de Node](https://nodejs.org/es/) 
      - Otro instalador de paquetes como NPM es `Yarn`
          - [Sitio Oficial de Yarn](https://yarnpkg.com/) por si no se tiene instalado(es opcional)
              > npm install --global yarn
  - Las dependencias que se instalan usando npm o yarn están definidas en el archivo `package.json`
  - Para instalar las dependencias usando NPM
      > npm install
  - Para instalar las dependencias usando YARN
      > yarn

      **Al terminar de instalar todas las dependencias aparecerá una nueva carpeta llamada `node_modules`*
  - Para compilar los archivos usando NPM
      > npm run dev
  - Para compilar los archivos usando YARN
      > yarn dev
  - Si por alguna razón el navegador no reconoce los cambios hay que recargar la caché con `ctrl + r`
  - Para compilar los archivos en cada cambio que se haga
      - Para NPM
          > npm run watch
      - Para YARN
          > yarn watch
  - Para salir de `npm run watch` o `yarn watch`
      > ctrl + c
  - Para minificar los archivos compilados
      - Para NPM
          > npm run prod
      - Para YARN
          > yarn prod
<!-- end notes -->
===
<!-- information -->
#### Información
**Más información en `resources\views\layout.blade.php`

**Más información en `resources\sass\app.scss`

**Más información en `webpack.mix.js`
<!-- end information -->