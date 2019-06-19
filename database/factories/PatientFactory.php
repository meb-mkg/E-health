<?php

use Faker\Generator as Faker;

$factory->define(App\Patient::class, function (Faker $faker) {
    return [
        'username' => $faker->username,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'phone' => $faker->unique()->safePhone,
        'address' => $faker->address,
        'sex' => $faker->sex,
        'birth_date' => $faker->dob,
        'blood_group' => $faker->bg,
        'remember_token' => Str::random(10),
    ];
});
