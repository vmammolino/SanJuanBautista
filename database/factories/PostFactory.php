<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
$path = storage_path('app/public/posteo');
    return [
      'title'=> $faker->sentence(3),
      'description'=>$faker->paragraph(3),
      'link'=>$faker->paragraph(3),
      'image'=>$faker->image($path, 100, 100, 'business', false),
      'type_id'=> rand(1,10),
      'user_id'=> rand(1,10) //FK de users.;


        //
    ];
});
