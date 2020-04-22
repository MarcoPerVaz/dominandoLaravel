const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 | --------------------------------------------------------------------------------
 | *Laravel Mix soporta SASS, LESS, STYLUS, entre otros
 |    *Más información en https://laravel.com/docs/5.7/mix#working-with-stylesheets
 */

mix.js('resources/js/app.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css');
   // .less('resources/assets/less/app.less', 'public/css');
   // .stylus('resources/assets/less/app.stylus', 'public/css');

/* 
   | ------------------------------------------------------------------------------------------------------------
   | *Browser sync te permite tener sincronizados los cambios sin tener que recargar la página (f5) del navegador
   | ------------------------------------------------------------------------------------------------------------
*/
mix.browserSync('http://dominandolaravel57.it/');


/* 
   | -------------------------------
   | *Comprueba si la aplicación está en entorno de producción y si es así entonces le agrega una versión al archivo y así el navegador tendrá
   |  que cargarlo nuevamente y evitar tener que recargar cachés (ctrl + r), también conocido como hard reload
   | -------------------------------
*/
if (mix.inProduction()) {
   mix.version();
}


/* Notas:
   | ----------------------------------------------------------------
   | *mix.js('resources/js/app.js', 'public/js')
   |  *Lo que está en resources/js/app.js se compila en public/js
   | *mix.js('resources/sass/app.scss', 'public/css')
   |  *Lo que está en resources/sass/app.scss se compila en public/css
   | *Si este archivo ya está correctamente
   |     *Instalar las dependencias de Frontend
   |        *npm install
   |        *yarn 
   | *Compilar los archivos
   |     *npm run dev
   |     *npm run watch
   |     *yarn dev
   |     *yarn watch
   | *Para usar Browser Sync
   |     *npm run watch
   |     *yarn watch
   | *mix.browserSync('http://dominandolaravel57.it/'); Al usar yarn watch o npm run watch se instala Browser Sync en package.json
   | ----------------------------------------------------------------
*/
