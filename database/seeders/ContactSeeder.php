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
            'name' => "Berkay Kaya",
            'subject' => "Thank you for viewing the project",
            'email' => "berkaykayaforbusiness@outlook.com",
            'message' => "You can contact me at berkaykayaforbusiness@outlook.com",
            'answered' => false,
            'answer' => null,
            'answered_at' => null,
            'answerer' => null,
            'created_at' => now(),
        ]);
    }
}
