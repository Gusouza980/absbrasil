@include('site.includes.head')

<body>

    <div class="container-fluid pb-4">
        <div class="container py-5" style=" max-width: 400px">

            <div class="formulario__area" style="text-align: center;">
                <img src="{{ asset('site/img/logo128.png') }}" alt="">

                <h3 class="mt-4">Formulário de inscrição para o Concurso Brasileiro de Sommeliers – Edição 2022</h3>


                <form action="{{ route('site.inscricao.efetuar') }}" method="POST">
                    @csrf

                    <span>Nome Completo:</span>
                    <input type="text" class="form-control mb-3" name="nome" id="nome"
                        placeholder="Informe o seu Nome" required>


                    <span>Seu e-mail: </span>
                    <input type="emaill" class="form-control mb-3" name="email" id="email"
                        placeholder="Informe o e-mail" required>


                    <span>Em qual ABS você deseja realizar a prova prática?</span>
                    <select name="abs" required id="abs" class="form-control" required>
                        <option value="">Selecione uma opção...</option>
                        @foreach(config("unidades.inscricoes") as $key => $unidade)
                            <option value="{{ $key }}">{{ $unidade["nome"] }}</option>
                        @endforeach
                    </select>

                    {{-- REDIRECIONAR PARA A PÁGINA DE PAGAMENTO!!! --}}
                    {{-- site.inscricao_pagamento --}}
                    <button type="submit" class="btn btn-primary px-5 my-3">
                        Inscrever
                    </button>


                </form>
                <p>*Após a inscrição haverá a realização do pagamento.</p>
            </div>
        </div>
    </div>
</body>
