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
            'descripcion' => '
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vulputate risus mattis sem imperdiet hendrerit. Mauris imperdiet luctus efficitur. Aenean vel nunc sit amet est dignissim congue. Maecenas sit amet lobortis nisi, scelerisque gravida mauris. Suspendisse nec quam commodo, porta dolor id, pharetra lorem. Suspendisse in velit condimentum, blandit ex a, finibus mi. Aenean porta pretium cursus.

                Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Cras consectetur lobortis lacus id viverra. Mauris eu faucibus turpis. Proin nec porta diam. Curabitur blandit risus a lorem laoreet dictum. Vivamus vitae felis urna. Etiam sollicitudin eget quam id ornare. Praesent eu cursus nibh. Morbi aliquet condimentum mollis. Nulla nisi purus, congue eu viverra a, bibendum nec nulla.

                Morbi bibendum tincidunt est, id suscipit diam. Etiam laoreet ante vel convallis dictum. Sed commodo dui quis viverra pharetra. Aenean fringilla facilisis sapien, id posuere sapien. Phasellus eget nibh lectus. Aliquam lacinia, orci non suscipit porttitor, enim lectus pretium nunc, et vestibulum ipsum justo sed arcu. Vestibulum a diam et turpis blandit pulvinar ut at erat. In sit amet eros a nisl laoreet eleifend nec eget nulla. Integer in erat turpis.

                Cras eros libero, tincidunt gravida laoreet a, ultrices eget felis. Sed non metus metus. Vestibulum ac libero eu eros eleifend ullamcorper. Etiam fermentum velit arcu, sit amet pharetra massa aliquet quis. Aenean scelerisque venenatis lectus vel fermentum. Curabitur condimentum sed enim convallis scelerisque. Nullam ornare venenatis lorem sit amet pulvinar. Ut nec laoreet sem, in interdum arcu. Phasellus in vestibulum libero. Suspendisse potenti. Aliquam eu volutpat orci.

                Suspendisse a dui maximus, rhoncus justo at, sagittis nulla. Curabitur non metus id eros gravida sollicitudin. Donec pulvinar feugiat nibh non viverra. In egestas feugiat diam, non fermentum justo interdum non. Curabitur ac venenatis lacus, id consequat urna. Pellentesque et ornare risus, id fermentum arcu. Nam vitae orci ut ligula tincidunt hendrerit. Vivamus eget feugiat mauris. Mauris ullamcorper fringilla eros, ut tristique ante. Phasellus tristique diam in mauris tincidunt, faucibus malesuada lectus molestie. In eget fermentum libero, eu accumsan ante. ',
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
