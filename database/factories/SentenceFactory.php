<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Sentence;
use Faker\Generator as Faker;

$factory->define(Sentence::class, function (Faker $faker) {
    $date_time = $faker->date . ' ' . $faker->time;
    $copy_num = rand(0,1000);
    $type = rand(1,3);
    return [
        'content'    => $faker->text(),
        'base_content'    => $faker->text(),
        'copy_num'	=>	$copy_num,
        'online'	=>	1,
        'type'		=>	$type,
        'created_at' => $date_time,
        'updated_at' => $date_time,
    ];
});
