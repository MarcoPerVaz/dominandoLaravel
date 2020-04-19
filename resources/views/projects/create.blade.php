
@extends('layout')

@section('title', 'Crear proyecto')

@section('content')

  <h1>Crear nuevo proyecto</h1>
  
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
      | --------------------------------
      | *La directiva @csrf es una protección contra ataques csrf
      |   *Documentación: https://laravel.com/docs/5.5/csrf#csrf-introduction
      |   *Para laravel 5.5 se usa {{ csrf_field() }}
      |   *Para laravel 5.6 en adelante se usa la directiva @csrf o {{ csrf_field() }}
      | --------------------------------  
--}}