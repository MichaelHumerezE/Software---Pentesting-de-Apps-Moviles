<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Iventario extends Model
{
    use HasFactory;

    protected $fillable = [
        'cantidad',
        'id_producto',
        'id_sucursal',
    ];
}
