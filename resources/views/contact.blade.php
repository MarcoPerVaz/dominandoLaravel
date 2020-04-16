
@extends('layout')

@section('title', 'Contact')

@section('content')
  <h1>Contact</h1>

  {{-- {{ $errors }} --}}
  {{-- {{ var_dump($errors->any()) }} --}}
  {{-- {{ var_dump($errors->all()) }} --}}

  {{-- @if ($errors->any())
     <ul>
       @foreach ($errors->all() as $error)
           <li>{{ $error }}</li>
       @endforeach
     </ul>
  @endif --}}

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
    <button>Enviar</button>
    {{-- end button --}}
  </form>
@endsection

{{-- Notas:
  | -----------------------------------------------------------------------------------------------------------------
  | *{{ $errors }}: Muestra un array de errores
  | *{{ var_dump($errors->any()): Regresa true o false si hay o no errores
  | *{{ var_dump($errors->all()) }}: Regresa todos los errores de todos los campos
  | *value="{{ old('name') }}" sirve para guardar el valor al fallar la validación
  |   *'name' es el valor de la propiedad name del elemento HTML
  |     *name="name"
  | -----------------------------------------------------------------------------------------------------------------
--}}