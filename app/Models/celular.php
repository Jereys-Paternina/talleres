<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class celular extends Model
{
    protected $fillable=[
        'marca_celular', 'modelo_celular', 'descripcion'
    ];

    protected $hidden=[
        'id', 'created_at', 'updated_at'
    ];

    function repuesto(){
        return $this-> hasMany('App\Models\repuesto');
    }

    protected $casts=[
        'descripcion'=>'array'
    ];

    public function getMarcaModeloAttribute(){
        return "{$this->marca_celular}-{$this->modelo_celular}";
    }

    public function setMarcaCelularAttribute($value){
        $this->attributes['marca_celular']=strtoupper($value);
    }

    protected $append=[
        'marca_modelo',
    ];

}
