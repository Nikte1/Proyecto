@extends('layout')

@section('content')
<div style="max-width: 600px; margin: 40px auto; background: #fff; padding: 30px; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.1);">
    
    <h2 style="font-size: 28px; color: #6a1b9a; font-weight: bold; margin-bottom: 25px;">
        Crear Producto
    </h2>

    <form action="{{ route('productos.store') }}" method="POST">
        @csrf

        {{-- Campo Nombre --}}
        <div style="margin-bottom: 20px;">
            <label style="font-weight: bold; color: #444;">Nombre:</label>
            <input type="text" name="nombre" 
                   style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 8px; margin-top: 5px;">
        </div>

        {{-- Campo Descripción --}}
        <div style="margin-bottom: 20px;">
            <label style="font-weight: bold; color: #444;">Descripción:</label>
            <textarea name="descripcion"
                      style="width: 100%; padding: 10px; height: 100px; border: 1px solid #ccc; border-radius: 8px; margin-top: 5px;"></textarea>
        </div>

        <div style="display: flex; gap: 15px;">
            <div style="flex:1;">
                <label style="font-weight: bold; color: #444;">Cantidad:</label>
                <input type="number" name="cantidad"
                       style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 8px; margin-top: 5px;">
            </div>

            <div style="flex:1;">
                <label style="font-weight: bold; color: #444;">Precio:</label>
                <input type="number" step="0.01" name="precio"
                       style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 8px; margin-top: 5px;">
            </div>
        </div>

        <div style="margin-top: 20px;">
            <label style="font-weight: bold; color: #444;">Categoría:</label>
            <input type="text" name="categoria"
                   style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 8px; margin-top: 5px;">
        </div>

        <div style="margin-top: 20px;">
            <label style="font-weight: bold; color: #444;">SKU:</label>
            <input type="text" name="sku"
                   style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 8px; margin-top: 5px;">
        </div>

        <div style="margin-top: 30px; display: flex; gap: 15px;">
            <button type="submit"
                style="background: #6a1b9a; color: white; padding: 12px 20px; border: none; border-radius: 8px; font-weight: bold; cursor:pointer;">
                Guardar
            </button>

            <a href="{{ route('productos.index') }}"
                style="padding: 12px 20px; background: #ddd; border-radius: 8px; text-decoration: none; color: #333;">
                Volver
            </a>
        </div>

    </form>

</div>
@endsection
