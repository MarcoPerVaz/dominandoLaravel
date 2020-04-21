
@if ($errors->any()) 
  <ul>
    @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
  </ul>
@endif

{{-- Notas:
      | --------------------------------------------------
      | *Código que valida si hay errores en el formulario
      |   *$errors->any() Comprueba si hay errores
      |   *$errors->all() Contiene todos los errores
      |   *$error Muestra el error
      | --------------------------------------------------  
--}}