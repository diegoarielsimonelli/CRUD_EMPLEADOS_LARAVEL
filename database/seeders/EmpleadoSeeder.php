<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Empleado;

class EmpleadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Empleado::insert([
            [
                'Nombre' => 'Juan',
                'Apellido' => 'Pérez',
                'Email' => 'juan.perez@example.com',
                'Edad' => 30,
                'Foto' => 'https://rickandmortyapi.com/api/character/avatar/698.jpeg',
            ],
            [
                'Nombre' => 'María',
                'Apellido' => 'García',
                'Email' => 'maria.garcia@example.com',
                'Edad' => 28,
                'Foto' => 'https://rickandmortyapi.com/api/character/avatar/17.jpeg',
            ],
            [
                'Nombre' => 'Carlos',
                'Apellido' => 'Lopez',
                'Email' => 'carlos.lopez@example.com',
                'Edad' => 35,
                'Foto' => 'https://rickandmortyapi.com/api/character/avatar/725.jpeg',
            ],
        ]);
    }
}
