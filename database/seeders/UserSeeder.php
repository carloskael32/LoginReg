<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Psy\Util\Str;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $useradmin=User::create([

            'nombre1' =>'carlos',
            'nombre2' => 'alberto',
            'apellido1' => 'mamani',
            'apellido2' => 'rondo',
            'name'=> 'cmamani',
            'password'=> Hash::make('admin'),
      
       
        ]);
    }
}
