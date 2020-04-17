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
    | *Para traducir un texto estático también se puede desde el AppServiceProvider.php
    |   *__('Create'), en lugar de 'crear'
    | *Es recomendable que los textos a traducir estén todos en el mismo idioma (inglés en este caso)
    | *Las traducciones al español están en resources\lang\es.json
    | -----------------------
*/
