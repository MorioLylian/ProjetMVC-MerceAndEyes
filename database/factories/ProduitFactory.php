<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;


$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->unique->name,
        'image' => $faker->image,
        'categorie_id' => random_int(\DB::table('categorie')->min('id'), \DB::table('categorie')->max('id')),
        'price' => $faker->int,
        'remember_token' => Str::random(10),
    ];
});
