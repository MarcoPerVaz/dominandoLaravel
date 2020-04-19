
@extends('layout')

@section('title', 'Portafolio | ' . $project->title)

@section('content')
  <h1>{{ $project->title }}</h1>
  <p>{{ $project->description }}</p>
  <p>{{ $project->created_at->diffForHumans() }}</p>
@endsection
    

{{-- Notas:
      | ------------------------------------
      | *{{ $project }} imprime todos los campos en formato json
      | *{{ $project->nombreCampo }} colocando el nombre del campo se puede acceder a su información
      |   *Ejemplo: {{ $project->title }} {{ $project->description }} {{ $project->created_at }}
      | *{{ $project->created_at->diffForHumans() }} mostrar la fecha en formato para humanos
      |   *Ejemplo: hace 2 semanas
      | ------------------------------------  
--}}