
@extends('layout')

@section('title', 'Contact')

@section('content')
  <h1>Contact</h1>
@endsection

{{-- Notas:
  | ----------------------------------------------------------------------------------------
  | *La directiva section('content') enlaza con la directiva yield('content')
  | *Todo lo que este dentro de section('') se inserta dentro de la directiva yield('')
  | ----------------------------------------------------------------------------------------
--}}