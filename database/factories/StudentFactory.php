<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Student;
use Faker\Generator as Faker;

$factory->define(Student::class, function (Faker $faker) {
    return [
        'school_id' => $faker->numberBetween(1, 10),
        'matric_number' => strtoupper(Str::random(8)),
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'graduation_year' => $faker->numberBetween(1999, 2019),
        'gender' => $faker->randomElement(['M', 'F']),
        'email_address' => $faker->unique()->safeEmail,
        'phone_number' => $faker->unique()->e164PhoneNumber
    ];
});
