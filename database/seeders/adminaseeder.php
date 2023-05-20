<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class adminaseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('admins')->insert([
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password'),
            'role'=>'admin',
        ]);DB::table('admins')->insert([
            'email' => 'user@gmail.com',
            'password' => Hash::make('password'),
            'role'=>'admin',
        ]);
    }
}
