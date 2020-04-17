
@extends('layout')

@section('title', 'Contact')

@section('content')
  <h1>{{ __("Contact") }}</h1>

  <form action="{{ route('contact') }}" method="POST">

    @csrf

    {{-- name --}}
    <input name="name" placeholder="Nombre..." value="{{ old('name') }}">
    <br>
    {!! $errors->first('name', '<small>:message</small><br>') !!}
    {{-- end name --}}

    {{-- email --}}
    <input type="email" name="email" placeholder="Email..." value="{{ old('email') }}">
    <br>
    {!! $errors->first('email', '<small>:message</small><br>') !!}
    {{-- end email --}}

    {{-- subject --}}
    <input name="subject" placeholder="Asunto..." value="{{ old('subject') }}">
    <br>
    {!! $errors->first('subject', '<small>:message</small><br>') !!}
    {{-- end subject --}}

    {{-- content --}}
    <textarea name="content" placeholder="Mensaje...">{{ old('content') }}</textarea>
    <br>
    {!! $errors->first('content', '<small>:message</small><br>') !!}
    {{-- end content --}}

    {{-- button --}}
    <button>@lang('Send')</button>
    {{-- end button --}}
  </form>
@endsection

{{-- Notas:
  | -----------------------------------------------------------------------------------------------------------------
  | *Para traducir textos estáticos en la aplicación laravel implementa lo siguiente
  |   *Usar esta sintaxis {{ __("Contact") }} en cualquier texto que se desee traducir
  |     *Dónde "Contact" será el nombre de la variable json que queremos traducir
  |       *Las variables de traducción están en resources\lang\es.php
  |   *Tambien se puede usar la directiva @lang('Home') en lugar de {{ __("Home") }}
  | *Es recomendable que los textos a traducir estén todos en el mismo idioma (inglés en este caso)
  | *Las traducciones al español están en resources\lang\es.json
  | -----------------------------------------------------------------------------------------------------------------
--}}