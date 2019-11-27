<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Biography;
use Faker\Generator as Faker;

$factory->define(Biography::class, function (Faker $faker) {
$path=storage_path('app/public/cv');
$gender = $faker->randomElement(['M', 'F']);
    return [
    'user_id'=> rand(1,10), //FK de users.;
    'first_name'=>$faker->firstName($gender),
    'last_name'=>$faker->lastName,
    'genre'=>$faker->randomElement([0, 1]),
    'birth_date'=>$faker->date('Y-m-d'),
    'address'=>$faker->streetAddress,
    'city'=>$faker->city,
    'studies'=>$faker->word(),
    'degree'=>$faker->word(),
    'file_cv'=>$faker->image($path, 100, 100, 'technics', false)

        //
    ];
});
