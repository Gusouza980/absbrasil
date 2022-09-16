<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InscricaoConcurso;

class InscricoesConcursoController extends Controller
{
    //

    public function consultar(){
        $inscricoes = InscricaoConcurso::orderBy("created_at", "DESC");
        return view("painel.concursos.inscricoes", ["inscricoes" => $inscricoes]);
    }
}
