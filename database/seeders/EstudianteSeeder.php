<?php

namespace Database\Seeders;

use App\Models\Estudiante;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EstudianteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Estudiante::create([
            'codeu'=>'201810400',
            'name'=>'Lino Alex Huamanvilca Huaylla',
            'edad'=>'23',
            'cicloacademico'=>'V ciclo',

        ]);
    }
}
