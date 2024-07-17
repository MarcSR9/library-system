<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('users')->insert([
            ['name' => 'Marc', 'surname' => 'Santolaria', 'email' => 'marc.santolaria@gmail.com'],
            ['name' => 'Marc', 'surname' => 'Rodriguez', 'email' => 'marc.rodriguez@gmail.com'],
        ]);
    }
}
