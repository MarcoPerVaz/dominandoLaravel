
@extends('layout')

@section('title', 'About')

@section('content')
  <div class="container">
    <div class="row">
      {{-- img --}}
        <div class="col-12 col-lg-6">
          <img class="img-fluid mb-4" src="/img/about.svg" alt="¿Quién soy?">
        </div>
      {{-- end img --}}

      {{-- home --}}
        <div class="col-12 col-lg-6">
            <h1 class="display-4 text-primary">¿Quién soy?</h1>
            <p class="lead text-secondary">
              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Neque, nesciunt voluptatum architecto quas pariatur voluptas quia obcaecati harum distinctio et, nostrum dignissimos eius sunt rerum vitae deserunt, debitis eos sapiente.
            </p>
            <a class="btn btn-lg btn-block btn-primary" href="{{ route('contact') }}">Contáctame</a>
            <a class="btn btn-lg btn-block btn-outline-primary" href="{{ route('projects.index') }}">Portafolio</a>
        </div>
      {{-- end home --}}

    </div>
  </div>
@endsection