<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    
    public function run()
    {
        DB::table('users')->insert([
            'name' => Str::random(10),
            'password' => bcrypt('password'),
        ]);
    }
}