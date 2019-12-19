<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\RequestMessages;
use Faker\Generator as Faker;

$factory->define(RequestMessages::class, function (Faker $faker) {
    return [
        'request_id' => factory(App\Request::class),
        'result_id' => factory(App\Result::class),
        'message' => $faker->realText(150),
        'from' => $faker->safeEmail,
        'to' => $faker->safeEmail,
        'attachments' => null,
        'read_at' => (rand(0,1)) ? now() : null
    ];
});
