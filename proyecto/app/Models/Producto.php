<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'descripcion',
        'cantidad',
        'precio',
        'categoria',
        'sku'
    ];

    // CASTS
    protected $casts = [
        'precio' => 'float',
        'cantidad' => 'integer',
    ];

    // ACCESOR - al leer el nombre lo convierte en mayúsculas
    public function getNombreAttribute($value)
    {
        return strtoupper($value);
    }

    // MUTADOR - al guardar formatea el nombre
    public function setNombreAttribute($value)
    {
        $this->attributes['nombre'] = ucfirst(strtolower($value));
    }
}
