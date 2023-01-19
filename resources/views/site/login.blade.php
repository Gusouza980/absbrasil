@include('site.includes.head')
<body class="form _minha-conta" style="overflow:hidden;">
<header>
      <div class="_half">
        <div class="container-fav">
          <div class="logos">
            <a href="/">
              <img src="{{asset('site/img/_logo136.png')}}" alt="Logo ABS Pernambuco" />
            </a>
            <img src="{{asset('site/img/_logoASI_136.png')}}" alt="Logo ASI" />
          </div>
          <a href="/" class="_back">
            <div class="svg">
              <img src="{{asset('site/img/arrowlong_left.svg')}}'" alt="" />
            </div>
            <p>Voltar a página principal</p>
          </a>
          <div class="_text">
            Bem vindo de volta!
          </div>
          <div class="_contact">
            <div class="_c">
              <div class="svg">
                <img src="{{asset('site/img/WhatsappLogo.svg')}}" alt="" />
                <span>xx 9999 9999</span>
              </div>
            </div>
            <div class="_c">
              <div class="svg">
                <img src="{{asset('site/img/WhatsappLogo.svg')}}" alt="" />
                <span>xx 9999 9999</span>
              </div>
            </div>
            <div class="_c">
              <div class="svg">
                <img src="{{asset('site/img/email.svg')}}" alt="" />
                <span>associacao.abs.brasil@gmail.com</span>
              </div>
            </div>
          </div>

          <div class="_credit">
            <p>Desenvolvido por</p>
            <div class="logo7seven">
              <a href="https://7seventrends.com">
                <img src="{{asset('site/img/_logo7seven.png')}}" alt="" />
              </a>
            </div>
          </div>
        </div>
      </div>

      <div class="_otherhalf">
        <div class="_login">
          <div class="container-fav">
            <div class="title">
              <div class="svg">
                <img src="{{asset('site/img/loginuser.svg')}}" alt="" />
              </div>
            </div>
            <form action="">
              <label>
                <span>Meu e-mail</span>
                <input type="email" />
              </label>
              <label>
                <span>Digite sua senha</span>
                <input type="password" />
              </label>
              <button>Acessar <img src="{{asset('site/img/arrowlong.svg')}}" alt="" /></button>
            </form>
          </div>
        </div>
      </div>
    </header>

    <script>        
        $("form label input,form label textarea").focus(function () {
        $(this).parent().find("span").addClass("active");
        });

        $("form label input,form label textarea").focusout(function () {
        if ($(this).val() == "") {
            $(this).parent().find("span").removeClass("active");
        }
        });
    </script>
    <script src="{{ asset('site/js/script.js') }}"></script>
    <script src="/_ifl1/ifl1formatador.js"></script>
    <script src="/_ifl1/ifl1validador.js"></script>
</body>

</html>
