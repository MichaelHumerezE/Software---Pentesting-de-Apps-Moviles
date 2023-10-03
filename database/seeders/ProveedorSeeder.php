<?php

namespace Database\Seeders;

use App\Models\Proveedor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProveedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Proveedor::create([
            'nombre' => '13M CHILE S.A.SUCURSAL1 BOLIVIA',
            'correo' => '13MCHILE@gmail.com',
            'celular' => '2422898',
            'direccion' => 'AV. SAN MARTIN Nº1800 EDF.TACUARAL PLANTA BAJA',
        ]);

        Proveedor::create([
            'nombre' => 'A3TEK S.R.L.',
            'correo' => 'A3TEK@gmail.com',
            'celular' => '2311277',
            'direccion' => 'FIDEL OLIVA NO. 117',
        ]);

        Proveedor::create([
            'nombre' => 'ABL PHARMA BOLIVIA LTDA.',
            'correo' => 'ABLPHARMA@gmail.com',
            'celular' => '2906508',
            'direccion' => 'C/JORES Nº25 B/VILLA MERCEDES 3 ANILLO',
        ]);

        Proveedor::create([
            'nombre' => 'ACTIMED',
            'correo' => 'ACTIMED@gmail.com',
            'celular' => '77710447',
            'direccion' => 'C/QUIMOME Nº 28 C/3 OESTE Z/LAS PALMAS UV0052',
        ]);

        Proveedor::create([
            'nombre' => 'INTERFAZ',
            'correo' => 'Interfaz@gmail.com',
            'celular' => '2217098',
            'direccion' => 'Calle México Nº 1487 Zona San Pedro',
        ]);

        Proveedor::create([
            'nombre' => 'ADM SAO S.A.',
            'correo' => 'ADMSAO@gmail.com',
            'celular' => '3576565',
            'direccion' => 'PARQUE INDUSTRIAL MANZANA 9',
        ]);

        Proveedor::create([
            'nombre' => 'ALCIDES ROJAS CUELLAR',
            'correo' => 'ALCIDESROJAS@gmail.com',
            'celular' => '2311010',
            'direccion' => 'CALLE GUARAYOS N° 582 ZONA/BARRIO LA RAMADA UV/10, MZA 07',
        ]);

        Proveedor::create([
            'nombre' => 'ALMAGRAN S.R.L.',
            'correo' => 'ALMAGRAN S.R.L.@gmail.com',
            'celular' => '2810015',
            'direccion' => 'VILLA BELLA Nº 2535',
        ]);
    }
}
