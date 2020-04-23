
@extends('layout')

@section('title', 'Home')

@section('content')
  
  <div class="container">
    <div class="row">
      {{-- home --}}
      <div class="col-12 col-lg-6">
          <h1 class="display-4 text-primary">Desarrollo web</h1>
          <p class="lead text-secondary">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Neque, nesciunt voluptatum architecto quas pariatur voluptas quia obcaecati harum distinctio et, nostrum dignissimos eius sunt rerum vitae deserunt, debitis eos sapiente.
          </p>
          <a class="btn btn-lg btn-block btn-primary" href="{{ route('contact') }}">Contáctame</a>
          <a class="btn btn-lg btn-block btn-outline-primary" href="{{ route('projects.index') }}">Portafolio</a>
      </div>
      {{-- end home --}}

      {{-- img --}}
        <div class="col-12 col-lg-6">
          <img class="img-fluid mb-4" src="/img/home.svg" alt="Desarrollo web">
        </div>
      {{-- end img --}}
    </div>
  </div>

@endsection