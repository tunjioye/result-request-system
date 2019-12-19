<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Requester;
use Faker\Generator as Faker;

$factory->define(Requester::class, function (Faker $faker) {
    return [
        'requester_type' => $faker->randomElement(['UNIVERSITY', 'COMPANY']),
        'requester_name' => $faker->company,
        'requester_address' => $faker->firstName,
        'contact_name' => $faker->name,
        'contact_role' => $faker->jobTitle,
        'contact_email' => $faker->unique()->safeEmail,
        'contact_number' => $faker->unique()->e164PhoneNumber
    ];
});
