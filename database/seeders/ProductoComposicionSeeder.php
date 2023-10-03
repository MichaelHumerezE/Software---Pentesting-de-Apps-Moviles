<?php

namespace Database\Seeders;

use App\Models\ProductoComposicion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductoComposicionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProductoComposicion::create([
            'id_producto' => '1',
            'id_composicion' => '1',
        ]);
        ProductoComposicion::create([
            'id_producto' => '2',
            'id_composicion' => '3',
        ]);
        ProductoComposicion::create([
            'id_producto' => '3',
            'id_composicion' => '2',
        ]);
        ProductoComposicion::create([
            'id_producto' => '4',
            'id_composicion' => '4',
        ]);
        ProductoComposicion::create([
            'id_producto' => '4',
            'id_composicion' => '5',
        ]);
        ProductoComposicion::create([
            'id_producto' => '4',
            'id_composicion' => '6',
        ]);
        ProductoComposicion::create([
            'id_producto' => '5',
            'id_composicion' => '1',
        ]);
        ProductoComposicion::create([
            'id_producto' => '6',
            'id_composicion' => '7',
        ]);
        ProductoComposicion::create([
            'id_producto' => '7',
            'id_composicion' => '1',
        ]);
        ProductoComposicion::create([
            'id_producto' => '8',
            'id_composicion' => '1',
        ]);
        ProductoComposicion::create([
            'id_producto' => '9',
            'id_composicion' => '1',
        ]);
        ProductoComposicion::create([
            'id_producto' => '10',
            'id_composicion' => '1',
        ]);
        ProductoComposicion::create([
            'id_producto' => '11',
            'id_composicion' => '4',
        ]);
        ProductoComposicion::create([
            'id_producto' => '11',
            'id_composicion' => '5',
        ]);
        ProductoComposicion::create([
            'id_producto' => '11',
            'id_composicion' => '6',
        ]);
        ProductoComposicion::create([
            'id_producto' => '12',
            'id_composicion' => '2',
        ]);
        ProductoComposicion::create([
            'id_producto' => '13',
            'id_composicion' => '7',
        ]);
    }
}
