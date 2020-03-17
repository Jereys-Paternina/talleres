<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Models\repuesto::class, function (Faker $faker) {
    return [
        
        'nombre'=>$faker->randomElement(['parlante', 'microfono', 'bateria', 'display', 'tarjeta', 'camara']),
        'referencia'=>$faker->randomElement(['original', 'universal']),
        'marca_repuesto'=>$faker->randomElement(['chn', 'usa', 'mex', 'kor']),
        'celular_id'=>function(){
            return factory(App\Models\celular::class)->create()->id;
        }
    ];
});
