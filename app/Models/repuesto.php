<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class repuesto extends Model
{
    protected $fillable=[
        'nombre', 'referencia', 'marca_respuesto'
    ];

    protected $hidden=[
        'id', 'celular_id', 'updated_at', 'created_at'
    ];
    
    function celular(){
        return $this->belongsTo('App\Models\celular');
    }

    public function getModeloAttribute(){
        return $this->celular;
    }

    protected $append=[
        'modelo',
    ];

}
