<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class portfolioseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('portfolio_images')->insert([
            'image'=>'hero-carousel-5.jpg',
        ]);
        DB::table('portfolio_images')->insert([
            'image'=>'hero-carousel-5.jpg',
        ]); DB::table('portfolio_images')->insert([
            'image'=>'hero-carousel-5.jpg',
        ]); DB::table('portfolio_images')->insert([
            'image'=>'hero-carousel-5.jpg',
        ]); DB::table('portfolio_images')->insert([
            'image'=>'hero-carousel-5.jpg',
        ]); DB::table('portfolio_images')->insert([
            'image'=>'hero-carousel-5.jpg',
        ]); DB::table('portfolio_images')->insert([
            'image'=>'hero-carousel-5.jpg',
        ]); DB::table('portfolio_images')->insert([
            'image'=>'hero-carousel-5.jpg',
        ]); DB::table('portfolio_images')->insert([
            'image'=>'hero-carousel-5.jpg',
        ]); DB::table('portfolio_images')->insert([
            'image'=>'hero-carousel-5.jpg',
        ]); DB::table('portfolio_images')->insert([
            'image'=>'hero-carousel-5.jpg',
        ]); DB::table('portfolio_images')->insert([
            'image'=>'hero-carousel-5.jpg',
        ]);
    }
}
