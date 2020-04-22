
<!DOCTYPE html>
<html>
<head>
  <title>@yield('title', 'Home')</title>
  
  {{-- CSS --}}
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
  {{-- CSS --}}

   {{-- JS --}}
    <script src="/js/app.js" defer></script>
  {{-- JS --}}

</head>
<body>

      @include('partials.nav') 

    @include('partials.session-status')

  @yield('content')

</body>
</html>

{{-- Notas:
  |-----------------------------------------------------------------------------------------------------------------
  | */css ó /js significa que se encuentra en la carpeta public de Laravel
  | *<script src="/js/app.js" defer></script> defer indica que se ejecute el javascript al final de la carga del sitio
  | *No se deben colocar estilos en public\css\app.css
  | *No se deben colocar estilos en public\js\app.js
  | *Para agregar o modificar los estilos se deben agregar en:
  |   *Si son js en resources\assets\js
  |   *Si son css en resources\assets\sass
  | *Laravel por defecto incluye sass que es un compilador de estilos que permite usar variables
  | *El archivo de entrada para los estilos es resources\assets\sass\app.scss
  | *{{ mix('css/app.css') }} sirve para tener actualizado el css y evitar tener que hacer un hard reload (ctrl + r) en el navegador, 
  |  así que no hay necesidad de borrar cachés
  |-----------------------------------------------------------------------------------------------------------------
--}}