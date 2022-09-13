<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Venda;

class PagamentosController extends Controller
{
    //
    public function vendas(){
        $vendas = Venda::all();
        return view("painel.pagamentos.vendas", ["vendas" => $vendas]);
    }
}
