<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessagesController extends Controller
{
    public function store(/* Request $request */)
    {
        request()->validate([
            'name'      => 'required',
            'email'     => 'required|email',
            'subject'   => 'required', 
            'content'   => 'required|min:3', 
        ]); 

        return "Datos validados";
    }
}


/* Notas:
    | -------------------------------------------------------------------------------------------------------------
    | *request()->validate([]): Crear un array de campos a validar sobre los datos que vienen de la vista 
    | -------------------------------------------------------------------------------------------------------------
    | *'name' => 'required': 
    |   *name es el valor de la propiedad name del elemento html (name="name")
    |   *required es la validación, name es un campo obligatorio
    | -------------------------------------------------------------------------------------------------------------
    | *'email' => 'required|email'
    |   *email es el valor de la propiedad name del elemento html (name="email")
    |   *required es la validación, email es un campo obligatorio
    |   *email el campo debe ser del tipo email
    | -------------------------------------------------------------------------------------------------------------
    | *'content' => 'required|min:3'
    |   *content es el valor de la propiedad name del elemento html (name="content")
    |   *required es la validación, content es un campo obligatorio
    |   *min:3 el campo debe tener al menos 3 caracteres
    | -------------------------------------------------------------------------------------------------------------
*/
