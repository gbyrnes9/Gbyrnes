<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/



$factory->define(App\Quote::class, function ($faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'phone' => str_random(10),
        'business_type' => 6,
        'sell_online' => 1,
        'company_size' => str_random(10),
        'message' => str_random(1000),

    ];});

$factory->define(App\Contact::class, function ($faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'phone' => str_random(10),
        'message' => str_random(10),

    ];
});
