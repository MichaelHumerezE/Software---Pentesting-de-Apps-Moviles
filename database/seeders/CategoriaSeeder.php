<?php

namespace Database\Seeders;

use App\Models\categoria;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        categoria::create([
            'nombre' => 'Aparato Respiratorio',
        ]);
        categoria::create([
            'nombre' => 'Analgésico',
        ]);
        categoria::create([
            'nombre' => 'Crema Dermica',
        ]);
    }
}
