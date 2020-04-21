
@extends('layout')

@section('title', 'Crear proyecto')

@section('content')

  <h1>Crear nuevo proyecto</h1>

  {{-- @if (session('status'))
    {{ session('status') }}   
  @endif --}}

   {{-- @include('partials.session-status') --}}

   @include('partials.validation-errors')


  <form method="POST" action="{{ route('projects.store') }}">

    @include('projects._form', ['btnText' => 'Guardar'])

  </form>


@endsection


{{-- Notas:
      | ----------------------------------------------------------------------------------------------------
      | *El bloque de código de if() fue pasado a la vista resources\views\partials\session-status.blade.php
      | *El @include('partials.session-status') fue pasado a la vista resources\views\layout.blade.php
      | *Se dejaron los código en esta vista como referencia
      | ----------------------------------------------------------------------------------------------------  
--}}