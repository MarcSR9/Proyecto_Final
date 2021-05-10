<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'dni' => '12345678A',
            'nombre' => 'Marc',
            'apellidos' => 'Santolaria Rodriguez',
            'fecha_nacimiento' => Carbon::now()->format('Y-m-d H:i:s'),
            'telefono' => '123456789',
            'email' => 'marc.sanro@gmail.com',
            'password' => Hash::make('password'),
            'estudios' => 'DAW',
            'experiencia' => 'Desarrollador de aplicaciones web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('users')->insert([
            'dni' => '87654321A',
            'nombre' => 'Marc',
            'apellidos' => 'Alvarez',
            'fecha_nacimiento' => Carbon::now()->format('Y-m-d H:i:s'),
            'telefono' => '987654321',
            'email' => 'marc.alvarez@gmail.com',
            'password' => Hash::make('password'),
            'estudios' => 'DAW',
            'experiencia' => 'Desarrollador de aplicaciones web',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
