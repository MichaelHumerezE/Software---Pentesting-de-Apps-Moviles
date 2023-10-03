<?php

namespace Database\Seeders;

use App\Models\Sucursal;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SucursalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Sucursal::create([
            'nombre' => 'Farmacias Chavez, Sucursal Plan 3000',
            'direccion' => '5VF5+H89, av.paurito, Av. Cañada Pailita o Avenida Paurito, Santa Cruz de la Sierra',
            'imagen' => '',
            'latitud' => '-17.82608224538042',
            'longitud' => '-63.14164520062404',
        ]);

        Sucursal::create([
            'nombre' => 'Farmacias Chavez, Sucursal Villa 1ero. Mayo',
            'direccion' => '6V27+5WJ, Calle 12 Este, Santa Cruz de la Sierra',
            'imagen' => '',
            'latitud' => '-17.79953151858962',
            'longitud' => '-63.13524135217127',
        ]);

        Sucursal::create([
            'nombre' => 'Farmacias Chavez, Sucursal Madre India',
            'direccion' => '6R2F+JQH, Santa Cruz de la Sierra',
            'imagen' => '',
            'latitud' => '-17.798421738192165',
            'longitud' => '-63.1755417766153',
        ]);

        Sucursal::create([
            'nombre' => 'Farmacia Chávez, Sucursal 24 de Septiembre',
            'direccion' => '24 de septiembre 800, Santa Cruz de la Sierra',
            'imagen' => '',
            'latitud' => '-17.775245267556482',
            'longitud' => '-63.18194301802375',
        ]);

        Sucursal::create([
            'nombre' => 'Farmacias Chávez, Sucursal Grigotá 2do Anillo',
            'direccion' => 'Segundo anillo 5, Santa Cruz de la Sierra',
            'imagen' => '',
            'latitud' => '-17.797570818179164',
            'longitud' => '-63.19278280362563',
        ]);
    }
}
