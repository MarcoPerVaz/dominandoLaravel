
@extends('layout')

@section('title', 'Portafolio | ' . $project->title)

@section('content')

  <div class="container">
    <div class="bg-white p-5 shadow rounded">
      <h1>{{ $project->title }}</h1>
      <p class="text-secondary">{{ $project->description }}</p>
      <p class="text-black-50">{{ $project->created_at->diffForHumans() }}</p>

      <div class="d-flex justify-content-between align-items-center">
        {{-- back --}}
        <a href="{{ route('projects.index') }}">Regresar</a>
        {{-- end back --}}
      
        @auth
    
        <div class="btn-group btn-group-sm">
    
          {{-- edit --}}
            <a class="btn btn-primary" href="{{ route('projects.edit', $project) }}">Editar</a>
          {{-- end edit --}}
    
          {{-- delete --}}
            <a class="btn btn-danger" href="#" onclick="document.getElementById('delete-project').submit()">Eliminar</a>
          {{-- end delete --}}
          
        </div>
          {{-- form delete --}}
          <form class="d-none" id="delete-project" method="POST" action="{{ route('projects.destroy', $project) }}">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
          </form>
          {{-- end form delete --}}
      
        @endauth
      </div>
    </div>
  </div>

@endsection