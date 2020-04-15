
@extends('layout')

@section('title', 'Portfolio')

@section('content')
  <h1>Portfolio</h1>

{{-- foreach --}}
  <h2>Foreach con la variable $portfolio</h2>
  {{-- PHP puro --}}
  <ul>
    <h3>PHP Puro</h3>
    <?php foreach($portfolio as $portfolioItem) {
      echo "<li>" . $portfolioItem['title'] . "</li>";
    } ?>
  </ul>

  {{-- PHP puro y Blade --}}
  <ul>
    <h3>Mezclando PHP puro y Blade</h3>
    <?php foreach($portfolio as $portfolioItem): ?>
      <li>{{ $portfolioItem['title'] }}</li>
    <?php endforeach ?>
  </ul>

  {{-- Blade --}}
  <ul>
    <h3>Blade</h3>
    @foreach($portfolio as $portfolioItem)
      <li>{{ $portfolioItem['title'] }}</li>
    @endforeach
  </ul>
  {{-- end foreach --}}


  {{-- if --}}
  <h2>If con la variable $portfolio1</h2>
  {{-- Blade --}}
  <ul>
    <h3>Blade</h3>
    @if ($portfolio) {{-- Si tiene información la variable --}}
      @foreach($portfolio as $portfolioItem)
        <li>{{ $portfolioItem['title'] }}</li>
      @endforeach
    @else {{-- Si no tiene información la variable --}}
    <li>No hay proyectos para mostrar</li>
    @endif
  </ul>
  {{-- end if --}}

  {{-- isset --}}
  <h2>Isset con la variable $portfolio2 que no existe</h2>
  {{-- Blade --}}
  <ul>
    <h3>Blade</h3>
    @isset ($portfolio2) {{-- Si tiene tiene información la variable --}}
      @foreach($portfolio as $portfolioItem)
        <li>{{ $portfolioItem['title'] }}</li>
      @endforeach
    @else {{-- Si no tiene información la variable --}}
    <li>No hay proyectos para mostrar</li>
    @endisset
  </ul>
  {{-- isset --}}

{{-- forelse --}}
  <h2>Forelse con la variable $portfolio, $portfolio1 (se usa una u otra para probar)</h2>
  {{-- Blade --}}
  <ul>
    <h3>Blade</h3>
      @forelse($portfolio1 as $portfolioItem)
        <li>{{ $portfolioItem['title'] }}</li>
      @empty
        <li>No hay proyectos para mostrar</li>
      @endforelse
  </ul>

  <h2>Forelse con la variable $portfolio y la variable de Laravel $loop</h2>
  {{-- Blade --}}
  <ul>
    <h2>Muestra la información de la variable $loop de la variable $portfolio</h2>
      <h2>Blade</h2>
      @forelse($portfolio as $portfolioItem)
        <li>{{ $portfolioItem['title'] }} <pre>{{ var_dump($loop) }}</pre></li>
      @empty
        <li>No hay proyectos para mostrar</li>
      @endforelse
  </ul>

  <h2>Forelse con la variable $portfolio y la variable $loop</h2>
  {{-- Blade --}}
  <ul>
    <h3>Blade</h3>
      @forelse($portfolio as $portfolioItem)
        <li>
          {{ $portfolioItem['title'] }} 
          <small>{{ $loop->last ? ' Es el último' : '' }}</small>
          <small>{{ $loop->first ? ' Es el primero' : '' }}</small>
        </li>
      @empty
        <li>No hay proyectos para mostrar</li>
      @endforelse
  </ul>
  {{-- end forelse --}}

  {{-- for --}}
  <h2>For</h2>
  <ul>
    <h3>Blade</h3>
    @for ($i = 0; $i < 10; $i++)
        {{ $i }}
    @endfor
  </ul>
  {{-- end for --}}

  {{-- while --}}
  <h2>While</h2>
  <ul>
    <h3>Blade y PHP puro</h3>

    <?php $p = 0 ?>
    @while ($p < 2)
      <p>{{ $p }} soy menor a 2</p>
      <?php $p++ ?>
    @endwhile
  </ul>
  {{-- end while --}}
@endsection

{{-- Notas:
  | ----------------------------------------------------------------------------------------
  | *Dentro de los ciclos o loops en Laravel, existe la variable $loop
  | *Nota: Se debe poner el menor código php en las vistas, en este caso es para demostración
  | *También existe la directiva @switch() entre otras (Ver la documentación oficial de Laravel).
  | ----------------------------------------------------------------------------------------
--}}