<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; //Librería para el query builder

class TareasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Poner lo que nosostros queremos insertar
        DB::table('tareas')->insert([
            'tarea' => 'Ejemplo de tarea',
            'descripcion' => 'Ejemplo de descripcion',
            'categoria' => 'Escuela',
            'created_at' => now(),
            'updated_at' => now(),            
        ]);
    }
}
