<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Request;
use Faker\Generator as Faker;

$factory->define(Request::class, function (Faker $faker) {
    $status = $faker->randomElement(['PENDING', 'SUCCESS', 'REJECTED']);

    return [
        'requester_id' => factory(App\Requester::class),
        'school_id' => factory(App\School::class),
        'student_id' => factory(App\Student::class),
        'tracking_number' => $faker->md5,
        'year_received' => $faker->year,
        'result_type' => $faker->randomElement([
            'MSc DEGREE', 'BEd DEGREE', 'BSc DEGREE', 'BA DEGREE',
            'WAEC', 'NECO', 'NABTEB', 'WAEC GCE', 'NECO GCE'
        ]),
        'purpose' => $faker->text(120),
        'status' => $status,
        'reason' => ($status === 'REJECTED') ? $faker->text(120) : null
    ];
});
