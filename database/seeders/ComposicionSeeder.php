<?php

namespace Database\Seeders;

use App\Models\Composicion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComposicionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Composicion::create([
            'nombre' => 'Aciclovir',
            'gramos' => '5',
        ]);
        Composicion::create([
            'nombre' => 'Hidrocortisona',
            'gramos' => '1',
        ]);
        Composicion::create([
            'nombre' => 'Clobetasol',
            'gramos' => '0.05',
        ]);
        Composicion::create([
            'nombre' => 'Betametasona dipropionato',
            'gramos' => '0.05',
        ]);
        Composicion::create([
            'nombre' => 'Gentamicina',
            'gramos' => '0.1',
        ]);
        Composicion::create([
            'nombre' => 'Clotrimazol',
            'gramos' => '1',
        ]);
        Composicion::create([
            'nombre' => 'Ketoconazol',
            'gramos' => '2',
        ]);
    }
}
