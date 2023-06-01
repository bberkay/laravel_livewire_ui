<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('posts')->insert([
            'user_id' => 1,
            'title' => "Nosferatu, eine Symphonie des Grauens",
            'description' => "Vampire Count Orlok expresses interest in a new residence and real estate agent Hutter is wife.",
            'author' => "F.W. Murnau",
            'type' => "Horror",
            'post_type' => "movie",
            'image' => "nosferatu.png",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('posts')->insert([
            'user_id' => 1,
            'title' => "The Seventh Seal",
            'description' => "A knight returning to Sweden after the Crusades seeks answers about life, death, and the existence of God as he plays chess against the Grim Reaper",
            'author' => "Ingmar Bergman",
            'type' => "Dram",
            'post_type' => "movie",
            'image' => "seventh.png",
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
