<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('contact')->insert([
            'name' => "Test42",
            'subject' => "Test Subject",
            'email' => "testforprojects42webio@gmail.com",
            'message' => "lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
            'answered' => false,
            'answer' => null,
            'answered_at' => null,
            'answerer' => null,
            'created_at' => now(),
        ]);
    }
}
