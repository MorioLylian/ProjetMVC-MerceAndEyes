<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('produit')->insert([
            'name' => Str::random(15),
            'image' => Str::random(50),
            'categorie_id' => Int::random(5),
            'price' => Int::random(2),
            'password' => bcrypt('password'),
        ]);
    }
}