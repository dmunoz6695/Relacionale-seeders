<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('departamentos')->insert([
            'nombre' => 'Atlántico',
            'descripcion' => 'Departamento Atlántico'
        ]);

        DB::table('departamentos')->insert([
            'nombre' => 'Antioquia',
            'descripcion' => 'Departamento Antioquia'
        ]);

        DB::table('departamentos')->insert([
            'nombre' => 'Boyacá',
            'descripcion' => 'Departamento Boyacá'
        ]);

        DB::table('departamentos')->insert([
            'nombre' => 'Cundinamarca',
            'descripcion' => 'Departamento Cundinamarca'
        ]);
    }
}
