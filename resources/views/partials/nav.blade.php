<nav class="navbar navbar-light navbar-expand-lg bg-white shadow-sm">

  {{-- container --}}
    <div class="container">

      <a class="navbar-brand" href="{{ route('home') }}">{{ config('app.name') }}</a>

      <button class="navbar-toggler" type="button"
                data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
          <span class="navbar-toggler-icon"></span>
      </button>

      {{-- menu --}}
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="nav nav-pills">
                <li class="nav-item">
                  <a class="nav-link {{ setActive('home') }}" href="{{ route('home') }}">{{ __("Home") }}</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link {{ setActive('about') }}" href="{{ route('about') }}">{{ __("About") }}</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link {{ setActive('contact') }}" href="{{ route('contact') }}">{{ __("Contact") }}</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link {{ setActive('projects.*') }}" href="{{ route('projects.index') }}">{{ __("Projects") }}</a>
                </li>
          
                @auth
                  {{-- cerrar sesión --}}
                    <li class="nav-item">
                      <a class="nav-link" href="#" onclick="event.preventDefault(); 
                        document.getElementById('logout-form').submit();">
                        Cerrar sesión
                      </a>
                    </li>
                  {{-- end cerrar sesión --}}
                @else
                  <li class="nav-item">
                    <a class="nav-link {{ setActive('login') }}" href="{{ route('login') }}">Login</a>
                  </li>
                @endauth  
            </ul>
        </div>
      {{-- end menu --}}
    </div>
  {{-- end container --}}

</nav>

  {{-- cerrar sesión --}}
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
      {{ csrf_field() }}
    </form>
  {{-- end cerrar sesión --}}