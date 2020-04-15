
<!DOCTYPE html>
<html>
<head>
  <title>@yield('title', 'Home')</title>
</head>
<body>

  <nav>
    <ul>
      <li><a href="/">Home</a></li>
      <li><a href="/about">About</a></li>
      <li><a href="/contact">Contact</a></li>
      <li><a href="/portfolio">Portfolio</a></li>
    </ul>
  </nav>

  @yield('content')

</body>
</html>

{{-- Notas:
  |-----------------------------------------------------------------------------------------------------------------
  | *La directiva yield('') sirve para insertar HTML realizado en otras vistas 
  | *El parámetro de yield('') puede tener el nombre que deseemos
  | *La directiva yield('') acepta un parámetro que sirve en caso de que no tenga nada, pone un valor por defecto
  |   *yield('', 'valorPorDefecto')
  |   *Al pasar un valor por defecto, se borran unos espacios que se crean en el HTML
  |-----------------------------------------------------------------------------------------------------------------
--}}