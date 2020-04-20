
@extends('layout')

@section('title', 'Editar proyecto')

@section('content')

  <h1>Editar proyecto</h1>

{{-- errors --}}
    @if ($errors->any())
        <ul>
        @foreach ($errors->all() as $error) 
            <li>{{ $error }}</li>
        @endforeach
      </ul>
    @endif
  {{-- end errors --}}
  
  <form method="POST" action="{{ route('projects.update', $project) }}">

    {{-- directiva csrf --}}
      @csrf
    {{-- end directiva csrf --}}

    {{-- directiva method --}}
      @method('PATCH')
    {{-- end directiva method --}}

    {{-- title --}}
      <label>
        Título del proyecto
        <br>
        <input type="text" name="title" value="{{ old('title', $project->title) }}">
      </label>
    {{-- end title --}}

    <br>

    {{-- description --}}
      <label>
        Descripción del proyecto
        <br>
        <textarea type="text" name="description">{{ old('description', $project->description) }}</textarea>
      </label>
    {{-- end description --}}

    <br>

    {{-- url --}}
      <label>
        URL del proyecto
        <br>
        <input type="text" name="url" value="{{ old('url', $project->url) }}">
      </label>
    {{-- end url --}}

    <br>

    <button>Actualizar</button>
  </form>

@endsection


{{-- Notas:
      | --------------------------------------------------------------------------------------------------------------------------------
      | *route('projects.update', $project) se envía la instancia del modelo Project a la ruta projects.update
      | --------------------------------------------------------------------------------------------------------------------------------
      | *Para usar los métodos HTTP que no soportan los navegadores por defecto, pero Laravel los implementa
      |   *Laravel 5.5: {{ method_field('PATCH') }}
      |   *Laravel 5.6 o superior: @method('PATCH')
      |   *Lo que hace Laravel es crear un campo oculto
      |     *<input type="hidden" name="_method" value="PATCH">
      | --------------------------------------------------------------------------------------------------------------------------------
      | *old('title', $project->title) Sirve para que persistan los cambios al refrescar el navegador y si no hay cambios muestre lo que 
      |  está en la variable $project->title
      | --------------------------------------------------------------------------------------------------------------------------------
      | *La directiva @csrf es una protección contra ataques csrf (cross-site request forgery)
      |   *Documentación: https://laravel.com/docs/5.5/csrf#csrf-introduction
      |     *Para Laravel 5.5 se usa {{ csrf_field() }}
      |   *Documentación: https://laravel.com/docs/5.7/csrf#csrf-introduction
      |     *A partir de Laravel 5.6 se usa la directiva @csrf
      | --------------------------------------  ----------------------------------------------------------------------------------------
--}}