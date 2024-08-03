@extends('body.cuerpo')

@section('title', 'Producto '.$productos)

@section('cuerpo')

   
<div class="container">
  <h1>PRODUCTOS</h1>
  <hr>
  <a href="{{route('productos.crear')}}" class="btn btn-primary">Agregar Producto</a>
  <hr>
  LISTA DE PROTUCTOS
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">nombre</th>
            <th scope="col">stock</th>
            <th scope="col">Precio Unitario</th>
            <th scope="col">Descripcion</th>
          </tr>
        </thead>
        
        <tbody>
            @foreach ($productos as $tem)
            <tr>
                <th scope="row">1</th>
                <td>{{$tem->Nombre}}</td>
                <td>{{$tem->stock}}</td>
                <td>{{$tem->PrecioUnitario}}</td>
                <td>{{$tem->Descripcion}}</td>
                <td>
                  <a href="" class="btn btn-primary">Editar</a>
                  <a href="" class="btn btn-danger">Eliminar</a>
                </td>
            </tr>
          @endforeach
        </tbody>
      </table>
</div>
    
    
@endsection()