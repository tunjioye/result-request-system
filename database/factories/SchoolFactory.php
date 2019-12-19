<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\School;
use Faker\Generator as Faker;

$factory->define(School::class, function (Faker $faker) {
    return [
        'school_name' => $faker->company,
        'school_address' => $faker->firstName,
        'contact_name' => $faker->name,
        'contact_role' => $faker->jobTitle,
        'contact_email' => $faker->unique()->safeEmail,
        'contact_number' => $faker->unique()->e164PhoneNumber
    ];
});
