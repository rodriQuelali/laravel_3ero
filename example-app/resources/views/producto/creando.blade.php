@extends('body.cuerpo')

@section('title', 'Creando Producto ')

@section('cuerpo')
<div class="container mt-5">
    <h2 class="mb-4">Agregar Producto</h2>
    <form action="{{ route('productos.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre del Producto</label>
            <input type="text" class="form-control" id="nombre" placeholder="Ingrese el nombre del producto" required>
        </div>
        <div class="form-group">
            <label for="stock">Stock</label>
            <input type="number" class="form-control" id="stock" placeholder="Ingrese la cantidad en stock" required>
        </div>
        <div class="form-group">
            <label for="precio_unitario">Precio Unitario</label>
            <input type="number" step="0.01" class="form-control" id="precio_unitario" placeholder="Ingrese el precio unitario" required>
        </div>
        <div class="form-group">
            <label for="descripcion">Descripción</label>
            <textarea class="form-control" id="descripcion" rows="3" placeholder="Ingrese la descripción del producto" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Agregar Producto</button>
    </form>
</div>


@endsection()