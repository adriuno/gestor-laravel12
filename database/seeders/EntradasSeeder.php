<?php

namespace Database\Seeders;

use App\Models\Entrada;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EntradasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // Crear registros con FACTORIES
        Entrada::factory(25)->create();

    



        // Crear registros con SEEDER
        /*
        Entrada::create([
            'user_id' => 1,
            'titulo' => 'entrada 1',
            'imagen' => 'nadaa',
            'tag' => 'tag 1',
            'contenido' => 'contenido de la entrada 1',
        ]);

        Entrada::create([
            'user_id' => 1,
            'titulo' => 'entrada 2',
            'imagen' => 'nadaa',
            'tag' => 'tag 2',
            'contenido' => 'contenido de la entrada 2',
        ]);

    */

    }
}
