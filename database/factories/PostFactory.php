<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    $posted =  $faker->dateTimeThisDecade();
    return [
        'title' => $faker->words(8, true),
        'content' => $faker->paragraph,
        'created_at' => $posted,
        'updated_at' => $posted
    ];
});
