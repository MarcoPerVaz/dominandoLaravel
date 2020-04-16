
@extends('layout')

@section('title', 'Contact')

@section('content')
  <h1>Contact</h1>

  <form action="{{ route('contact') }}" method="POST">

    @csrf

    <input name="name" placeholder="Nombre..." value="Marco">
    <br>
    <input type="email" name="email" placeholder="Email..." value="admin@mail.com">
    <br>
    <input name="subject" placeholder="Asunto..." value="Asunto de prueba">
    <br>
    <textarea name="content" placeholder="Mensaje...">Mensaje de prueba</textarea>
    <br>
    <button>Enviar</button>
  </form>
@endsection

{{-- Notas:
  | -----------------------------------------------------------------------------------------------------------------
  | *Cuando sale el error de Laravel - No Message significa que estamos accediendo a la url por
  |  el método Http equivocado
  | *A partir de Laravel 5.6 se añadió la directiva @csrf que protege contra ataques cross-site request forgery (csrf)
  | *En Laravel 5.5 se tenía que usar {{ csrf_field() }} que protege contra ataques cross-site request forgery (csrf)
  | -----------------------------------------------------------------------------------------------------------------
--}}