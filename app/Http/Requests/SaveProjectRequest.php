<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveProjectRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        /* 
            | -----------------------------------------------------------------------
            | *return false devuelve un error HTTP Response 403 Forbidden (prohibido)
            | *return true Verifica si la validación es correcta
            | -----------------------------------------------------------------------
        */
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        /* 
            | -------------------------------------
            | *Reglas de validación
            |   *'required' el campo es obligatorio
            | -------------------------------------
        */
        return [
            'title'         => 'required',
            'url'           => 'required',
            'description'   => 'required',
        ];
    }

    /* 
        | ------------------------------------------------------------------------
        | *Para personalizar los mensajes de validación sólo para este FormRequest
        | ------------------------------------------------------------------------
    */
    public function messages()
    {
        return [
            'title.required' => 'El proyecto necesita un título'
        ];
    }
}


/* Notas:
    | ----------------------------------------------------------------------------------------------
    | *Todos los Form Request cuentan con 2 funciones por defecto (authorize y rules)
    | ----------------------------------------------------------------------------------------------
    | *Función authorize()
    |   *Se ejecuta al principio para determinar si el usuario que realiza la petición puede hacerlo
    |   *Si devuelve true el usuario pasará a comporbar las reglas de validación rules()
    |   *Si devuelve false retorna un error HTTP Response 403 Forbidden (prohibido)
    | ----------------------------------------------------------------------------------------------
    | *Función rules()
    |   *Se agregan las reglas de validación de los elementos HTML
    | *Checar las reglas de validación existentes: https://laravel.com/docs/5.7/validation#available-validation-rules
    | ----------------------------------------------------------------------------------------------
    | *Función messages()
    |   *Para personalizar los mensajes de validación y puede incluir traducciones
    |       *Sin traducción: 'title.required' => 'El proyecto necesita un título'
    |       *Con traducción: 'title.required' => __('El proyecto necesita un título')
    | ----------------------------------------------------------------------------------------------
*/
