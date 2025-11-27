@extends('layout')

@section('content')
<div class="container mt-4">
    <h1>Editar Producto</h1>

    <form action="{{ route('productos.update', $producto->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Nombre:</label>
            <input type="text" name="nombre" class="form-control" value="{{ $producto->nombre }}">
        </div>

        <div class="mb-3">
            <label>Descripción:</label>
            <textarea name="descripcion" class="form-control">{{ $producto->descripcion }}</textarea>
        </div>

        <div class="mb-3">
            <label>Cantidad:</label>
            <input type="number" name="cantidad" class="form-control" value="{{ $producto->cantidad }}">
        </div>

        <div class="mb-3">
            <label>Precio:</label>
            <input type="number" name="precio" step="0.01" class="form-control" value="{{ $producto->precio }}">
        </div>

        <div class="mb-3">
            <label>Categoría:</label>
            <input type="text" name="categoria" class="form-control" value="{{ $producto->categoria }}">
        </div>

        <div class="mb-3">
            <label>SKU:</label>
            <input type="text" name="sku" class="form-control" value="{{ $producto->sku }}">
        </div>

        <button class="btn btn-primary">Actualizar</button>
        <a href="{{ route('productos.index') }}" class="btn btn-secondary">Volver</a>
    </form>
</div>
@endsection
