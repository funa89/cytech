<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
            'user_name' => 'Funahashi Shiho',
            'email' => 'newfuna89@gmail.com',
            'password' => 'newfuna89',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d')

            ]
            ]);
    }
}
