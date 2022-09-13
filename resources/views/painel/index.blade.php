@extends('painel.template.main')


@section('conteudo')
<div class="row">
    <div class="col-md-3">
        <div class="card mini-stats-wid">
            <div class="card-body">
                <div class="media">
                    <div class="media-body">
                        <p class="text-muted fw-medium">Notícias Publicadas</p>
                        <h4 class="mb-0">
                            {{\App\Models\Noticia::where("publicada", true)->count()}}
                        </h4>
                        {{--  <h5 class="mt-3">{{$maior_visitas}} visitas</h5>  --}}
                    </div>

                    <div class="mini-stat-icon avatar-sm rounded-circle bg-primary align-self-center">
                        <span class="avatar-title">
                            <i class="mdi mdi-newspaper-variant-multiple font-size-24"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card mini-stats-wid">
            <div class="card-body">
                <div class="media">
                    <div class="media-body">
                        <p class="text-muted fw-medium">Visitas em Notícias</p>
                        <h4 class="mb-0">
                            {{\App\Models\Visitas::count()}}
                        </h4>
                        {{--  <h5 class="mt-3">{{$maior_visitas}} visitas</h5>  --}}
                    </div>

                    <div class="mini-stat-icon avatar-sm rounded-circle bg-primary align-self-center">
                        <span class="avatar-title">
                            <i class="bx bx-user font-size-24"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card mini-stats-wid">
            <div class="card-body">
                <div class="media">
                    <div class="media-body">
                        <p class="text-muted fw-medium">Mensagens Recebidas</p>
                        <h4 class="mb-0">
                            {{\App\Models\Mensagem::count()}}
                        </h4>
                        {{--  <h5 class="mt-3">{{$maior_visitas}} visitas</h5>  --}}
                    </div>

                    <div class="mini-stat-icon avatar-sm rounded-circle bg-primary align-self-center">
                        <span class="avatar-title">
                            <i class="bx bx-message font-size-24"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card mini-stats-wid">
            <div class="card-body">
                <div class="media">
                    <div class="media-body">
                        @php
                            $noticia = \App\Models\Noticia::orderBy("visualizacoes", "DESC")->first();
                        @endphp
                        <p class="text-muted fw-medium">Noticia mais Visitada</p>
                        @if($noticia)
                            <h5 class="mb-0">
                                <a href="{{route('painel.noticia.editar', ['noticia' => $noticia])}}">#{{$noticia->id}}</a> - {{$noticia->visualizacoes}} Visitas
                            </h5>
                        @endif
                        {{--  <h5 class="mt-3">{{$maior_visitas}} visitas</h5>  --}}
                    </div>

                    <div class="mini-stat-icon avatar-sm rounded-circle bg-primary align-self-center">
                        <span class="avatar-title">
                            <i class="bx bx-message font-size-24"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection