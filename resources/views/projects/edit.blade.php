
@extends('layout')

@section('title', 'Editar proyecto')

@section('content')

  <div class="container">
    <div class="row">
      <div class="col-12 col-sm-10 col-lg-6 mx-auto">
        
        @include('partials.validation-errors')
        
        <form class="bg-white py-3 px-4 shadow rounded" method="POST" action="{{ route('projects.update', $project) }}">
      
          {{-- directiva @method --}}
            @method('PATCH')
          {{-- enddirectiva@method --}}

          <h1 class="dipslay-4">Editar proyecto</h1>

          <hr>
      
          @include('projects._form', ['btnText' => 'Actualizar'])
        </form>

      </div>
    </div>
  </div>
  
@endsection