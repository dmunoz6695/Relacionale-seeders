<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContinenteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('continentes')->insert([
            'nombre' => 'Ámerica',
            'descripcion' => 'Continente Americano'
        ]);
    }

    }

