<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Categoria extends Model
{
    use HasFactory;

    protected $primaryKey = 'CategoriaID'; 
    protected $fillable = ["CategoriaID", "Nombre", "Descripcion"];

    public function productos()
    {
        //hasMany
        return $this->hasMany(Producto::class, 'CategoriaID');
    }
}
