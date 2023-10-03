<?php

namespace App\Http\Controllers;

use App\Models\Carrito;
use App\Models\categoria;
use App\Models\Composicion;
use App\Models\DetalleCarrito;
use App\Models\marca;
use App\Models\producto;
use App\Models\ProductoComposicion;
use App\Models\Promocion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Phpml\Classification\KNearestNeighbors;

class CatalogoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = producto::paginate(9);
        $categorias = categoria::get();
        $marcas = marca::get();
        $promociones = Promocion::get();
        if (auth()->user()) {
            $carrito = Carrito::where('idCliente', auth()->user()->id);
            $carrito = $carrito->where('estado', 1)->first();
            $detallesCarrito = DetalleCarrito::get();
            return view('cliente.catalogo.catalogo', compact('productos', 'categorias', 'marcas', 'promociones', 'carrito', 'detallesCarrito'));
        }
        return view('cliente.catalogo.catalogo', compact('productos', 'categorias', 'marcas', 'promociones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $productos = producto::get();
        $producto = producto::findOrFail($id);
        $categorias = categoria::get();
        $marcas = marca::get();
        $promociones = Promocion::get();
        $productsComp = ProductoComposicion::where('id_producto', $id)->get();
        $composiciones = collect();
        foreach ($productsComp as $productComp) {
            $composicion = Composicion::FindOrFail($productComp->id_composicion);
            $composiciones->push($composicion);
        }
        $idProducts = collect();
        foreach ($composiciones as $composicion) {
            $p = ProductoComposicion::where('id_composicion', $composicion->id)->get();
            $idProducts->push($p);
        }
        $productosRec = collect();
        foreach ($idProducts[0] as $idProduct) {
            $p = Producto::FindOrFail($idProduct->id_producto);
            $productosRec->push($p);
        }
        //dd($productosRec);
        if (auth()->user()) {
            $carrito = Carrito::where('idCliente', auth()->user()->id);
            $carrito = $carrito->where('estado', 1)->first();
            $detallesCarrito = DetalleCarrito::get();
            return view('cliente.catalogo.product', compact('productos', 'producto', 'categorias', 'marcas', 'promociones', 'carrito', 'detallesCarrito', 'productosRec', 'composiciones'));
        }
        return view('cliente.catalogo.product', compact('productos', 'producto', 'categorias', 'marcas', 'promociones', 'productosRec', 'composiciones'));
    }

    public function KNN($id)
    {
        $productos = Producto::get();
        $composiciones = Composicion::get();

        $classifier = new KNearestNeighbors();
        $classifier->train($productos, $composiciones);

        $product = Producto::FindOrFail($id);
        $classifier->predict($product);
        return $classifier;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
