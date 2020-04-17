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
        ], [
            'name.required' => __('I need your name'),
        ]); 

        return "Datos validados";
    }
}


/* Notas:
    | ----------------------------------------------------------------------------------------------------------------
    | *Para modificar una traducción solo para un formulario en específico(se hace desde el controlador)
    |   *El mensaje de traducción se pasa como segundo parámetro en el método validate([], [aqui])
    |   *'name.required' => __('I need your name'),: Es el mensaje personalizado para la validación
    |   *'name' es el elemento HTML que se quiere validar
    |   *'required' es la llave del archivo resources\lang\es\validation.php que queremos modificar el mensaje
    |   * __('I need your name') es la variable de traducción que está en resources\lang\es.json
    |       *Si no existe se puede crear
    | ----------------------------------------------------------------------------------------------------------------
    | *Para traducir textos estáticos también se puede desde el controlador
    | *Es recomendable que los textos a traducir estén todos en el mismo idioma (inglés en este caso)
    | *Las traducciones al español están en resources\lang\es.json
    | ----------------------------------------------------------------------------------------------------------------
*/
