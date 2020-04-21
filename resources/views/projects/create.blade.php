
@extends('layout')

@section('title', 'Crear proyecto')

@section('content')

  <h1>Crear nuevo proyecto</h1>
  
   @include('partials.validation-errors')


  <form method="POST" action="{{ route('projects.store') }}">

    @include('projects._form', ['btnText' => 'Guardar'])

  </form>


@endsection


{{-- Notas:
      | -------------------------------------------------------------------------------------------------------
      | *Mensajes de validación en la vista resources\views\partials\validation-errors.blade.php
      |   *@include('partials.validation-errors')
      | -------------------------------------------------------------------------------------------------------
      | *La directiva @csrf o {{ csrf_field() }} se pasó a resources\views\partials\validation-errors.blade.php
      | -------------------------------------------------------------------------------------------------------
      | *El formulario se pasó a resources\views\projects\_form.blade.php
      |   *@include('projects._form', ['btnText' => 'Guardar'])
      |     *['btnText' => 'Guardar'] se pasa como parámetro a resources\views\projects\_form.blade.php
      | -------------------------------------------------------------------------------------------------------  
--}}