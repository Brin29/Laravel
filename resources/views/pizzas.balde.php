@extends("layout")
@section("contenido")
  <div class="container">
    <div class="row">
      <div class="col-mt-3 mb-3"><a href="{{ route('pizzas.create') }}" class="btn btn-primary">Crear nueva pizza</a></div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      @if($message = Session::get('succes'))
      <div class="alert alert-success" role="alert">
        {{ $message }}
      </div>
      @endif
      @if($message = Session::get('alert'))
      <div class="alert alert-warning" role="alert">
        {{ $message }}
      @endif
      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Precio</th>
            <th scope="col">Accion</th>
          </tr>
        </thead>
        <tbody>
          @foreach($pizzas as $key => $pizza)
            <tr>
              <th scope="row">{{$key}}</th>
              <td>{{ $pizzas->name }}</td>
              <td>{{ $pizzas->description }}</td>
              <td>{{ $pizzas->price }}</td>
              <td>
               <a href="{{ route('pizzas.show'), $pizza->id}}" class="btn btn-info">Mostrar</a>
                <a href="{{ route('pizzas.edit', $pizza->id) }}" class="btn btn-info">Editar</a>
                <form action="{{ route('pizzas.destroy', $pizza->id) }}" method="POST">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
              </td>
            </tr>
            @endforeach
        </tbody>
      </table>
      </div>
    </div>
  </div>
  @endsection