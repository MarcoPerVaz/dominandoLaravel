
@extends('layout')

@section('title', 'Portfolio')

@section('content')
  <h1>Portfolio</h1>

  @forelse ($projects as $project)
      <li>
        {{ $project->title }} 
        <br>
        <small>{{ $project->description }}</small>
        {{-- <br> --}}
        {{-- <small>{{ $project->created_at->diffForHumans() }}</small> --}}
      </li>
  @empty
      <li>No hay proyectos para mostrar</li>
  @endforelse

@endsection


{{-- Notas:
      | ------------------------------------
      | *{{ $project->created_at->format('Y') }} para que muestre solo el año
      | *{{ $project->created_at->format('M') }} para que muestre solo el mes
      | *{{ $project->created_at->diffForHumans() }} muestra la diferencia en tiempo
      |   *Ejemplo: Hace 2 segundos
      | *Si paginate() se deja vacío y hay menos de 15 registros en la tabla, en la vista no se muestran los botones de paginación
      | ------------------------------------  
--}}