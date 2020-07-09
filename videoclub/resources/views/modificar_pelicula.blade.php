@extends('layouts.master')
@section('titulo','PAGINA PRINCIPAL HOME')
@section('content')

<!-- comprobar que se envia a algun sitio!-->
<form name="formul1" method="POST" action="{{action('catalogController@postEdit')}}">
    {{ csrf_field() }}

  <div class="form-group mt-5" >
    <label for="titulo">Título</label><br>
    <input type="text" name="title" id="title"   required value="{{$pelicula->title}}"> 
  </div>
  
  <div class="form-group">
    <label for="ano">Año</label><br>
    <input type="number" name="year" id="year" value="{{$pelicula->year}}" required>
  </div>

  <div class="form-group">
    <label for="director">Director</label><br>
    <input type="text" name="director" id="director" value="{{$pelicula->director}}" required >
  </div>

  <div class="form-group">
    <label for="poster">Poster</label><br>
    <input type="text" name="poster" id="poster" value="{{$pelicula->poster}}" required>
  </div>
 
  <div class="form-group">
    <label for="synopsis">Resumen</label>
    <textarea id="synopsis" class="md-textarea form-control" style="max-width: 40%" name="synopsis" rows="5" value="{{$pelicula->synopsis}}" required>
        {{$pelicula->synopsis}}
    </textarea>
  </div>
  <input type="hidden" id="custId" name="id" value="{{$pelicula->id}}">

  <button type="submit" class="btn btn-primary">Enviar</button>
</form>
@endsection
