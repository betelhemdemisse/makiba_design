<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class homeseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('home_images')->insert([
            'image'=>'hero-carousel-5.jpg',
        ]); 
        DB::table('home_images')->insert([
            'image'=>'hero-carousel-5.jpg',
        ]);
        DB::table('home_images')->insert([
            'image'=>'hero-carousel-5.jpg',
        ]); DB::table('home_images')->insert([
            'image'=>'hero-carousel-5.jpg',
        ]); DB::table('home_images')->insert([
            'image'=>'hero-carousel-5.jpg',
        ]); DB::table('home_images')->insert([
            'image'=>'hero-carousel-5.jpg',
        ]); DB::table('home_images')->insert([
            'image'=>'hero-carousel-5.jpg',
        ]); DB::table('home_images')->insert([
            'image'=>'hero-carousel-5.jpg',
        ]); DB::table('home_images')->insert([
            'image'=>'hero-carousel-5.jpg',
        ]);
        DB::table('home_images')->insert([
            'image'=>'hero-carousel-5.jpg',
        ]);DB::table('home_images')->insert([
            'image'=>'hero-carousel-5.jpg',
        ]);DB::table('home_images')->insert([
            'image'=>'hero-carousel-5.jpg',
        ]);
    }
}
