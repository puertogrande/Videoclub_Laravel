@extends('layouts.master')
@section('titulo','PAGINA PRINCIPAL HOME')
@section('content')
<div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
        <div class="col-md-6 px-0">
          <h1 class="display-4 font-italic">Videoclub  Las Salinas </h1>
          <p class="lead my-3">
            El mejor videoclub para que puedas ver las peliculas sin tener que poner
            la tarjeta de crédito como en Netflix
          </p>
          <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">Continua Leyendo</a></p>
        </div>
      </div>

      <div class="row mb-5">
      @foreach($peliculas as $pelicula)
        <div class="col-xs-6 col-sm-4 col-md-3">
        @php
        $id = $pelicula->id      
        @endphp

        {{$pelicula->title}}<br>
        <a href="{{action('catalogController@getShow',$id ) }}"> Detalles</a>
        <a href="{{action('catalogController@getEdit',$id ) }}"> Modificar</a>
        <a href="{{action('catalogController@borrar',$id ) }}"> Borrar</a>
        
        </div>                     
      @endforeach
      </div>

      <div class="row mb-2">
        <div class="col-md-6">
          <div class="card flex-md-row mb-4 box-shadow h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-primary">Novedades</strong>
              <h3 class="mb-0">
                <a class="text-dark" href="#">Ver todas</a>
              </h3>
              <div class="mb-1 text-muted">Nov 12</div>
              <p class="card-text mb-auto">Las mejores películas del cine adulto de los años 80</p>
              <a href="#">Continua leyendo</a>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card flex-md-row mb-4 box-shadow h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-success">Ofertas</strong>
              <h3 class="mb-0">
                <a class="text-dark" href="#">Tarzán</a>
              </h3>
              <div class="mb-1 text-muted">Nov 11</div>
              <p class="card-text mb-auto">Tenemos todas las versiones de tarzán en oferta</p>
              <a href="#">Continua leyendo</a>
            </div>
          </div>
        </div>
</div>
@endsection
