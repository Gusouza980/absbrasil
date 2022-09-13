@extends('painel.template.main')

@section('titulo')
    Informações de Meios de Pagamento
@endsection

@section('conteudo')

@include('painel.includes.errors')
<div class="row">
    <div class="col-12 col-lg-3">
        <div class="card">
            <div class="card-body">

                <form action="{{route('painel.configuracoes.meios-pagamento.salvar')}}" method="POST">
                    @csrf
                    <h4 class="card-title">Configurações de Boleto</h4>

                    <div class="row">
                        <div class="col-12">
                            <div class="row">
                                <div class="form-group col-12 mt-3">
                                    <label for="min_valor_parcela_boleto">Valor mínimo de parcela</label>
                                    <input type="number" class="form-control" name="min_valor_parcela_boleto"
                                        id="min_valor_parcela_boleto" value="{{$configuracoes->min_valor_parcela_boleto}}" min="5" step="0.01">
                                </div>
                                <div class="form-group col-12 mt-3">
                                    <label for="max_parcelas_boleto">Número máximo de parcelas</label>
                                    <input type="number" class="form-control" name="max_parcelas_boleto"
                                        id="max_parcelas_boleto" value="{{$configuracoes->max_parcelas_boleto}}" min="1" step="1">
                                </div>
                            </div>
                            <div class="row">
                                
                            </div>
                            <hr class="mt-4">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12" style="text-align: right;">
                            <button type="submit" class="btn btn-primary px-5">Salvar</button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- end card body -->
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->
</div>
<!-- end row -->
@endsection

@section('scripts')

@endsection