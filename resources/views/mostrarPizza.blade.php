@extends('layout')
@section('contenido')
  <div class="container">
    <div class="row">
      <div class="col">
        <p><b>Nombre:</b>{{$pizza -> name}}</p>
        <p><b>Descripcion:</b>{{$pizza -> description}}</p>
        <p><b>Precio:</b>{{$pizza -> price}}</p>
        <a href="{{ route('pizzas.index')}}" class="btn btn-primary">Volver</a>
      </div>
    </div>
  </div>