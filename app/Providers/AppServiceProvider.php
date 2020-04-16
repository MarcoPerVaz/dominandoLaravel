<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
/*  */
use Illuminate\Support\Facades\Route;
/*  */

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        /*  */
        Route::resourceVerbs([
            'create' => 'crear',
            'edit' => 'editar',
        ]);
        /*  */
    }
}

/* Notas:
    | -----------------------
    | *Para verificar que se cambiaron el nombre a las rutas
    |   *Se debe editar el archivo routes\web.php
     |       *Descomentar: Route::resource('/portfolio', 'PortfolioController');
     |       *Comentar:    Route::get('/portfolio', 'PortfolioController@index')->name('portfolio');
    | -----------------------
*/
