
{{-- directiva csrf --}}
  @csrf
{{-- end directiva csrf --}}

{{-- title --}}
<div class="form-group">
    <label for="title">Título del proyecto</label>
    <input class="form-control border-0 bg-light shadow-sm" type="text" name="title" id="title"
        value="{{ old('title', $project->title) }}">
</div>
{{-- end title --}}

{{-- url --}}
<div class="form-group">
  <label for="url">URL del proyecto</label>
    <input class="form-control border-0 bg-light shadow-sm" type="text" name="url" id="url"
        value="{{ old('url', $project->url) }}">
</div>
{{-- end url --}}

{{-- description --}}
<div class="form-group">
    <label for="description">Descripción del proyecto</label>
    <textarea class="form-control border-0 bg-light shadow-sm" type="text" name="description" 
      id="description">{{ old('description', $project->description) }}
    </textarea>
</div>
{{-- end description --}}

{{-- button --}}
  <button class="btn btn-primary btn-lg btn-block">{{ $btnText }}</button>
{{-- end button --}}

{{-- btn cancel --}}
  <a class="btn btn-link btn-block" href="{{ route('projects.index') }}">Cancelar</a>
{{-- end btn cancel --}}
