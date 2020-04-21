
@extends('layout')

@section('title', 'Portafolio | ' . $project->title)

@section('content')

  {{-- title --}}
    <h1>{{ $project->title }}</h1>
  {{-- end title --}}

  {{-- btnEdit --}}
    <a href="{{ route('projects.edit', $project) }}">Editar</a>
  {{-- end btnEdit --}}

  {{-- delete --}}
    <form method="POST" action="{{ route('projects.destroy', $project) }}">
      @csrf
      @method('DELETE')
      <button>Eliminar</button>
    </form>
  {{-- end delete --}}

  {{-- description --}}
    <p>{{ $project->description }}</p>
  {{-- end description --}}

  {{-- created_at --}}
    <p>{{ $project->created_at->diffForHumans() }}</p>
  {{-- end created_at --}}
@endsection
    

{{-- Notas:
      | --------------------------------------------------------------------------------------------------------------------
      | *Para usar los métodos HTTP que no soportan los navegadores por defecto, pero Laravel los implementa
      |   *Laravel 5.5: {{ method_field('DELETE') }}
      |   *Laravel 5.6 o superior: @method('DELETE')
      |   *Lo que hace Laravel es crear un campo oculto
      |     *<input type="hidden" name="_method" value="DELETE">
      | *route('projects.destroy', $project)
      |   *$project Sirve para pasar la instancia del modelo Project
      | --------------------------------------------------------------------------------------------------------------------  
--}}