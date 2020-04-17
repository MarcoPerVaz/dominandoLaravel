<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
/*  */
use Illuminate\Support\Facades\Mail;
use App\Mail\MessageReceived;
/*  */

class MessagesController extends Controller
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

        return "Mensaje enviado";
    }
}


/* Notas:
    | ----------------------------------------------------------------------------------------------------------------
    | *Al mandar email y teniendo MAIL_DRIVER=log en el archivo .env crea un archivo en storage\logs\laravel.log con los 
    |  datos del email(funciona)
    | *new MessageReceived($msg) es una nueva instancia de app\Mail\MessageReceived.php
    |   *Dónde $msg es la variable public declarada en app\Mail\MessageReceived.php
    | *La función queue() ayuda a hacer trabajos en 2do plano y evitar que el usuario tenga que esperar a que termine
    |  el proceso (si no existe queue por defecto usará send() en lugar de queue())
    | ----------------------------------------------------------------------------------------------------------------
*/
