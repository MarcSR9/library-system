<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LoansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('loans')->insert([
            ['user_id' => 1, 'book_id' => 1],
            ['user_id' => 2, 'book_id' => 2],
        ]);
    }
}
