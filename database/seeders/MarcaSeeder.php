<?php

namespace Database\Seeders;

use App\Models\marca;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MarcaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        marca::create([
            'nombre' => 'BAGÓ'
        ]);
        marca::create([
            'nombre' => 'SAE'
        ]);
        marca::create([
            'nombre' => 'BAYER'
        ]);
        marca::create([
            'nombre' => 'MINTLAB'
        ]);
        marca::create([
            'nombre' => 'LAFAR'
        ]);
        marca::create([
            'nombre' => 'HERSIL'
        ]);
        marca::create([
            'nombre' => 'INTI'
        ]);
        marca::create([
            'nombre' => 'INQUIBOL'
        ]);
        marca::create([
            'nombre' => 'SANDOZ'
        ]);
        marca::create([
            'nombre' => 'CINFA'
        ]);
        marca::create([
            'nombre' => 'GSK'
        ]);
        marca::create([
            'nombre' => 'FARMINDUSTRIA'
        ]);
        marca::create([
            'nombre' => 'SUIPHAR'
        ]);
    }
}
