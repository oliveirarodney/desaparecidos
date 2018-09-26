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

$factory->define(App\Comentario::class, function (Faker $faker) {
    return [
        'comentario' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
        'desaparecido_id' => '1',
        'usuario_id' => '1',
    ];
});
