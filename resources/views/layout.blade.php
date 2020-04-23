
<!DOCTYPE html>
<html>
<head>
  <title>@yield('title', 'Home')</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta name="csrf-token" content="{{ csrf_token() }}">

  {{-- CSS --}}
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
  {{-- CSS --}}
  
  {{-- JS --}}
    <script src="/js/app.js" defer></script>
  {{-- JS --}}
  
</head>
<body>

  <div id="app" class="d-flex flex-column h-screen justify-content-between">

    {{-- header --}}
      <header>
        @include('partials.nav')
        @include('partials.session-status')
      </header>
    {{-- end header --}}

      {{-- main --}}
        <main class="py-4">
          @yield('content')
        </main>
      {{-- end main --}}

      {{-- footer --}}
        <footer class="bg-white text-blac-50 text-center py-3 shadow">
          {{ config('app.name') }}  Copyright @ {{ date('Y') }}
        </footer>
      {{-- end footer --}}
      
  </div>
</body>
</html>