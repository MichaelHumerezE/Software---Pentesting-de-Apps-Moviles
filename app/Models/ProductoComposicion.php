<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductoComposicion extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_producto',
        'id_composicion',
    ];
}
