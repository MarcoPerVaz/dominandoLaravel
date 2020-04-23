
@extends('layout')

@section('title', 'Contact')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-12 col-sm-10 col-lg-6 mx-auto">
    
        <form class="bg-white shadow rounded py-3 px-4" action="{{ route('contact') }}" method="POST">
    
          {{ csrf_field() }}

          {{-- title --}}
            <h1 class="display-4">{{ __("Contact") }}</h1>
          {{-- end title --}}
    
          <hr>

          {{-- name --}}
            <div class="form-group">
              <label for="name">Nombre</label>
                <input class="form-control bg-light shadow sm {{ $errors->first('name') ? 'is-invalid' : 'border-0' }}" 
                    name="name" placeholder="Nombre..." id="name" value="{{ old('name') }}">
                {!! $errors->first('name', '<small style="color: red";>:message</small><br>') !!}
            </div>
          {{-- end name --}}
          
         {{-- email --}}
            <div class="form-group">
              <label for="email">Email</label>
                <input class="form-control bg-light shadow sm {{ $errors->first('email') ? 'is-invalid' : 'border-0' }}" 
                    type="email" name="email" placeholder="Email..." id="name" value="{{ old('email') }}">
                {!! $errors->first('email', '<small style="color: red";>:message</small><br>') !!}
            </div>
          {{-- end email --}}
          
         {{-- subject --}}
            <div class="form-group">
              <label for="subject">Asunto</label>
                <input class="form-control bg-light shadow sm {{ $errors->first('subject') ? 'is-invalid' : 'border-0' }}" 
                    name="subject" placeholder="Asunto..." id="subject" value="{{ old('subject') }}">
                {!! $errors->first('subject', '<small style="color: red";>:message</small><br>') !!}
            </div>
          {{-- end subject --}}
          
         {{-- content --}}
            <div class="form-group">
              <label for="content">Contenido</label>
                <textarea class="form-control bg-light shadow sm {{ $errors->first('content') ? 'is-invalid' : 'border-0' }}" 
                    name="content" placeholder="Mensaje..." id="content">{{ old('content') }}</textarea>
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