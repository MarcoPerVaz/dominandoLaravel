
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
        <input type="text" name="title" value="{{ old('title') }}">
      </label>
    {{-- end title --}}

    <br>

    {{-- description --}}
    <label>
      Descripción del proyecto
      <br>
      <textarea type="text" name="description">{{ old('description') }}</textarea>
    </label>
    {{-- end description --}}

    <br>

    {{-- url --}}
    <label>
      URL del proyecto
      <br>
      <input type="text" name="url" value="{{ old('url') }}">
    </label>
    {{-- end url --}}

    <br>

    <button>Guardar</button>
  </form>

@endsection


{{-- Notas:
      | ---------------------------------------------------------------
      | *La directiva @csrf es una protección contra ataques csrf (cross-site request forgery)
      |   *Documentación: https://laravel.com/docs/5.5/csrf#csrf-introduction
      |     *Para laravel 5.5 se usa {{ csrf_field() }}
      |   *Documentación: https://laravel.com/docs/5.7/csrf#csrf-introduction
      |     *Para laravel 5.6 en adelante se usa la directiva @csrf
      | *old('title') Sirve para que persistan los cambios en caso de actualizar el navegador
      | ---------------------------------------------------------------  
--}}