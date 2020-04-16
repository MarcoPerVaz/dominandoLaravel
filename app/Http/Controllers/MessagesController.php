<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessagesController extends Controller
{
    public function store(/* Request $request */)
    {
        /* return $request; */
        /* return $request->get('email'); */

        return request('email'); /* Regresa una instancia de  use Illuminate\Http\Request; */
    }
}


/* Notas:
    | -------------------------------------------------------------------------------------------------------------
    | *Para obtener los valores mediante Request de los elementos HTML es necesario que cada elemento HTML tenga la 
    |  propiedad name definida
    | *Al usar return request('email'); se puede quitar el Request $request y el use Illuminate\Http\Request
    | -------------------------------------------------------------------------------------------------------------
    | *return $request; Obtiene todos los elementos HTML
    | *return $request->get('email'); Obtiene solo el elemento HTML que tenga email en su propiedad name
    | -------------------------------------------------------------------------------------------------------------
*/
