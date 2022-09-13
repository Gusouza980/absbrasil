<footer class="footer">
    <section id="banner">
        <div>
            <div class="logo">
                <a title="Home" href="/"><img src="{{ asset('site/img/logoABS.png') }}" width="115" height="115"
                        alt="Logomarca ABS"></a>
                <a target="_blank" rel="noopener" title="Navegar para ASI" href="https://www.asi.info/"><img
                        src="{{ asset('site/img/logoASI.png') }}" width="90" height="90" alt="Logomarca ASI"></a>
            </div>
            <div class="social">
                <a class="ifl1linkIcone" target="_blank" rel="noopener" title="Facebook"
                    href="{{ $configuracoes->facebook }}"><img src="{{ asset('site/img/ico_face.svg') }}" width="27"
                        height="27" alt="Ícone Facebook"></a>
                <a class="ifl1linkIcone" target="_blank" rel="noopener" title="Instagram"
                    href="{{ $configuracoes->instagram }}"><img src="{{ asset('site/img/ico_insta.svg') }}"
                        width="27" height="27" alt="Ícone Instagram"></a>
                <a class="ifl1linkIcone" target="_blank" rel="noopener" title="Youtube"
                    href="{{ $configuracoes->youtube }}"><img src="{{ asset('site/img/ico_youtube.svg') }}"
                        width="27" height="27" alt="Ícone Youtube"></a>
            </div>
        </div>
        <div>
            <div class="txt">
                <h3>CADASTRE-SE NA<br>NOVA NEWLESTTER</h3>
                <p>Receba as atualizações do site, brindes e notícias da ABS.</p>
            </div>
            <div class="btn">
                <a href="/cadastro">Assinar <img width="47" height="8"
                        src="{{ asset('site/img/ico_setaLonga.svg') }}" alt="Seta Longa"></a>
            </div>
        </div>
    </section>
    <hr>
    <section id="links">
        <h3>Menu</h3>
        <nav>
            <div class="ancoraLista">
                <a href="{{ route('site.cursos') }}" @if (url()->current() == route('site.cursos')) class="ativo" @endif>Cursos</a>
                <a href="{{ route('site.quem_somos') }}" @if (url()->current() == route('site.quem_somos')) class="ativo" @endif>ABS
                    Brasil</a>
                <a href="{{ route('site.estaduais') }}" @if (url()->current() == route('site.estaduais')) class="ativo" @endif>ABS
                    Estaduais</a>
                <a href="{{ route('site.noticias') }}">Notícias do Vinho</a>
            </div>
            <div>
                <a target="_blank" rel="noopener" title="Ver mapa" href="'.CONTATO_GMAPS.'"><img
                        src="{{ asset('site/img/ico_user.svg') }}" width="20" height="22"
                        alt="Ícone usuário">{{ $configuracoes->rua . ', ' . $configuracoes->numero }} @if ($configuracoes->complemento)
                        {{ '- ' . $configuracoes->complemento }}
                    @endif - {{ $configuracoes->bairro }} <br> {{ $configuracoes->cidade }} -
                    {{ $configuracoes->estado }}
                </a>
                <!--<a target="_blank" rel="noopener" title="Telefone" href="tel:{{ $configuracoes->telefone }}"><img src="{{ asset('site/img/ico_fone.svg') }}" width="25" height="25" alt="Ícone Telefone">{{ $configuracoes->telefone }}</a>
                <a class="whatsapp" target="_blank" rel="noopener" title="WhatsApp" href="https://api.whatsapp.com/send?phone=55{{ $configuracoes->whatsapp }}"><img src="{{ asset('site/img/ico_whats.svg') }}" width="27" height="27" alt="Ícone WhatsApp">{{ $configuracoes->whatsapp }}</a>
                --><a target="_blank" rel="noopener" title="Email" href="mailto:{{ $configuracoes->email }}"><img
                        src="{{ asset('site/img/ico_envelope.svg') }}" width="25" height="25"
                        alt="Ícone envelope">{{ $configuracoes->email }}</a>
            </div>
        </nav>
    </section>
    <hr>
    <section id="copy">
        <div class="ancoraLista">
            <!--<a href="#">Termos e condições</a>
            <a href="#">Política de privacidade</a>-->
            <p>© 2021 ABS - Associação Brasileira de Sommeliers - Brasil</p>
        </div>
        <div>
            <p>Desenvolvido por <a href="https://7seventrends.com" title="Clique para visitar o site da 7 Seven Trends"
                    target="_blank" rel="nofollow noopener"><img width="68" height="16"
                        src="{{ asset('site/img/logo_7seven.svg') }}" alt="7Seven Trends"></a></p>
        </div>
    </section>
</footer>


<script src="{{ asset('site/js/script.js') }}"></script>
<script src="/_ifl1/ifl1formatador.js"></script>
<script src="/_ifl1/ifl1validador.js"></script>
