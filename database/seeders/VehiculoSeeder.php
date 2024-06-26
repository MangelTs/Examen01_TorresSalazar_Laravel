<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Vehiculo;
use Illuminate\Support\Str;

class VehiculoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 100; $i++){
            Vehiculo::create([
                'placa' => 'vehiculo' . Str::random(5),
                'modelo' => 'Descripcion del modelo de auto ' . $i,
                'propietario' => 'Propietario ' . $i,
                'activo' => rand(0, 1) == 1 ? true : false,
            ]);
        }
    }
}
