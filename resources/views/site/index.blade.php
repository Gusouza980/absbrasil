@include('site.includes.head')
<body class="home" style="overflow:hidden;">
    @include('site.includes.bodyHeader', [
        "classe" => "brasil",
        "adicional" => '<h2>Seja um Sommelier</h2>
        <!--<p>Com nossos cursos online você poderá identificar o vinho pela safra e mostrar que saber de vinho é fundamental.</p>-->
        <!--<div class="nums">
            <a target="_blank" rel="noopener" title="Navegar curso" href="' . route('site.cursos') . '">
                <h3>01</h3>
                <p>Aguardem - Vem novidades! </p>
            </a>
            <a target="_blank" rel="noopener" title="Navegar curso" href="' . route('site.cursos') . '">
                <h3>02</h3>
                <p>Curso de Introdução em Coquetelaria - Online</p>
            </a>
            <a target="_blank" rel="noopener" title="Navegar curso" href="' . route('site.cursos') . '">
                <h3>01</h3>
                <p>Aguardem - Vem novidades!  On-line</p>
            </a>
        </div>-->
        <div class="curso">
            <img src="' . asset('site/img/curso1.jpg') . '" width="328" height="192px" alt="Imagem curso Header">
            <div style="display: flex; flex-direction: column;">
                <p>Aguardem - Vem novidades!  -</p>
                <h3>On-line</h3>
                <h4><!--10x <span>R$</span>550<span>,00</span>--> <span>R$ Aguardem!</span> </h4>
                <a href="' . route('site.minha-conta') . '">EM BREVE TURMAS</a>
                <div class="mt-3 d-flex align-items-center align-content-center justify-content-between">
                    <p><img src="' . asset('site/img/ico_alarme.svg') . '" width="20" height="20" alt="Ícone despertador">Em breve</p>
                    <p><img src="' . asset('site/img/ico_calendario.svg') . '" width="18" height="20" alt="Ícone calendário">Em breve</p>
                </div>
            </div>
        </div>'    
    ])
    <main class="main">
        <section id="agenda">
            <div class="maxSec">
                <img class="taca" src="{{ asset('site/img/tacas.svg') }}" width="439" height="199"
                    alt="Taças desenhadas em uma linha">
                <div class="intro">
                    <h2 class="traco">Confira nossa agenda para os próximos cursos</h2>
                    <!-- 						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nisi eget sed etiam diam. Et placerat sit placerat amet felis, pellentesque accumsan. Volutpat vel sapien amet, neque sed scelerisque arcu consequat. Facilisis et in lectus arcu dictum.</p> -->
                </div>

                <div class="cursos">
                    <div class="linha"></div>
                    <div class="meses">
                        <button class="mes">Junho</button>
                        <!--							<button class="mes">Março</button>
                        <button class="mes">Abril</button>-->
                    </div>
                    <div class="curso branco">
                        <img src="{{ asset('site/img/curso1.jpg') }}" width="328" height="192"
                            alt="Imagem curso Header">
                        <div style="display: flex; flex-direction: column;">
                            <p>Aguardem - Vem novidades!</p>
                            <h3>On-line</h3>
                            <h4>
                                <!--10x <span>R$</span>550<span>,00</span>--> <span>R$ Aguardem!</span>
                            </h4>
                            <a href="/minha-conta">EM BREVE TURMAS</a>
                            <div style=" class="d-flex align-items-center align-content-center justify-content-between"">
                                <p><img src="{{asset('site/img/ico_calendario.svg')}}" width="18" height="20" alt="Ícone calendário">Em
                                    breve</p>
                                <p><img src="{{asset('site/img/ico_alarme.svg')}}" width="20" height="20" alt="Ícone despertador">Em
                                    breve</p>
                            </div>
                        </div>
                    </div>
                    <div class="curso">
                        <img src="{{ asset('site/img/curso1.jpg') }}" width="328" height="192"
                            alt="Imagem curso Header">
                        <div style="display: flex; flex-direction: column;">
                            <p>Aguardem - Vem novidades!</p>
                            <h3>On-line</h3>
                            <h4>
                                <!--10x <span>R$</span>550<span>,00</span>--> <span>R$ Aguardem!</span>
                            </h4>
                            <a href="/minha-conta">EM BREVE TURMAS</a>
                            <div class="mt-3 d-flex align-items-center align-content-center justify-content-between">
                                <p><img src="{{ asset('site/img/ico_calendario.svg') }}" width="18" height="20"
                                        alt="Ícone calendário">Em breve</p>
                                <p><img src="{{ asset('site/img/ico_alarme.svg') }}" width="20" height="20"
                                        alt="Ícone despertador">Em breve</p>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="{{route('site.cursos')}}" class="btn">Ver agenda completa</a>
            </div>
        </section>
        <section id="quem-somos" class="fundo">
            <div class="grid">
                <div class="intro">
                    <h2 class="traco">A Associação Brasileira de Sommeliers</h2>
                    <p>A Associação Brasileira de Sommeliers é uma entidade sem fins lucrativos, que tem por objetivo a
                        difusão da cultura do vinho e de outras bebidas, bem como seu consumo responsável, por meio de
                        cursos dirigidos a amadores e profissionais e de inúmeras atividades culturais e sociais.</p>
                </div>
                <img src="{{ asset('site/img/quem-somos-mv.jpg') }}" width="298" height="408" alt="Moça vinhos">
                <div>
                    <div>
                        <h2 class="traco">Nossos Cursos</h2>
                        <p>A ABS-Brasil oferece ampla gama de cursos para profissionais e apreciadores do vinho e outras
                            bebidas.</p>
                        <a href="{{route('site.cursos')}}">Ver cursos</a>
                    </div>
                    <div>
                    </div>
        </section>
        <section id="blogHome" class="slider fundo">
            <div class="base">
                <div>
                    <div class="sliderPreCorpo" style="height:505px;">
                        <div class="gradeBlog sliderCorpo">
                            @if(isset($destaques[0]))
                                <div class="sliderItem">
                                    <a href="{{route('site.noticia', ['categoria' => $destaques[0]->categoria->slug, 'noticia' => $destaques[0]->slug])}}">
                                        <img width="370" height="191" src="{{asset($destaques[0]->preview)}}"
                                            alt="Ilustra Blog 1">
                                        <p class="info">
                                            <img width="18" height="19" src="{{ asset('site/img/ico_calendar.svg') }}"
                                                alt="Icone calendário">{{date("d/m/y", strtotime($destaques[0]->publicacao))}}
                                        </p>
                                    </a>
                                    <a class="tag" href="{{route('site.noticias', ['slug' => $destaques[0]->categoria->slug])}}">{{$destaques[0]->categoria->nome}}</a>
                                    <h3><a href="{{route('site.noticia', ['categoria' => $destaques[0]->categoria->slug, 'noticia' => $destaques[0]->slug])}}" class="blogItem">{{$destaques[0]->titulo}}</a></h3>
                                    <p class="texto">
                                        <a href="{{route('site.noticia', ['categoria' => $destaques[0]->categoria->slug, 'noticia' => $destaques[0]->slug])}}">
                                            {{$destaques[0]->resumo}}
                                        </a>
                                    </p>
                                </div>
                            @endif
                            @if(isset($destaques[1]))
                                <div class="sliderItem">
                                    <a href="{{route('site.noticia', ['categoria' => $destaques[1]->categoria->slug, 'noticia' => $destaques[1]->slug])}}">
                                        <img width="370" height="191" src="{{asset($destaques[1]->preview)}}"
                                            alt="Ilustra Blog 1">
                                        <p class="info">
                                            <img width="18" height="19" src="{{ asset('site/img/ico_calendar.svg') }}"
                                                alt="Icone calendário">{{date("d/m/y", strtotime($destaques[1]->publicacao))}}
                                        </p>
                                    </a>
                                    <a class="tag" href="{{route('site.noticias', ['slug' => $destaques[1]->categoria->slug])}}">{{$destaques[1]->categoria->nome}}</a>
                                    <h3><a href="{{route('site.noticia', ['categoria' => $destaques[1]->categoria->slug, 'noticia' => $destaques[1]->slug])}}" class="blogItem">{{$destaques[1]->titulo}}</a></h3>
                                    <p class="texto">
                                        <a href="{{route('site.noticia', ['categoria' => $destaques[1]->categoria->slug, 'noticia' => $destaques[1]->slug])}}">
                                            {{$destaques[1]->resumo}}
                                        </a>
                                    </p>
                                </div>
                            @endif
                            @if(isset($destaques[2]))
                                <div class="sliderItem magro">
                                    <a href="{{route('site.noticia', ['categoria' => $destaques[2]->categoria->slug, 'noticia' => $destaques[2]->slug])}}">
                                        <img width="370" height="191" src="{{asset($destaques[2]->preview)}}"
                                            alt="Ilustra Blog 1">

                                        <p class="info">
                                            <img width="18" height="19" src="{{ asset('site/img/ico_calendar.svg') }}"
                                                alt="Icone calendário">{{date("d/m/y", strtotime($destaques[2]->publicacao))}}
                                        </p>
                                    </a>
                                    <a class="tag" href="{{route('site.noticias', ['slug' => $destaques[2]->categoria->slug])}}">{{$destaques[2]->categoria->nome}}</a>
                                    <h3><a href="{{route('site.noticia', ['categoria' => $destaques[2]->categoria->slug, 'noticia' => $destaques[2]->slug])}}" class="blogItem">{{$destaques[2]->titulo}}</a></h3>
                                    <!-- <p class="texto">
                                        <a href="{{route('site.noticia', ['categoria' => $destaques[2]->categoria->slug, 'noticia' => $destaques[2]->slug])}}">
                                            {{$destaques[2]->resumo}}
                                        </a>
                                    </p> -->
                                </div>
                            @endif
                            @if(isset($destaques[3]))
                                <div class="sliderItem magro">
                                    <a href="{{route('site.noticia', ['categoria' => $destaques[3]->categoria->slug, 'noticia' => $destaques[3]->slug])}}">
                                        <img width="370" height="191" src="{{asset($destaques[3]->preview)}}"
                                            alt="Ilustra Blog 1">
                                        <p class="info">
                                            <img width="18" height="19" src="{{ asset('site/img/ico_calendar.svg') }}"
                                                alt="Icone calendário">{{date("d/m/y", strtotime($destaques[3]->publicacao))}}
                                        </p>
                                    </a>
                                    <a class="tag" href="{{route('site.noticias', ['slug' => $destaques[3]->categoria->slug])}}">{{$destaques[3]->categoria->nome}}</a>
                                    <h3><a href="{{route('site.noticia', ['categoria' => $destaques[3]->categoria->slug, 'noticia' => $destaques[3]->slug])}}" class="blogItem">{{$destaques[3]->titulo}}</a></h3>
                                    <!-- <p class="texto">
                                        <a href="{{route('site.noticia', ['categoria' => $destaques[3]->categoria->slug, 'noticia' => $destaques[3]->slug])}}">
                                            {{$destaques[3]->resumo}}
                                        </a>
                                    </p> -->
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="sliderBtn">
                        <button title="Anterior"><img width="32" height="32"
                                src="{{ asset('site/img/ico_setaEsq.svg') }}" alt="Seta esquerda"></button>
                        <button title="Próximo" class="proximo"><img width="32" height="32"
                                src="{{ asset('site/img/ico_setaDir.svg') }}" alt="Seta direita"></button>
                    </div>
                </div>
                <div>
        </section>
        <section id="numeros">
            <img class="banner" src="{{ asset('site/img/banner_numeros.jpg') }}" alt="Queijos e vinho"
                height="467">
            <div class="intro">
                <h2 class="traco">A ABS</h2>
                <p>Foi fundada no Rio de Janeiro, em 1983, por iniciativa do sommelier e restaurateur Danio Braga. Em
                    2011 liderou campanha que culminou com a regulamentação da profissão de Sommelier</p>
            </div>
            <div class="direita">
                <div class="caixas">
                    <div>
                        <img src="{{ asset('site/img/ico_tacas.svg') }}" width="58" height="58" alt="Taças">
                        <p><span class="grande">38</span>anos de história</p>
                    </div>
                    <div>
                        <img src="{{ asset('site/img/ico_globo.svg') }}" width="51" height="51" alt="Pessoas globo">
                        <p><span>10</span>ABS Estaduais</p>
                    </div>
                    <div>
                        <img src="{{ asset('site/img/ico_livros.svg') }}" width="50" height="50" alt="Livros">
                        <p><span>1</span>Curso</p>
                    </div>
                </div>
                <h2>Fonte de formação de sommeliers profissionais do país</h2>
                <a href="{{route('site.quem_somos')}}" class="botao">Quem somos</a>
            </div>
        </section>
        <section id="sommelierHome" class="fundo">
            <div class="base">
                <div class="conheca">
                    <h2 class="traco">Sommelier, conheça a profissão</h2>
                    <p>Quando da popularização dos restaurantes em Paris, no final do séc. XVIII, convencionou-se que
                        quem trazia ou transportava o vinho ficava com a obrigação de prová-lo, não só pelo motivo
                        exposto acima, mas também para garantir se o produto era de boa qualidade.</p>
                    <p>Assim, paulatinamente, nasceu a profissão como é conhecida hoje; o Sommelier é responsável pela
                        escolha, compra, recebimento, guarda e pela prova do vinho antes que seja servido ao cliente.
                    </p>
                    <a class="botao" href="/sommelier">Continue lendo</a>
                </div>
                <div class="deonde">
                    <img src="{{ asset('site/img/ico_baloes.svg') }}" width="70" height="70" alt="Balões">
                    <h3>Da onde vem este termo: Sommelier?</h3>
                    <p>A palavra Sommelier vem do francês. Em resumo, o carroceiro dos castelos e palácios, que, por
                        transportar as pipas de vinho, acabou sendo incumbido de provar seu conteúdo antes que fosse
                        servido aos Reis e nobres.</p>
                </div>
            </div>
        </section>
        <section id="onde" class="fundo">
            <div class="base">
                <img class="postal" src="{{ asset('site/img/banner_onde.jpg') }}" alt="Postal" width="505"
                    height="647">
                <div class="cidades">
                    <h2 class="traco">Onde estamos</h2>
                    @foreach(\App\Models\Estadual::all() as $estadual)
                        <a href="{{route('site.estadual', ['slug' => $estadual->slug])}}">{{$estadual->nome}}</a>
                    @endforeach
                    
                </div>
            </div>
        </section>
        <hr>
        <section id="apoio">
            <nav>
            <a href="https://7seventrends.com">
            <img style="filter: contrast(0) brightness();" src="https://homolog.abs-brasil.com/site/img/logo_7seven.svg" alt="7Seven Trends" width="200"> </a> 
            </nav>
        </section>
    </main>
    @include('site.includes.footer')
    <!-- Modal -->
    @if(isset($destaque_suspenso))
        <div class="modal fade" id="modalDestaque" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header modal-header-destaque">
                        <h5 class="modal-title">{{$destaque_suspenso->titulo}}</h5>
                            <button type="button" class="close close-destaque" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                    </div>
                    <div class="modal-body px-0 pt-0">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-12 px-0">
                                    <img src="{{asset($destaque_suspenso->imagem)}}" style="width: 100%;" alt="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 mt-3 modal-destaque-content">
                                    {!! $destaque_suspenso->descricao !!}
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <script>
            $(document).ready(function(){
                $("#modalDestaque").modal();
            });
        </script>
    @endif
</body>

</html>
