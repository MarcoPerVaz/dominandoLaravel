
@extends('layout')

@section('title', 'Crear proyecto')

@section('content')

  <h1>Crear nuevo proyecto</h1>
  
  {{-- errors --}}
    @if ($errors->any())
        <ul>
        @foreach ($errors->all() as $error) 
            <li>{{ $error }}</li>
        @endforeach
      </ul>
    @endif
  {{-- end errors --}}

  <form method="POST" action="{{ route('projects.store') }}">

    {{-- directiva csrf --}}
      @csrf
    {{-- end directiva csrf --}}

    {{-- title --}}
      <label>
        Título del proyecto
        <br>
        <input type="text" name="title">
      </label>
    {{-- end title --}}

    <br>

    {{-- description --}}
    <label>
      Descripción del proyecto
      <br>
      <textarea type="text" name="description"></textarea>
    </label>
    {{-- end description --}}

    <br>

    {{-- url --}}
    <label>
      URL del proyecto
      <br>
      <input type="text" name="url">
    </label>
    {{-- end url --}}

    <br>

    <button>Guardar</button>
  </form>

@endsection


{{-- Notas:
      | ---------------------------------------------------------------
      | *$errors->any() Verifica si hay errores
      | *$errors->all() dentro de un foreache recorre todos los errores
      | *$error Muestra el error en la vista
      | ---------------------------------------------------------------  
--}}