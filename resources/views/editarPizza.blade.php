@extends('layout')
@section('contenido')
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="card">
          <div class="card-body">
            <form action="{{route('pizzas.update', $pizza->id )}}" method="post">
              @csrf
              @method('PUT')
              <h5>Editar Pizza</h5>

              <div class="form-row">
                <div class="form-group col-md-12">
                  <label for="inputEmail4">Nombre</label> 
                  <input type="text" value="{{$pizza->name}}" name="name" class="form-control" id="inputEmail4" placeholder="Introduce el nombre de la pizza">
                </div> 
              </div>

              <div class="form-group">
                  <label for="descripcion">Descripcion</label> 
                  <textarea name="description" id="descripcion" cols="30" rows="4" class="form-control"> {{$pizza->description}}</textarea>
                </div> 
              </div>

              <div class="form-group">
                  <label for="inputAddress2">Precio</label> 
                  <input type="text" value="{{$pizza->price}}" name="price" class="form-control" id="inputAddres2" placeholder="Introduce el precio de la pizza">
                </div>
              <button type="submit" class="btn btn-primary">Actualizar</button>
              <a href="{{ route('pizzas.index') }}" class="btn btn-danger">Regresar</a>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endsection