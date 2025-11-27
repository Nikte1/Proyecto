@extends('layout.app')

@section('content')
<div class="container mt-4">

    <h1>Detalles del Producto</h1>

    <ul class="list-group mb-3">
        <li class="list-group-item"><strong>ID:</strong> {{ $producto->id }}</li>
        <li class="list-group-item"><strong>Nombre:</strong> {{ $producto->nombre }}</li>
        <li class="list-group-item"><strong>Descripción:</strong> {{ $producto->descripcion }}</li>
        <li class="list-group-item"><strong>Cantidad:</strong> {{ $producto->cantidad }}</li>
        <li class-group-item><strong>Precio:</strong> ${{ $producto->precio }}</li>
        <li class="list-group-item"><strong>Categoría:</strong> {{ $producto->categoria }}</li>
        <li class="list-group-item"><strong>SKU:</strong> {{ $producto->sku }}</li>
    </ul>

    <a href="{{ route('productos.index') }}" class="btn btn-secondary">Volver</a>
</div>
@endsection
