@extends('body.cuerpo')

@section('title', 'Producto '.$productos)

@section('cuerpo')

    <h1>PRODUCTOS</h1>
<div class="container">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">nombre</th>
            <th scope="col">stock</th>
            <th scope="col">descripcion</th>
          </tr>
        </thead>
        
        <tbody>
            @foreach ($productos as $tem)
            <tr>
                <th scope="row">1</th>
                <td>{{$tem->Nombre}}</td>
                <td>{{$tem->PrecioUnitario}}</td>
                <td>{{$tem->stock}}</td>
            </tr>
          @endforeach
        </tbody>
      </table>
</div>
    
    
@endsection()