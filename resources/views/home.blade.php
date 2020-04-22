
@extends('layout')

@section('title', 'Home')

@section('content')
  <h1>Home</h1>

  {{-- {{ auth()->user() }} --}}

  @auth
    {{ auth()->user()->name }}
  @endauth
@endsection

{{-- Notas:
  | -------------------------------------------------------------------------------------------------------
  | *La directiva @auth permite crear código HTML que sólo podrá ser visible si el usuario está autenticado
  | *{{ auth()->user() }} Muestra toda la información sobre el usuario autenticado
  | *{{ auth()->user()->name }} Muetra el nombre del usuario autenticado
  | -------------------------------------------------------------------------------------------------------
--}}