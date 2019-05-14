<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Notification;
use Faker\Generator as Faker;

$factory->define(Notification::class, function (Faker $faker) {
    return [
        'type' => $faker->word,
        'title' => $faker->word,
        'text' => $faker->sentence,
        'requirement' => $faker->sentence,
        'link' => $faker->url,
        'image' => $faker->url,
        'expires' => $faker->randomDigit,
    ];
});