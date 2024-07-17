<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('books')->insert([
            ['title' => 'The Way of Kings', 'isbn' => '9781448792757'],
            ['title' => 'Mistborn: The Final Empire', 'isbn' => '9780575089914'],
        ]);
    }
}
