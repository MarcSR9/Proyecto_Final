<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class NoticiasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('noticias')->insert([
            'autor' => '12345A',
            'titulo' => 'Los 10 trabajos mejor pagados de este año',
            'descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In id facilisis lorem. Aenean at neque nec lacus aliquet congue at a tortor. Aenean non dignissim est. Duis sodales enim a diam egestas, eget ornare felis ullamcorper. Sed sed odio a metus dapibus consectetur. Phasellus ut elementum est, eu ultricies lacus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Fusce condimentum ultricies risus. Etiam pellentesque volutpat ante. Vivamus nec velit eu odio posuere consequat.',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('noticias')->insert([
            'autor' => '12345A',
            'titulo' => 'Aprende Python con uno de nuestros cursos online',
            'descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In id facilisis lorem. Aenean at neque nec lacus aliquet congue at a tortor. Aenean non dignissim est. Duis sodales enim a diam egestas, eget ornare felis ullamcorper. Sed sed odio a metus dapibus consectetur. Phasellus ut elementum est, eu ultricies lacus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Fusce condimentum ultricies risus. Etiam pellentesque volutpat ante. Vivamus nec velit eu odio posuere consequat.',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('noticias')->insert([
            'autor' => '12345A',
            'titulo' => 'Las 50 mejores empresas para trabajar en España',
            'descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In id facilisis lorem. Aenean at neque nec lacus aliquet congue at a tortor. Aenean non dignissim est. Duis sodales enim a diam egestas, eget ornare felis ullamcorper. Sed sed odio a metus dapibus consectetur. Phasellus ut elementum est, eu ultricies lacus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Fusce condimentum ultricies risus. Etiam pellentesque volutpat ante. Vivamus nec velit eu odio posuere consequat.',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('noticias')->insert([
            'autor' => '12345A',
            'titulo' => 'Sabes cuáles son los puestos con menos competencia?',
            'descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In id facilisis lorem. Aenean at neque nec lacus aliquet congue at a tortor. Aenean non dignissim est. Duis sodales enim a diam egestas, eget ornare felis ullamcorper. Sed sed odio a metus dapibus consectetur. Phasellus ut elementum est, eu ultricies lacus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Fusce condimentum ultricies risus. Etiam pellentesque volutpat ante. Vivamus nec velit eu odio posuere consequat.',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('noticias')->insert([
            'autor' => '12345A',
            'titulo' => 'Dónde hay más empleo en España?',
            'descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In id facilisis lorem. Aenean at neque nec lacus aliquet congue at a tortor. Aenean non dignissim est. Duis sodales enim a diam egestas, eget ornare felis ullamcorper. Sed sed odio a metus dapibus consectetur. Phasellus ut elementum est, eu ultricies lacus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Fusce condimentum ultricies risus. Etiam pellentesque volutpat ante. Vivamus nec velit eu odio posuere consequat.',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('noticias')->insert([
            'autor' => '12345A',
            'titulo' => 'Conviértete en un expero en Machine Learning trabajando con nosotros!',
            'descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In id facilisis lorem. Aenean at neque nec lacus aliquet congue at a tortor. Aenean non dignissim est. Duis sodales enim a diam egestas, eget ornare felis ullamcorper. Sed sed odio a metus dapibus consectetur. Phasellus ut elementum est, eu ultricies lacus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Fusce condimentum ultricies risus. Etiam pellentesque volutpat ante. Vivamus nec velit eu odio posuere consequat.',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
