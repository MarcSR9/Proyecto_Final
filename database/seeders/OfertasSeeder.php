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
            'empresa' => 'empresa1',
            'titulo' => 'Desarrollador PHP',
            'descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In id facilisis lorem. Aenean at neque nec lacus aliquet congue at a tortor. Aenean non dignissim est. Duis sodales enim a diam egestas, eget ornare felis ullamcorper. Sed sed odio a metus dapibus consectetur. Phasellus ut elementum est, eu ultricies lacus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Fusce condimentum ultricies risus. Etiam pellentesque volutpat ante. Vivamus nec velit eu odio posuere consequat.',
            'localizacion' => 'Barcelona',
            'sueldo' => '25.000',
            'requisitos' => 'Estudios mínimos: CFGS DAM/DAW',
            'sector' => 'Informática',
            'inscritos' => '5',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('ofertas')->insert([
            'empresa' => 'empresa1',
            'titulo' => 'Desarrollador Java',
            'descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In id facilisis lorem. Aenean at neque nec lacus aliquet congue at a tortor. Aenean non dignissim est. Duis sodales enim a diam egestas, eget ornare felis ullamcorper. Sed sed odio a metus dapibus consectetur. Phasellus ut elementum est, eu ultricies lacus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Fusce condimentum ultricies risus. Etiam pellentesque volutpat ante. Vivamus nec velit eu odio posuere consequat.',
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
