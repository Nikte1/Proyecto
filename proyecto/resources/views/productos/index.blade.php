@extends('layout')

@section('content')
<div style="background: white; padding: 25px; border-radius: 12px; box-shadow: 0 2px 12px rgba(0,0,0,0.08);">

    <h1 style="color: #6d3f6a; font-weight: 600; margin-bottom: 20px;">
        Productos
    </h1>

    <a href="{{ route('productos.create') }}" 
       style="background:#d97bd3; padding:10px 15px; color:white; border-radius:8px; text-decoration:none; font-weight:600;">
        <i class="fa-solid fa-plus"></i> Crear Producto
    </a>

    <table style="width:100%; margin-top:25px; border-collapse:collapse;">
        <thead>
            <tr style="background:#f5d3f1; color:#4a003f;">
                <th style="padding:12px; border-bottom:2px solid #e7b5df;">ID</th>
                <th style="padding:12px; border-bottom:2px solid #e7b5df;">Nombre</th>
                <th style="padding:12px; border-bottom:2px solid #e7b5df;">Categoría</th>
                <th style="padding:12px; border-bottom:2px solid #e7b5df;">Precio</th>
                <th style="padding:12px; border-bottom:2px solid #e7b5df;">Descripcion</th>
            </tr>
        </thead>

        <tbody>
            @forelse ($productos as $producto)
                <tr style="text-align:center;">
                    <td style="padding:12px; border-bottom:1px solid #f0e1ee;">{{ $producto->id }}</td>
                    <td style="padding:12px; border-bottom:1px solid #f0e1ee;">{{ $producto->nombre }}</td>
                    <td style="padding:12px; border-bottom:1px solid #f0e1ee;">{{ $producto->categoria }}</td>
                    <td style="padding:12px; border-bottom:1px solid #f0e1ee;">${{ $producto->precio }}</td>

                    <td style="padding:12px; border-bottom:1px solid #f0e1ee;">
                        <a href="{{ route('productos.edit', $producto->id) }}" 
                           style="background:#f5d3f1; padding:6px 12px; border-radius:6px; text-decoration:none; margin-right:6px; color:#4a003f;">
                            Editar
                        </a>

                        <form action="{{ route('productos.destroy', $producto->id) }}" 
                              method="POST" 
                              style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button 
                                style="background:#e57373; padding:6px 12px; border:none; color:white; border-radius:6px; cursor:pointer;">
                                Eliminar
                            </button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" style="padding:20px; color:#888;">
                        No hay productos registrados.
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>

</div>
@endsection
