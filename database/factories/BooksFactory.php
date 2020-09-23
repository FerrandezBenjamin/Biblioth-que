<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

namespace App\Models\books;

use App\Models\books;
use Faker\Generator as Faker;

$factory->define(books::class, function (Faker $faker) {
    return [
        'title' => $faker->name,
        'author' =>$faker->firstName,
        'image' =>$faker->iban(),
        'isbn' =>$faker->iban()
    ];
});
