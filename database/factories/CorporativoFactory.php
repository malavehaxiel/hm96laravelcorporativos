<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use App\Models\Corporativo;
use Faker\Generator as Faker;


$factory->define(Corporativo::class, function (Faker $faker) {
    return [
        'S_NombreCorto' => $faker->word,
        'S_NombreCompleto' => $faker->company,
        'S_LogoUrl' => $faker->imageUrl,
        'S_DBName' => $faker->domainWord,
        'S_DBUsuario' => $faker->userName,
        'S_DBPassword' => $faker->password,
        'S_SystemUrl' => $faker->url,
        'tw_usuarios_id' => $faker->numberBetween(1, User::count()),
    ];
});