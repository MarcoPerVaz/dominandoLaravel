
@extends('layout')

@section('title', 'Portafolio | ' . $project->title)

@section('content')

  {{-- title --}}
    <h1>{{ $project->title }}</h1>
  {{-- end title --}}

  {{-- btnEdit --}}
    <a href="{{ route('projects.edit', $project) }}">Editar</a>
  {{-- end btnEdit --}}

  {{-- @if (session('status'))
    {{ session('status') }}   
  @endif --}}

   {{-- @include('partials.session-status') --}}

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
      | *El bloque de código de if() fue pasado a la vista resources\views\partials\session-status.blade.php
      | *El @include('partials.session-status') fue pasado a la vista resources\views\layout.blade.php
      | *Se dejaron los código en esta vista como referencia
      | --------------------------------------------------------------------------------------------------------------------  
--}}