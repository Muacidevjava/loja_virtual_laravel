<?php

namespace App\Http\Controllers\Estoque;

use App\Http\Controllers\Controller;
use App\Models\Saida;
use Illuminate\Http\Request;

class SaidaController extends Controller
{
    public function index(){
        $dados["lista"]     = Saida::get();
        $dados["entradaJs"] = true;
        return view("Estoque.Saida.Create", $dados);
    }
}
