
<!DOCTYPE html>
<html>
<head>
  <title>@yield('title', 'Home')</title>
  <style>
    .active a {
      color: red;
      text-decoration: none;
    }
  </style>
</head>
<body>

  
  {{-- Se extrae en una vista aparte --}}
    <nav>
    {{--
      | ----------------------------
      | *request viene de Illuminate\Http\Request
      | <pre>{{ request() }}</pre>: muestra todo lo que se envía en la petición
      | <pre>{{ dump(request()) }}</pre>: Muestra la información en formato json
      | <pre>{{ dump(request()->url()) }}</pre>: Muestra la URL en formato json y texto plano
      | {{ dump(request()->url()) }}: Muestra la URL completa en formato json y texto plano
      | {{ dump(request()->path()) }}: Muestra la URL interna
      | {{ dump(request()->routeIs('nombreRuta')) }}: Retorna verdadero o falso
      |   *Ejemplo: {{ dump(request()->routeIs('about')) }}
      | ---------------------------- 
   --}}
      {{-- Información de request (darle una mirada siempre, sólo debe descomentar cualquiera de las 3 líneas) --}}

          {{-- <pre>{{ dump(request()) }}</pre> --}}
          {{-- <pre>{{ dump(request()->url()) }}</pre>  --}}
          {{-- {{ dump(request()->url()) }}  --}}
          {{-- {{ dump(request()->path()) }} --}}
          {{-- {{ dump(request()->routeIs('nombreRuta')) }} --}}
        
      {{-- ---------------------------------------------------------------------------------------------------- --}}

        {{-- Funciona pero se hizo usando una función también llamados helpers --}}
          {{-- <ul> --}}

            {{-- <li class="{{ request()->routeIs('home') ? 'active' : '' }}"><a href="/">Home</a></li> --}}
            {{-- <a class="{{ request()->routeIs('about') ? 'active' : '' }}"><a href="/about">About</a></a> --}}
            {{-- <li class="{{ request()->routeIs('contact') ? 'active' : '' }}"><a href="/contact">Contact</a></li> --}}
            {{-- <li class="{{ request()->routeIs('portfolio') ? 'active' : '' }}"><a href="/portfolio">Portfolio</a></li> --}}

          {{-- </ul>  --}}
        {{-- ----------------------------------------------------------------- --}}

        {{-- Usando el helper app\helpers.php --}}
          {{-- <ul> --}}

            {{-- <li class="{{ setActive('home') }}"><a href="/">Home</a></li> --}}
            {{-- <li class="{{ setActive('about') }}"><a href="/about">About</a></li> --}}
            {{-- <a class="{{ setActive('contact') }}"><a href="/contact">Contact</a></a> --}}
            {{-- <li class="{{ setActive('portfolio') }}"><a href="/portfolio">Portfolio</a></li> --}}

          {{-- </ul> --}}
        {{-- -------------------------------- --}}
      
    {{-- </nav> --}}

    {{-- Se incluye la vista resources\views\partials\nav.blade.php --}}
      @include('partials.nav') 
    {{-- ---------------------------------------------------------- --}}

  @yield('content')

</body>
</html>

{{-- Notas:
  |-----------------------------------------------------------------------------------------------------------------
  | *No es recomendable usar la etiqueta <style></style> dentro de HTML para no hacer largo el HTML,
  |   pero en este caso para uso demostrativo se coloca aquí
  | *Al usar la directiva @include('partials.nav') laravel asume que es una vista y que viene de resources\views y que 
  |   tiene extensión blade.php, así que no es necesario colocarlo.
  | *Al usar cualquier directiva donde se haga referencia a carpetas y archivos se usa punto (partials.nav) o
  |   se puede usar diagonal (partials/nav)
  |-----------------------------------------------------------------------------------------------------------------
--}}