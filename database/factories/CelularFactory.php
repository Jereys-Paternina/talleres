<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Models\celular::class, function (Faker $faker) {
    return [
        'marca_celular'=>$faker->randomElement(['sansung', 'huawei', 'asus', 'alcatel', 'nokia', 'blackberry', 'lg']),
        'modelo_celular'=>$faker->randomElement(['a30', 'b10', 'c40', 'e23', 'z10', 'v92']),
        'descripcion'=>[
            'tipo'=>$faker->randomElement(['bueno', 'alto', 'ultra', 'minimo', 'bajo', 'regular']),
        ],
    ];
});
/*'marca_celular'
'modelo_celular'
'descripcion' =>[
    'tipo'=>$faker-> randomElements('bueno', 'alto', 'ultra', 'minimo', 'bajo', 'regular'),
],*/