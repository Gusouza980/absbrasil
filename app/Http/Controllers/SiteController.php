<?php

namespace App\Http\Controllers;
use View;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Noticia;
use App\Models\Categoria;
use App\Models\Pagina;
use App\Models\Estadual;
use App\Models\Visitas;
use App\Models\DestaqueSuspenso;
use App\Models\Curso;
use App\Models\Aluno;
use App\Classes\Email;
use App\Models\InscricaoConcurso;

class SiteController extends Controller
{
    //
    public function __construct(){
        View::share('configuracoes', \App\Models\Configuracao::first());
    }

    public function index(){
        
        $pagina = Pagina::where("nome", "Home")->first();
        $destaques = Noticia::where("publicada", true)->orderBy("publicacao", "DESC")->take(4)->get();
        if(!session()->get("destaque")){
            $destaque_suspenso = DestaqueSuspenso::where([["inicio", "<=", date("Y-m-d H:i:s")], ["fim", ">=", date("Y-m-d H:i:s")]])->orderBy("created_at")->first();
            session()->put(["destaque" => true]);
            return view("site.index", ["pagina" => $pagina, "destaques" => $destaques, "destaque_suspenso" => $destaque_suspenso]);
        }else{
            return view("site.index", ["pagina" => $pagina, "destaques" => $destaques]);
        }
    }

    public function quem_somos(){
        return view("site.quem_somos");
    }

    public function cursos(){
        $cursos = Curso::where("ativo", true)->get();
        return view("site.cursos", ["cursos" => $cursos]);
    }

    public function curso($slug){
        $curso = Curso::where("slug", $slug)->first();
        $turma = $curso->turmas->where("ativo", true)->sortBy("data")->first();
        return view("site.curso", ["curso" => $curso, "turma" => $turma, "aba" => "detalhes"]);
    }
    public function instrutores($slug){
        $curso = Curso::where("slug", $slug)->first();
        $turma = $curso->turmas->where("ativo", true)->sortBy("data")->first();
        return view("site.curso", ["curso" => $curso, "turma" => $turma, "aba" => "instrutores"]);
    }
    public function local($slug){
        $curso = Curso::where("slug", $slug)->first();
        $turma = $curso->turmas->where("ativo", true)->sortBy("data")->first();
        return view("site.curso", ["curso" => $curso, "turma" => $turma, "aba" => "local"]);
    }
    public function programacao($slug){
        $curso = Curso::where("slug", $slug)->first();
        $turma = $curso->turmas->where("ativo", true)->sortBy("data")->first();
        return view("site.curso", ["curso" => $curso, "turma" => $turma, "aba" => "programacao"]);
    }

    public function contato(){
        return view("site.contato");
    }

    public function minhaConta(){
        return view("site.minha-conta");
    }

    public function associese(){
        return view("site.associe-se");
    }

    public function diretoria(){
        return view("site.diretoria");
    }

    public function minhaArea(){
        return view("site.minha-area");
    }
    public function minhaAreaCompras(){
        $aluno = Aluno::find(session()->get("aluno")["id"]);
        return view("site.minha-area-compras", ["aluno" => $aluno]);
    }
    public function minhaAreaDados(){
        return view("site.minha-area-dados");
    }
    public function minhaAreaMatricula(){
        return view("site.minha-area-matricula");
    }
    
    public function estaduais(){
        $estaduais = Estadual::all();
        return view("site.estaduais", ["estaduais" => $estaduais, "slug" => null]);
    }

    public function estaduais_filtro($slug){
        $estaduais = null;
        foreach(config("globals.regioes") as $key => $regiao){
            if(Str::slug($regiao) == $slug){
                $estaduais = Estadual::where("regiao", $key)->get();
                break;
            }
        }
        return view("site.estaduais", ["estaduais" => $estaduais, "slug" => $slug]);
    }

    public function estadual($slug){
        $estadual = Estadual::where("slug", $slug)->first();
        return view("site.estadual", ["estadual" => $estadual]);
    }

    public function sommelier(){
        return view("site.sommelier");
    }

    public function noticias($slug = null){
        if($slug){
            $categoria = Categoria::where("slug", $slug)->first();
            $noticias = $categoria->noticias->where("publicada", true)->sortByDesc("publicacao");
            $destaques = $categoria->noticias->where("publicada", true)->sortByDesc("publicacao")->take(3);

        }else{
            $noticias = Noticia::where("publicada", true)->orderBy("publicacao", "DESC")->get();
            $destaques = Noticia::where("publicada", true)->orderBy("publicacao", "DESC")->take(3)->get();
        }
        return view("site.noticias", ["noticias" => $noticias, "destaques" => $destaques]);
    }

    public function noticia($categoria, $noticia){
        $noticia = Noticia::where("slug", $noticia)->first();
        $noticia->visualizacoes += 1;
        $noticia->save();
        if(!empty($_SERVER['HTTP_CLIENT_IP'])){
            //ip from share internet
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        }elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
            //ip pass from proxy
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        }else{
            $ip = $_SERVER['REMOTE_ADDR'];
        }
    
        $estado = null;
        $cidade = null;
        $cep = null;
    
        $query = @unserialize(file_get_contents('http://ip-api.com/php/'.$ip));
    
        if($query && $query["status"] == "success"){
            $estado = $query["region"];
            $cidade = $query["city"];
            $cep = $query["zip"];
        }

        $visita = new Visitas;
        $visita->noticia_id = $noticia->id;
        $visita->ip = $ip;
        $visita->estado = $estado;
        $visita->cidade = $cidade;
        $visita->cep = $cep;

        $visita->save();
        return view("site.noticia", ["noticia" => $noticia]);
    }

	
    public function inscricao(){
        return view("site.inscricao");
    }

    public function inscricao_efetuar(Request $request){
        $nome = $request->nome;
        $email = $request->email;
        $mensagem = "<b>Inscrição para Concurso</b><br><br><b>Nome: </b>$nome<br><b>Email: </b>$email<br><b>Unidade: </b>" . config("unidades.inscricoes")[$request->abs]["nome"] . "<br><b>Momento da Inscrição: </b>" . date("d/m/Y H:i:s");
        if(Email::enviar($mensagem, "Inscrição em Concurso", config("unidades.inscricoes")[$request->abs]["email"], false)){
            $inscricao = new InscricaoConcurso;
            $inscricao->nome = $request->nome;
            $inscricao->email = $request->email;
            $inscricao->unidade = config("unidades.inscricoes")[$request->abs]["nome"];
            $inscricao->concurso = "Concurso Brasileiro de Sommeliers – Edição 2022";
            $inscricao->save();
            return redirect()->route("site.inscricao_pagamento");
        }else{
            session()->flash("erro", "Erro ao efetuar a inscrição. Tente novamente mais tarde");
            return redirect()->back();
        }
    }

    public function inscricao_pagamento(){
        return view("site.inscricao_pagamento");
    }


    public function recuperar_senha(){
        return view("site.recuperar_senha");
    }

}
