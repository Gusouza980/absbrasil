@include('site.includes.head')
<body class="cursos" style="overflow:hidden;">
    @include('site.includes.bodyHeader', [  
        "classe" => "brasil cursos",
        "adicional" => '<div class="direita" style="padding-bottom: 50px;">
            <h1>Concurso</h1>
            <a href="' . route('site.quem_somos') . '">Quem somos</a>
        </div>'    
    ])
    <main class="main">
        <section id="cursos">
            <div class="texto">
                <h1>Concurso</h1>
                <p>A ABS-Brasil oferece ampla gama de cursos do mundo do vinho. Seja para você, que é iniciante, ou para quem deseja se profissionalizar e entrar no mercado de trabalho.</p>
            </div>
            <div class="cursosNA">
                @foreach($cursos as $curso)
                    @php
                        $turma = $curso->turmas->sortBy("data")->first();
                    @endphp
                    <div>
                        <img src="{{asset($curso->miniatura)}}" alt="{{$curso->titulo}}" width="328" height="183">
    <!-- 						<h4><span>Em breve</span><span>Em breve</span><span>35 Turmas</span></h4> -->
                        @if($turma)
                            <h4 class="mt-3"><span>{{date("d.m.Y", strtotime($turma->data))}}</span><span>{{date("H:i", strtotime($turma->horario))}}</span><span>{{$turma->vagas}} vagas</span></h4>
                        @else
                            <h4 class="mt-3"><span>Em breve</span><span>Em breve</span><span>Em breve</span></h4>
                        @endif
                        <h2>{{$curso->titulo}}</h2>
                        <h3>On-line</h3>
    <!-- 						<p>O curso Aguardem - Vem novidades!  é a porta de entrada nesse fascinante mundo, o mais abrangente e completo curso de Aguardem - Vem novidades! . Objetivo, levar informações e curiosidades gerais sobre este universo tão vasto, porém de forma muito leve e descontraída.</p> -->
                        
                        <a href="{{route('site.curso', ['slug' => $curso->slug])}}">VER MAIS</a>
                    </div>
                @endforeach
<!--					<div>
                    <img src="/img/_cursoItem2.jpg" alt="Ilustração curso 2" width="328" height="183">
                    <h4><span>Em breve</span><span>Em breve</span><span>Em breve</span></h4>
                    <h2>Aguardem - Vem novidades! </h2>
                    <h3>On-line</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut faucibus lacus ultrices in. Suscipit tristique odio sit suscipit suscipit risus laoreet. Eu felis praesent eget porttitor. Sodales mi consectetur euismod justo, sit mauris.</p>
                    <a href="/cursos/curso-modelo">Ver Mais</a>
                </div>
                <div>
                    <img src="/img/_cursoItem3.jpg" alt="Ilustração curso 3" width="328" height="183">
                    <h4><span>Em breve</span><span>Em breve</span><span>Em breve</span></h4>
                    <h2>Aguardem - Vem novidades! </h2>
                    <h3>On-line</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut faucibus lacus ultrices in. Suscipit tristique odio sit suscipit suscipit risus laoreet. Eu felis praesent eget porttitor. Sodales mi consectetur euismod justo, sit mauris.</p>
                    <a href="/cursos/curso-modelo">Ver Mais</a>
                </div>
                <div>
                    <img src="/img/_cursoItem4.jpg" alt="Ilustração curso 4" width="328" height="183">
                    <h4><span>Em breve</span><span>Em breve</span><span>Em breve</span></h4>
                    <h2>Aguardem - Vem novidades! </h2>
                    <h3>On-line</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut faucibus lacus ultrices in. Suscipit tristique odio sit suscipit suscipit risus laoreet. Eu felis praesent eget porttitor. Sodales mi consectetur euismod justo, sit mauris.</p>
                    <a href="/cursos/curso-modelo">Ver Mais</a>
                </div>
                <div>
                    <img src="/img/_cursoItem5.jpg" alt="Ilustração curso 5" width="328" height="183">
                    <h4><span>Em breve</span><span>Em breve</span><span>Em breve</span></h4>
                    <h2>Aguardem - Vem novidades! </h2>
                    <h3>On-line</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut faucibus lacus ultrices in. Suscipit tristique odio sit suscipit suscipit risus laoreet. Eu felis praesent eget porttitor. Sodales mi consectetur euismod justo, sit mauris.</p>
                    <a href="/cursos/curso-modelo">Ver Mais</a>
                </div>
                <div>
                    <img src="/img/_cursoItem6.jpg" alt="Ilustração curso 6" width="328" height="183">
                    <h4><span>Em breve</span><span>Em breve</span><span>Em breve</span></h4>
                    <h2>Aguardem - Vem novidades! </h2>
                    <h3>On-line</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut faucibus lacus ultrices in. Suscipit tristique odio sit suscipit suscipit risus laoreet. Eu felis praesent eget porttitor. Sodales mi consectetur euismod justo, sit mauris.</p>
                    <a href="/cursos/curso-modelo">Ver Mais</a>
                </div>
                <div>
                    <img src="/img/_cursoItem7.jpg" alt="Ilustração curso 7" width="328" height="183">
                    <h4><span>Em breve</span><span>Em breve</span><span>Em breve</span></h4>
                    <h2>Aguardem - Vem novidades! </h2>
                    <h3>On-line</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut faucibus lacus ultrices in. Suscipit tristique odio sit suscipit suscipit risus laoreet. Eu felis praesent eget porttitor. Sodales mi consectetur euismod justo, sit mauris.</p>
                    <a href="/cursos/curso-modelo">Ver Mais</a>
                </div>
                <div>
                    <img src="/img/_cursoItem8.jpg" alt="Ilustração curso 8" width="328" height="183">
                    <h4><span>Em breve</span><span>Em breve</span><span>Em breve</span></h4>
                    <h2>Aguardem - Vem novidades! </h2>
                    <h3>On-line</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut faucibus lacus ultrices in. Suscipit tristique odio sit suscipit suscipit risus laoreet. Eu felis praesent eget porttitor. Sodales mi consectetur euismod justo, sit mauris.</p>
                    <a href="/cursos/curso-modelo">Ver Mais</a>
                </div>
                <div>
                    <img src="/img/_cursoItem9.jpg" alt="Ilustração curso 9" width="328" height="183">
                    <h4><span>Em breve</span><span>Em breve</span><span>Em breve</span></h4>
                    <h2>Aguardem - Vem novidades! </h2>
                    <h3>On-line</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut faucibus lacus ultrices in. Suscipit tristique odio sit suscipit suscipit risus laoreet. Eu felis praesent eget porttitor. Sodales mi consectetur euismod justo, sit mauris.</p>
                    <a href="/cursos/curso-modelo">Ver Mais</a>
                </div>-->
            </div>
        </section>
    </main>
    @include('site.includes.footer')
</body>

</html>
