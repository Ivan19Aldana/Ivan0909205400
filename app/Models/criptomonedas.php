<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class criptomonedas extends Model
{
    use HasFactory;
    protected $fillable = ['nombre, Logotipo, Precio, Descripcion, Lenguaje '];
}
