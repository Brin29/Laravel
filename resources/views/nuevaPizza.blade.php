@extends('layout')
@section('contenido')
  <div class="container">
    <div class="row">
      <div class="col-6">

        <h1>Crear pizza</h1>
        <form action="{{ route('pizzas.store') }}" method="POST">
          @csrf 
          <div class="from-row">
            <div class="form-group col-md-12">
              <label form="inputEmail14">Nombre</label>  
              <input type="text" class="form-control" id="inputEmail14" name="name" placeholder="Introduce el nombre de la pizza" required>
            </div>
          
            <div class="form-group">
              <label form="descripcion">Descripcion</label>  
              <textarea class="form-control" id="descripcion" cols="30" rows="4" name="description"></textarea>
            </div>

            <div class="form-group">
              <label form="inputAddress2">Precio</label>
              <input type="text" class="form-control" id="inputAddress2" name="price" placeholder="Introduce el precio de la pizza" required>
            </div>

            <button type="submit" class="btn btn-primary">Crear</button>
            <a href="{{ route('pizzas.index')}}" class="btn btn-danger">Regresar</a>
          </div>
        </form>
      </div>
    </div>
  </div>
  @endsection