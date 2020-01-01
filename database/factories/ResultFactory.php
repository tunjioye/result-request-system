<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Result;
use Faker\Generator as Faker;

$factory->define(Result::class, function (Faker $faker) {
    return [
        'school_id' => factory(App\School::class),
        'student_id' => factory(App\Student::class),
        'result_type' => $faker->randomElement([
            'MSc DEGREE', 'BEd DEGREE', 'BSc DEGREE', 'BA DEGREE',
            'WAEC', 'NECO', 'NABTEB', 'WAEC GCE', 'NECO GCE'
        ]),
        'year_received' => $faker->year,
        'description' => $faker->text(120),
        'file' => $faker->file(public_path('/preuploads'), public_path('/uploads')),
        'status' => $faker->boolean
    ];
});
