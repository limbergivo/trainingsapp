<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(PlayerInformation::class, function (Faker $faker , $playerPosition,$minutesPlayed,$gamesPlayed, $injury) {
    return [
        'name' => $faker->name,
        'last name' => $faker->unique()->safeEmail,
        'position' => $playerPosition,
        'minutes played' => $minutesPlayed,
        'games played' => $gamesPlayed,
        'injury' => $injury
    ];
});
