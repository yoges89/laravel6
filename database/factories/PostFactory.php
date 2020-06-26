<?php

/**
 * @file
 *
 * @var \Illuminate\Database\Eloquent\Factory $factory .*/

use App\Post;
use App\User;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
      'title' => $faker->sentence(),
      'user_id' => factory(User::class),
      'slug' => $faker->sentence(),
      'body' => $faker->paragraph(),
    ];
});
