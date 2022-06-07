<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class TodosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $useradmin=User::create([
            'name'=>'admin',
            'email'=>'admin@gmail.com',
            'password'=> Hash::make('admin'),
            'fullacces'=> 'yes',
            'codigo'=>'adm1',
        ]);
        $user=User::create([
            'name'=>'usuario',
            'email'=>'user@gmail.com',
            'password'=> Hash::make('usuario'),
            'fullacces'=> 'no',
            'codigo'=>'casa1',
        ]);
    }
}
