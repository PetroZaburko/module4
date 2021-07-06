<?php

use App\User;
use App\UserInfo;
use App\UserLinks;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\Hash;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    return [
        'email' => $faker->unique()->safeEmail,
        'password' => Hash::make('asdfg001'),
        'is_admin' => rand(0, 1),
        'status_id' => rand(1, 3),
        'remember_token' => str_random(60)
    ];
});

$factory->define(UserLinks::class, function (Faker $faker) {
    return [
        'vk' => $faker->userName,
        'telegram' => $faker->userName,
        'instagram' => $faker->userName
    ];
});

$factory->define(UserInfo::class, function (Faker $faker) {
    return [
        'name' => $faker->name(),
        'image' => $faker->image('public/img/demo/avatars', 1280, 1024, 'people', false),
        'company' => $faker->company,
        'telephone' => $faker->e164PhoneNumber,
        'address' => $faker->address
    ];
});

$factory->afterCreating(User::class, function ($user, $faker) {
    $user->info()->save(factory(UserInfo::class)->create([
        'user_id' => $user->id
    ]));
    $user->links()->save(factory(UserLinks::class)->create([
        'user_id' =>$user->id
    ]));
});
