<?php

use Faker\Generator as Faker;

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

$factory->define(App\Desaparecido::class, function (Faker $faker) {
    return [
        'nome' => $faker->name,
        'datanasc' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'dataultimo' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'foto' => $faker->image('public/storage/images',400,300, null, false),
        'estadodes' => 'São Paulo',
        'cidadedes' => 'Campinas',
        'endvistoultimo' => $faker->streetAddress,
        'caracteristicasfis' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
        'vestimenta' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
        'usuario_id' => '1',
    ];
});
