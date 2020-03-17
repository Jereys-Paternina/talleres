<?php

use Illuminate\Database\Seeder;
use App\Models\celular;
use App\Models\repuesto;

class CelularSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //punto 1
        App\Models\celular::Create([
            'marca_celular' => 'sansung',
            'modelo_celular' => 'a30',
            'descripcion' =>[
                'tipo'=> 'bueno',
            ],
        ]);    
        

        //punto 2
        factory(App\Models\celular::class,1)->create();
        factory(App\Models\repuesto::class,1)->create();

        //punto 3
        $celulares=factory(App\Models\celular::class,1)->create()
        ->each(function($celular){
            $celular->repuesto()->save(factory(App\Models\repuesto::class)->make());
        });
        
    }
}
