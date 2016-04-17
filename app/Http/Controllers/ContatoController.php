<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ContatoController extends Controller
{
    public function getContatos() {
    	// echo 'aquiC';
    	return [
    		['nome' => "Cloves Jose",'telefone'=> '+5511960467095'],
    		['nome' => "Jeferson Guedes",'telefone'=> '+5511980215833'],
    		['nome' => "Gilvania de Andrade",'telefone' => '+5511960467095']
    	];
    }
}
