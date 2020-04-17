
{{-- 
  | -----------------------------------------------------------
  | *La función setActive() proviene del helper app\helpers.php
  | -----------------------------------------------------------
 --}}
<nav>
  <ul>
      <li class="{{ setActive('home') }}"><a href="/">{{ __("Home") }}</a></li>
      <li class="{{ setActive('about') }}"><a href="/about">{{ __("About") }}</a></li>
      <li class="{{ setActive('contact') }}"><a href="/contact">{{ __("Contact") }}</a></li>
      <li class="{{ setActive('portfolio') }}"><a href="/portfolio">{{ __("Portfolio") }}</a></li>
  </ul>
</nav>


{{-- Notas:
  | -----------------------------------------------------------------------------------------------------------------
  | *Para traducir textos estáticos en la aplicación laravel implementa lo siguiente
  |   *Usar esta sintaxis {{ __("Contact") }} en cualquier texto que se desee traducir
  |     *Dónde "Contact" será el nombre de la variable json que queremos traducir
  |       *Las variables de traducción están en resources\lang\es.php
  |   *Tambien se puede usar la directiva @lang('Home') en lugar de {{ __("Home") }}
  | *Es recomendable que los textos a traducir estén todos en el mismo idioma (inglés en este caso)
  | *Las traducciones al español están en resources\lang\es.json
  | -----------------------------------------------------------------------------------------------------------------
--}}