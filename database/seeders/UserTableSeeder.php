<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;                                 

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
        [
            'name' => 'rozi',
            'email' => 'rozi@gmail.com',
            'password' => Hash::make('123'),
            'remember_token' => NULL,
            'created_at' => date('Y-m-d h:i:s'),
            'updated_at' => date('Y-m-d h:i:s'),
        ],
        [
            'name' => 'lano',          
            'email' => 'lano@gmail.com',
            'password' => Hash::make('123'),
            'remember_token' => NULL,
            'created_at' => date('Y-m-d h:i:s'),
            'updated_at' => date('Y-m-d h:i:s'),
        ], 
    ];

    User::insert($users);
    }
}