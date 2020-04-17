<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class MessageReceived extends Mailable
{
    use Queueable, SerializesModels;

    /* 
      | ---------------
      | *Para cambiar el asunto en el mail
      | ---------------
    */
    public $subject = 'Mensaje recibido';

    /* 
      | ---------------
      | *Permite acceder a los valores desde la vista resources\views\emails\message-received.blade.php
      | ---------------
    */
    public $msg;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($msg)
    {
        /*
          | -------------------------------------------------------------------------------------
          | *Pasa el contenido a la variable public $message para que esté disponible en la vista
          |     *resources\views\emails\message-received.blade.php
          | -------------------------------------------------------------------------------------
        */
        $this->msg = $msg;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        /*
          | -------------------------------------------------------------------------------------
          | *Retorna la vista que tendrá el HTML del email
          | -------------------------------------------------------------------------------------
        */
        return $this->view('emails.message-received');
    }
}
