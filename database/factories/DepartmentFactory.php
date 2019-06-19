<?php

use Faker\Generator as Faker;

$factory->define(App\Department::class, function (Faker $faker) {
	return [
		'name' => $faker->name,
		'description' => $faker->desc,
	];
});
