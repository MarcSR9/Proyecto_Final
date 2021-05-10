<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class OfertasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ofertas')->insert([
            'nif' => 'empresa1',
            'descripcion' => 'Desarrollador PHP',
            'localizacion' => 'Barcelona',
            'sueldo' => '25.000',
            'requisitos' => 'Estudios mínimos: CFGS DAM/DAW',
            'sector' => 'Informática',
            'inscritos' => '5',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('ofertas')->insert([
            'nif' => 'empresa1',
            'descripcion' => 'Desarrollador Java',
            'localizacion' => 'Barcelona',
            'sueldo' => '28.000',
            'requisitos' => 'Estudios mínimos: CFGS DAM/DAW',
            'sector' => 'Informática',
            'inscritos' => '18',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

    }
}
