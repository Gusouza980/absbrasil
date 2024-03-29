<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Noticia;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;
use App\Models\Configuracao;

class NoticiasController extends Controller
{
    //

    public function consultar(){
        $noticias = Noticia::all();
        return view("painel.noticias.consultar", ["noticias" => $noticias]);
    }
    
    public function cadastro(){
        return view("painel.noticias.cadastro");
    }

    public function cadastrar(Request $request){
        $request->validate([
            'titulo' => 'unique:noticias,titulo',
        ]);

        $noticia = new Noticia;
        $noticia->usuario_id = session()->get("usuario")["id"];
        $noticia->titulo = $request->titulo;
        $noticia->subtitulo = $request->subtitulo;
        $noticia->autor = $request->autor;
        $noticia->publicacao = $request->publicacao;
        $noticia->fonte = $request->fonte;
        $noticia->resumo = $request->resumo;
        $noticia->conteudo = $request->conteudo;
        $noticia->slug = Str::slug($noticia->titulo);
        $noticia->categoria_id = $request->categoria_id;
        
        if($request->file("preview")){
            $noticia->preview = $request->file('preview')->store(
                'site/imagens/noticias/' . Str::slug($noticia->titulo), 'local'
            );
        }

        if($request->file("banner")){
            $noticia->banner = $request->file('banner')->store(
                'site/imagens/noticias/' . Str::slug($noticia->titulo), 'local'
            );
        }

        $noticia->save();
        
        foreach($request->tags as $tag){
            $noticia->tags()->attach($tag);
        }   

        foreach($request->hashtags as $hashtag){
            $noticia->hashtags()->attach($hashtag);
        }  
        
        Log::channel('noticias')->info('<b>CADASTRANDO NOTICIA</b>: O usuario <b>' . session()->get("usuario")["usuario"] . '</b> cadastrou a noticia <b>' . $noticia->titulo . '</b>');
        toastr()->success("Notícia salva com sucesso!");

        return redirect()->route("painel.noticias");

    }

    public function editar(Noticia $noticia){
        return view("painel.noticias.editar", ["noticia" => $noticia]);
    }

    public function salvar(Request $request, Noticia $noticia){
        // $request->validate([
        //     'titulo' => 'unique:noticias,titulo,'.$noticia->id,
        // ]);

        $old = $noticia->getOriginal();

        $noticia->titulo = $request->titulo;
        $noticia->subtitulo = $request->subtitulo;
        $noticia->autor = $request->autor;
        $noticia->publicacao = $request->publicacao;
        $noticia->fonte = $request->fonte;
        $noticia->resumo = $request->resumo;
        $noticia->conteudo = $request->conteudo;
        $noticia->slug = Str::slug($noticia->titulo);
        $noticia->categoria_id = $request->categoria_id;

        if($request->file("preview")){
            Storage::delete($noticia->preview);
            $noticia->preview = $request->file('preview')->store(
                'site/imagens/noticias/' . Str::slug($noticia->titulo), 'local'
            );
        }

        if($request->file("banner")){
            Storage::delete($noticia->banner);
            $noticia->banner = $request->file('banner')->store(
                'site/imagens/noticias/' . Str::slug($noticia->titulo), 'local'
            );
        }

        $noticia->save();
        
        foreach($noticia->getChanges() as $campo => $valor){
            if(!in_array($campo, ["updated_at", "slug"])){
                Log::channel('noticias')->info('<b>EDITANDO NOTICIA #'.$noticia->id.'</b>: O usuario <b>' . session()->get("usuario")["usuario"] . '</b> alterou o valor do campo <b>' . $campo . '</b> de <b>' . $old[$campo] . '</b> para <b>' . $valor . '</b>');
            }
        }

        $noticia->tags()->detach();
        foreach($request->tags as $tag){
            $noticia->tags()->attach($tag);
        }

        $noticia->hashtags()->detach();
        foreach($request->hashtags as $hashtag){
            $noticia->hashtags()->attach($hashtag);
        }  

        toastr()->success("Notícia salva com sucesso!");

        return redirect()->route("painel.noticias");
    }

    public function deletar(Noticia $noticia){
        Storage::disk('public')->delete($noticia->preview);
        $noticia->tags()->detach();
        $noticia->delete();
        toastr()->success("Notícia removida com sucesso!");

        return redirect()->route("painel.noticias");
    }

    public function publicar(Noticia $noticia){
        if($noticia->publicada){
            $noticia->publicada = false;
        }else{
            $noticia->publicada = true;
        }
        $noticia->save();
        return redirect()->back();
    }

    public function preview(Noticia $noticia){
        $configuracoes = Configuracao::first();
        return view("painel.noticias.preview", ["noticia" => $noticia, "configuracoes" => $configuracoes]);
    }

    public function visitas(Noticia $noticia){
        return view("painel.noticias.leads", ['noticia' => $noticia]);
    }
}
