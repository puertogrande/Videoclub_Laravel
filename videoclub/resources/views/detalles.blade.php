<head>
    <style>
        img{
            width:80%;
        }
    </style>
</head>

@extends('layouts.master')
@section('titulo','Detalles de la pelicula')
@section('content')
<h1 class="display-3 mt-5 mb-5">Detalles de la película</h1>
<div class="row">
    <div class="col-sm-4">
    <img src={{$pelicula->poster}}>
    
    </div>

    <div class="col-sm-4">
        <h3 >{{$pelicula->title}}</h3>
        <h6>Año : {{$pelicula->year}}</h6>
        <h6>Director : {{$pelicula->director}}</h6>
        <p>
            <span style="font-weight:bold">Resumen</span>
            {{$pelicula->synopsis}}
        </p>
    <br>
    <span style="font-weight:bold">Disponibilidad: </span> Pelicula actualmente
    @if ($pelicula->rented===0)
        Disponible
      
    @else
        Alquilada
        
    @endif
    <br>

    {{$pelicula->sinopsis}}<br>
    @php
        $id = $pelicula->id      
       
    @endphp
    
        <div class="row">
            @if ($pelicula->rented === 0)
            <a href="{{action('catalogController@alquilar',$id ) }}"  class="btn btn-primary mr-1">Alquilar pelicula</button> </a>
            @else
            <a href="{{action('catalogController@devolver',$id ) }}" class="btn btn-danger mr-1">Devolver pelicula</button> </a>
            @endif
            <a href="{{action('catalogController@getEdit',$id ) }}" class="btn btn-warning mr-1">Editar pelicula</button> </a>
            
            <a href="{{action('catalogController@getIndex') }}" class="btn btn-light mr-1">Volver al listado</button> </a>
            

        </div>
    </div>
</div>
@endsection
