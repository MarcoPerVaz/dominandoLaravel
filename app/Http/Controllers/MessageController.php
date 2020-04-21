<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
/*  */
use Illuminate\Support\Facades\Mail;
use App\Mail\MessageReceived;
/*  */

class MessageController extends Controller
{
    public function store(/* Request $request */)
    {
        $msg = request()->validate([
                    'name'      => 'required',
                    'email'     => 'required|email',
                    'subject'   => 'required', 
                    'content'   => 'required|min:3', 
                ], [
                    'name.required' => __('I need your name'),
                ]); 

        /* 
            | -------------
            | *Enviar email
            | -------------
        */
        Mail::to('marcooperdomo@gmail.com')->queue(new MessageReceived($msg));

        /* 
            | ------------------------------------------------------------------------------------
            | *Para mostrar la información sin tener que abrir el archivo storage\logs\laravel.log
            | ------------------------------------------------------------------------------------
        */
        // return new MessageReceived($msg);

        // return "Mensaje enviado";

        return back()->with('status', 'Recibimos tu mensaje, te responderemos en menos de 24 horas');
    }
}


/* Notas:
    | ----------------------------------------------------------------------------------------------------------------
    | *return back()->with('status', 'Recibimos tu mensaje, te responderemos en menos de 24 horas');
    |   *La variable de sesión 'status' se envía a la vista parcial resources\views\partials\session-status.blade.php para avisarle al usuario
    |    que su email fue enviado con éxito
    | ----------------------------------------------------------------------------------------------------------------
*/
