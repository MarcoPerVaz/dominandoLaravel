
{{-- directiva csrf --}}
  {{ csrf_field() }}
{{-- end directiva csrf --}}

{{-- title --}}
  <label>
    Título del proyecto
    <br>
    <input type="text" name="title" value="{{ old('title', $project->title) }}">
  </label>
{{-- end title --}}

  <br>

{{-- description --}}
  <label>
    Descripción del proyecto
    <br>
    <textarea type="text" name="description">{{ old('description', $project->description) }}</textarea>
  </label>
{{-- end description --}}

  <br>

{{-- url --}}
  <label>
    URL del proyecto
    <br>
    <input type="text" name="url" value="{{ old('url', $project->url) }}">
  </label>
{{-- end url --}}

  <br>

<button>{{ $btnText }}</button>


{{-- Notas:
      | --------------------------------------------------------------------------------------------------------------------------------
      | *El subguión en el nombre de una vista refiere a que es una vista parcial y no una vista completa, por lo que no se 
      |  debe llamar como una vista normal, no es obligatorio pero se hizo como referencia
      | --------------------------------------------------------------------------------------------------------------------------------
      | *La directiva @csrf es una protección contra ataques csrf (cross-site request forgery)
      |   *Documentación: https://laravel.com/docs/5.5/csrf#csrf-introduction
      |     *Para Laravel 5.5 se usa {{ csrf_field() }}
      |   *Documentación: https://laravel.com/docs/5.7/csrf#csrf-introduction
      |     *A partir de Laravel 5.6 se usa la directiva @csrf
      | --------------------------------------------------------------------------------------------------------------------------------
      | *{{ $btnText }} La variable $btnText se asigna en la vista resources\views\projects\create.blade.php
      |   * @include('projects._form', ['btnText' => 'Guardar'])
      | *{{ $btnText }} La variable $btnText se asigna en la vista resources\views\projects\edit.blade.php
      |   * @include('projects._form', ['btnText' => 'Editar'])
      | *old('title', $project->title) Sirve para que persistan los cambios al refrescar el navegador y si no hay cambios muestre lo que 
      |  está en la variable $project->title
      |   *Igual para los otros elementos HTML
      | --------------------------------------------------------------------------------------------------------------------------------
--}}