
@extends('layout')

@section('title', 'Contact')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-12 col-sm-10 col-lg-6 mx-auto">

        @include('partials.session-status')
    
        <form class="bg-white shadow rounded py-3 px-4" action="{{ route('contact') }}" method="POST">
    
          {{ csrf_field() }}

          {{-- title --}}
            <h1 class="display-4">{{ __("Contact") }}</h1>
          {{-- end title --}}
    
          {{-- name --}}
            <div class="form-group">
              <label for="name">Nombre</label>
                <input class="form-control bg-light shadow sm {{ $errors->first('name') ? 'is-invalid' : 'border-0' }} 
                    {{-- @error('name') is-invalid @enderror --}}" 
                    name="name" placeholder="Nombre..." id="name" value="{{ old('name') }}">
                    {{-- @error('name')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror --}} {{-- NO FUNCIONA EN LARAVEL 5.5 | ES A PARTIR DE LARAVEL 5.8 --}}
                {!! $errors->first('name', '<small style="color: red";>:message</small><br>') !!}
            </div>
          {{-- end name --}}
          
         {{-- email --}}
            <div class="form-group">
              <label for="email">Email</label>
                <input class="form-control bg-light shadow sm {{ $errors->first('email') ? 'is-invalid' : 'border-0' }} 
                    {{-- @error('email') is-invalid @enderror --}}" 
                    type="email" name="email" placeholder="Email..." id="name" value="{{ old('email') }}">
                    {{-- @error('email')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror --}} {{-- NO FUNCIONA EN LARAVEL 5.5 | ES A PARTIR DE LARAVEL 5.8 --}}
                {!! $errors->first('email', '<small style="color: red";>:message</small><br>') !!}
            </div>
          {{-- end email --}}
          
         {{-- subject --}}
            <div class="form-group">
              <label for="subject">Asunto</label>
                <input class="form-control bg-light shadow sm {{ $errors->first('subject') ? 'is-invalid' : 'border-0' }} 
                    {{-- @error('subject') is-invalid @enderror --}}" 
                    name="subject" placeholder="Asunto..." id="subject" value="{{ old('subject') }}">
                    {{-- @error('subject')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror --}} {{-- NO FUNCIONA EN LARAVEL 5.5 | ES A PARTIR DE LARAVEL 5.8 --}}
                {!! $errors->first('subject', '<small style="color: red";>:message</small><br>') !!}
            </div>
          {{-- end subject --}}
          
         {{-- content --}}
            <div class="form-group">
              <label for="content">Contenido</label>
                <textarea class="form-control bg-light shadow sm {{ $errors->first('content') ? 'is-invalid' : 'border-0' }} 
                    {{-- @error('content') is-invalid @enderror --}}" 
                    name="content" placeholder="Mensaje..." id="content">{{ old('content') }}</textarea>
                    {{-- @error('content')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror --}} {{-- NO FUNCIONA EN LARAVEL 5.5 | ES A PARTIR DE LARAVEL 5.8 --}}
                {!! $errors->first('content', '<small style="color: red";>:message</small><br>') !!}
            </div>
          {{-- end content --}}
    
          {{-- button send --}}
            <button class="btn btn-primary btn-lg btn-block">@lang('Send')</button>
          {{-- end button send --}}
        </form>
      </div>
    </div>
  </div>
@endsection

{{-- Notas:
  | -----------------------------------------------------------------------------------------------------------------
  | **@error('name') is-invalid @enderror no funciona en Laravel 5.5
  |     *Es a partir de Laravel 5.8
  | -----------------------------------------------------------------------------------------------------------------
--}}