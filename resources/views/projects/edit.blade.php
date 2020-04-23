
@extends('layout')

@section('title', 'Editar proyecto')

@section('content')

  <div class="container">
    <div class="row">
      <div class="col-12 col-sm-10 col-lg-6 mx-auto">
        
        @include('partials.validation-errors')
        
        <form class="bg-white py-3 px-4 shadow rounded" method="POST" action="{{ route('projects.update', $project) }}">
      
          {{-- directiva @method --}}
            {{ method_field('PATCH') }}
          {{-- enddirectiva@method --}}

          <h1 class="dipslay-4">Editar proyecto</h1>

          <hr>
      
          @include('projects._form', ['btnText' => 'Actualizar'])
        </form>

      </div>
    </div>
  </div>
  
@endsection


{{-- Notas:
      | ------------------------------------------------------------------------------------------------------
      | *El bloque de código de if() fue pasado a la vista resources\views\partials\session-status.blade.php
      | *El @include('partials.session-status') fue pasado a la vista resources\views\layout.blade.php
      | *Se dejaron los código en esta vista como referencia
      | ------------------------------------------------------------------------------------------------------
--}}