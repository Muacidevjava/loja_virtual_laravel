<?php

namespace App\Http\Controllers\Estoque;

use App\Http\Controllers\Controller;
use App\Models\Entrada;
use Illuminate\Http\Request;

class EntradaController extends Controller
{
    public function index(){
        $dados["lista"]     = Entrada::get();
        $dados["entradaJs"] = true;
        return view("Estoque.Entrada.Create", $dados);
    }

}
