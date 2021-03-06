<?php
/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Models\empreints;
use Faker\Generator as Faker;
$factory->define(empreints::class, function (Faker $faker) {
    $ids_users = \DB::table('users')->select('id')->get();
    $id_random_user = $faker->randomElement($ids_users)->id;
    $ids_books = \DB::table('books')->select('id')->get();
    $id_random_book = $faker->randomElement($ids_books)->id;
    return [
        'id_users' => $id_random_user,
        'id_books' => $id_random_book,
        'date_retour' => $faker->nullable(),
        'rented_at' => $faker->date(),
        'due_at'=> $faker->date(),
    ];
});