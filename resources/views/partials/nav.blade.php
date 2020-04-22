
<nav>
  <ul>
      <li class="{{ setActive('home') }}"><a href="{{ route('home') }}">{{ __("Home") }}</a></li>
      <li class="{{ setActive('about') }}"><a href="{{ route('about') }}">{{ __("About") }}</a></li>
      <li class="{{ setActive('contact') }}"><a href="{{ route('contact') }}">{{ __("Contact") }}</a></li>
      <li class="{{ setActive('portfolio') }}"><a href="{{ route('projects.index') }}">{{ __("Projects") }}</a></li>

      @auth
          {{-- cerrar sesión --}}
            <li>
              <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                Cerrar sesión
              </a>
            </li>
          {{-- end cerrar sesión --}}
        @else
          <li><a href="{{ route('login') }}">Login</a></li>
        @endauth
  </ul>
</nav>

 {{-- cerrar sesión --}}
  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    {{ csrf_field() }}
  </form>
  {{-- end cerrar sesión --}}


{{-- Notas:
      | ------------------------------
      | *La directiva @guest permite mostrar código solo a usuarios no autenticados
      |   *Guest en inglés significa invitado
      | *document.getElementById('logout-form').submit() apunta a <form id="logout-form">
      |   *Esto se hace porque es complicado darle estilos a un formulario
      | ------------------------------  
--}}