<?php

namespace App\Http\Controllers;

use App\Models\Carrito;
use App\Models\categoria;
use App\Models\DetalleCarrito;
use App\Models\marca;
use App\Models\producto;
use App\Models\Promocion;
use Illuminate\Http\Request;

class BusquedaController extends Controller
{
    public function searchclient(Request $Request)
    {
        $productos = producto::select('*')->orderBy('id', 'ASC');
        $productos = $productos->where($Request->atributo, 'like', '%' . $Request->valor . '%')->paginate(10);
        $categorias = categoria::get();
        $marcas = marca::get();
        $promociones = Promocion::get();
        if (auth()->user()) {
            $carrito = Carrito::where('idCliente', auth()->user()->id);
            $carrito = $carrito->where('estado', 1)->first();
            $detallesCarrito = DetalleCarrito::get();
            return view('cliente.catalogo.busqueda', compact('productos', 'categorias', 'marcas', 'promociones', 'carrito', 'detallesCarrito'));
        }
        return view('cliente.catalogo.busqueda', compact('productos', 'categorias', 'marcas', 'promociones'));
    }
}
