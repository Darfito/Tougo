<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(
            ['firstname' => 'Admin', 
            'lastname' =>'Tougo',
            'isAdmin'=>true,
            'email'=>'admin@gmail.com',
            'notelp'=> '082111633060',
            'password'=> Hash::make('Admin123'),
        ]);
    }
}
