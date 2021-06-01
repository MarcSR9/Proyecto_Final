<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;

class EmpresasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('empresas')->insert([
            'nif' => '12345A',
            'empresa' => 'Stormlight',
            'web' => 'www.stormlight.com',
            'descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In id facilisis lorem. Aenean at neque nec lacus aliquet congue at a tortor. Aenean non dignissim est. Duis sodales enim a diam egestas, eget ornare felis ullamcorper. Sed sed odio a metus dapibus consectetur. Phasellus ut elementum est, eu ultricies lacus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Fusce condimentum ultricies risus. Etiam pellentesque volutpat ante. Vivamus nec velit eu odio posuere consequat.',
            'localizacion' => 'Barcelona, España',
            'telefono' => '123456789',
            'email' => 'contact@stormlight.com',
            'sector' => 'Energias renovables',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('empresas')->insert([
            'nif' => '12345B',
            'empresa' => 'Pachamama',
            'web' => 'www.pachamama.com',
            'descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In id facilisis lorem. Aenean at neque nec lacus aliquet congue at a tortor. Aenean non dignissim est. Duis sodales enim a diam egestas, eget ornare felis ullamcorper. Sed sed odio a metus dapibus consectetur. Phasellus ut elementum est, eu ultricies lacus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Fusce condimentum ultricies risus. Etiam pellentesque volutpat ante. Vivamus nec velit eu odio posuere consequat.',
            'localizacion' => 'Kuwaq Yaku, Perú',
            'telefono' => '123456789',
            'email' => 'contact@pachamama.com',
            'sector' => 'Indústria farmacéutica',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
