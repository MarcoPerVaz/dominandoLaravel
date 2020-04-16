
{{-- 
  | -----------------------------------------------------------
  | *La función setActive() proviene del helper app\helpers.php
  | -----------------------------------------------------------
 --}}
<nav>
  <ul>
      <li class="{{ setActive('home') }}"><a href="/">Home</a></li>
      <li class="{{ setActive('about') }}"><a href="/about">About</a></li>
      <li class="{{ setActive('contact') }}"><a href="/contact">Contact</a></li>
      <li class="{{ setActive('portfolio') }}"><a href="/portfolio">Portfolio</a></li>
  </ul>
</nav>