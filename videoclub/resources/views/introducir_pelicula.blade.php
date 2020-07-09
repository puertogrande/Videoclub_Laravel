@extends('layouts.master')
@section('titulo','PAGINA PRINCIPAL HOME')
@section('content')

<!-- comprobar que se envia a algun sitio!-->
<form name="formul1" method="POST" action="{{action('catalogController@postCreate')}}">
    {{ csrf_field() }}
               
  <div class="form-group mt-5" >
    <label for="titulo">Título</label><br>
    <input type="text" name="title" id="title" required>
  </div>
  
  <div class="form-group">
    <label for="ano">Año</label><br>
    <input type="number" name="year" id="year" required>
  </div>

  <div class="form-group">
    <label for="director">Director</label><br>
    <input type="text" name="director" id="director" required>
  </div>

  <div class="form-group">
    <label for="poster">Poster</label><br>
    <input type="text" name="poster" id="poster" required>
  </div>
 
  <div class="form-group">
    <label for="synopsis">Resumen</label>
    <textarea id="synopsis" class="md-textarea form-control" style="max-width: 40%" name="synopsis" rows="5" required></textarea>
  </div>

  <button type="submit" class="btn btn-primary">Enviar</button>
</form>
@endsection
