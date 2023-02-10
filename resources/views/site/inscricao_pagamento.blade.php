@include('site.includes.head')

<body>

    <div class="container-fluid pb-4" style="margin-top: 200px;>
        <div class="container py-5" style=" max-width: 400px">

            <div class="formulario__area" style="text-align: center;">
                <img src="{{ asset('site/img/logo128.png') }}" alt="">

                <h3 class="mt-4">Obrigado por se inscrever! </h3>
                <p>Clique no botão para realizar o pagamento.</p>

                <a class="mt-5"
                    href="https://pagamento.gerencianet.com.br/botao-de-pagamento/05378e88-4548-4215-bb22-40f04ec3c81f"
                    target="_blank">
                    <img src="https://pagamento.gerencianet.com.br/button-gradient-md-723146-Comprar-cash.svg">
                </a>
            </div>
        </div>
    </div>
</body>
