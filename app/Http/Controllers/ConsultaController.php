<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\celular;
use App\Models\repuesto;
class ConsultaController extends Controller
{
    function index(){
        $celular=celular::find('123');
        $celular2=$celular->marca_modelo;
        return $celular2;
    }
    function index2(){
        $repuesto=repuesto::find('1');
        $repuesto2=$repuesto->modelo;
        return $repuesto2;
    }
}
