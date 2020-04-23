<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;
use App\Mail\MessageReceived;


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

        return back()->with('status', 'Recibimos tu mensaje, te responderemos en menos de 24 horas');
    }
}
