
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

    {{-- Se incluye la vista resources\views\partials\nav.blade.php --}}
      @include('partials.nav') 

    {{-- Se incluye la vista resources\views\partials\session-status.blade.php --}}
    @include('partials.session-status')

  @yield('content')

</body>
</html>

{{-- Notas:
  |-----------------------------------------------------------------------------------------------------------------
  | *@include('partials.session-status') Se cuencuentra en resources\views\partials\session-status.blade.php
  |-----------------------------------------------------------------------------------------------------------------
--}}