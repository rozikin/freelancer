<?php

namespace Database\Seeders;

use App\Models\DetailUser;
use Illuminate\Database\Seeder;
use App\Models\User;  

class DetailUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $detail_user = [
            [
                'user_id' => 1,
                'photo' => '',
                'role' => 'website developer',
                'contact_number' => '',
                'biography' => '',
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
            [
                'user_id' => 2,
                'photo' => '',
                'role' => 'UI Designier',
                'contact_number' => '',
                'biography' => '',
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ], 
        ];

        DetailUser::insert($detail_user);
    }
}