<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Facepic;
use Faker\Generator as Faker;

$factory->define(Facepic::class, function (Faker $faker) {
	$date_time = $faker->date . ' ' . $faker->time;
	$type_name = rand(1,4);
	$pic_url = '/img/img_'.rand(1,10).'.jpg';
    return [
        'online'    => 1,
        'type_name' =>$type_name,
        'pic_url'	=>$pic_url,
        'created_at' => $date_time,
        'updated_at' => $date_time,
    ];
});
