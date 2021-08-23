<div id="backdrop" style="background:#e5e5e5">
    <div class="logo"><img src="{{asset('site/img/logoABS.png')}}" width="115" height="115" alt="Logomarca ABS - Brasil"></div>
</div>
<header class="header {{$classe}}" @if($classe == "brasil cursos" && isset($curso)) style="background-image: url({{asset($curso->banner)}})"  @endif>
    <section class="logos" style="max-width: 1250px!important;">
        <a class="ancora" href="/" title="Home"><img src="{{asset('site/img/logoABS.png')}}" width="115" height="115" alt="Logomarca ABS - Brasil"></a>
        <a class="asi" target="_blank" rel="noopener" title="Navegar para ASI" href="https://www.asi.info/"><img src="{{asset('site/img/logoASI.png')}}" width="115" height="115"  alt="Logomarca ASI"></a>
        <!--<h1>'.PAGINA_TITULO.'</h1>-->
        <h1 id="_desktoptext">Associação Brasileira<br>de Sommeliers - Brasil</h1>
        <h1 id="_mobiletext">Associação Brasileira de Sommeliers Brasil</h1>
        <nav class="sobe">
            <div class="menuLateral">
                <button class="menu ativo" title="Menu"><img width="18" height="12" src="{{asset('site/img/ico_menu.svg')}}" alt="Menu"></button>
                <a href="/" title="Home" class="ancora"><img width="23" height="21" src="{{asset('site/img/ico_home.svg')}}" alt="Home"></a>
                <a href="/minha-conta" title="Usuário"><img width="23" height="23" src="{{asset('site/img/ico_user.svg')}}" alt="Usuário"></a>
                <a href="{{route('site.contato')}}" title="Ajuda"><img width="23" height="23" src="{{asset('site/img/ico_ajuda.svg')}}" alt="Ajuda"></a>
                <a href="{{$configuracoes->youtube}}" title="Youtube" target="_blank" rel="nofollow noopener"><img width="27" height="27" src="{{asset('site/img/ico_youtube.svg')}}" alt="Youtube"></a>
                <a href="{{$configuracoes->instagram}}" title="Instagram" target="_blank" rel="nofollow noopener"><img width="27" height="27" src="{{asset('site/img/ico_insta.svg')}}" alt="Instagram"></a>
                <a href="{{$configuracoes->facebook}}" title="Facebook" target="_blank" rel="nofollow noopener"><img width="27" height="27" src="{{asset('site/img/ico_face.svg')}}" alt="Facebook"></a>
                <a class="whatsapp" href="https://api.whatsapp.com/send?phone=55{{$configuracoes->whatsapp}}" title="WhatsApp" target="_blank" rel="nofollow noopener"><img width="27" height="27" src="{{asset('site/img/ico_whats.svg')}}" alt="WhatsApp"></a>
            </div>
        </nav>
    </section>
    <section class="add">
        @if(isset($adicional))
            {!! $adicional !!}
        @endif
        <nav>
            <div class="menuHeader">
                <a href="{{route('site.cursos')}}" @if(url()->current() == route("site.cursos")) class="ativo" @endif>Cursos</a>
                <a href="{{route('site.quem_somos')}}"  @if(url()->current() == route("site.quem_somos")) class="ativo" @endif>ABS Brasil</a>
                <a href="{{route('site.estaduais')}}" @if(url()->current() == route("site.estaduais")) class="ativo" @endif>ABS Estaduais</a>
                <a href="{{route('site.noticias')}}">Notícias do Vinho</a>
            </div>
        </nav>
    </section>
</header>