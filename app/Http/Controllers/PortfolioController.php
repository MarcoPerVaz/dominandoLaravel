<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    /* 
        | --------------------------------------------------------------------------------------------------------
        | *Si el controlador solo tiene la función __invoke() significa que el controlador sólo tendrá una función
        | --------------------------------------------------------------------------------------------------------
    */
    public function __invoke(Request $request)
    {
        /*  */
        $portfolio = [
            ['title' => 'Proyecto #1'],
            ['title' => 'Proyecto #2'],
            ['title' => 'Proyecto #3'],
            ['title' => 'Proyecto #4'],
        ];
        return view('portfolio', compact('portfolio'));
        /*  */
    }
}

/* Notas:
    | ---------------------------------------------------------------------------------------------------------
    | *En versiones de Laravel anteriores a 5.6 no se podía usar
    |   *php artisan make:controller PortfolioController -i
    |       *Se tenía que crear la función __invoke() manualmente
    | *$portfolio es un array, que tiene a 'title' como array interno y 'title tiene 4 valores en sus posiciones
    | ---------------------------------------------------------------------------------------------------------
*/
