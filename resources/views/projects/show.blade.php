
@extends('layout')

@section('title', 'Portafolio | ' . $project->title)

@section('content')

  {{-- title --}}
    <h1>{{ $project->title }}</h1>
  {{-- end title --}}

  @auth
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
    @endauth

  {{-- description --}}
    <p>{{ $project->description }}</p>
  {{-- end description --}}

  {{-- created_at --}}
    <p>{{ $project->created_at->diffForHumans() }}</p>
  {{-- end created_at --}}
@endsection
    

{{-- Notas:
      | --------------------------------------------------------------------------------------------------------------------
      | *La directiva @auth permite mostrar HTML sólo si el usuario está autenticado
      | *La directiva @guest permite mostrar HTML sólo si el usuario es invitado
      | --------------------------------------------------------------------------------------------------------------------  
--}}