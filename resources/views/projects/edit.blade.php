
@extends('layout')

@section('title', 'Editar proyecto')

@section('content')

  <h1>Editar proyecto</h1>

  @include('partials.validation-errors')

  
  <form method="POST" action="{{ route('projects.update', $project) }}">

    {{-- directiva method --}}
      @method('PATCH')
    {{-- end directiva method --}}

    @include('projects._form', ['btnText' => 'Actualizar'])

  </form>
  
@endsection


{{-- Notas:
      | ------------------------------------------------------------------------------------------------------
      | *route('projects.update', $project) se envía la instancia del modelo Project a la ruta projects.update
      | ------------------------------------------------------------------------------------------------------
      | *Para usar los métodos HTTP que no soportan los navegadores por defecto, pero Laravel los implementa
      |   *Laravel 5.5: {{ method_field('PATCH') }}
      |   *Laravel 5.6 o superior: @method('PATCH')
      |   *Lo que hace Laravel es crear un campo oculto
      |     *<input type="hidden" name="_method" value="PATCH">
      | ------------------------------------------------------------------------------------------------------
      | *Mensajes de validación en la vista resources\views\partials\validation-errors.blade.php
      |   *@include('partials.validation-errors')
      | ------------------------------------------------------------------------------------------------------
      | *La directiva @csrf o {{ csrf_field() }} se pasó a resources\views\partials\validation-errors.blade.php
      | ------------------------------------------------------------------------------------------------------
      | *El formulario se pasó a resources\views\projects\_form.blade.php
      |   *@include('projects._form', ['btnText' => 'Actualizar'])
      |     *['btnText' => 'Actualizar'] se pasa como parámetro a resources\views\projects\_form.blade.php
      | ------------------------------------------------------------------------------------------------------
--}}