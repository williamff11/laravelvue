@extends('layouts.app')

@section('content')
<pagina tamanho="10">
    <painel titulo="Dashboard">
        <div class="row">
            <div class="col-md-4">
                <caixa quantidade="80" titulo="Artigos" url="#" cor="#dc3545" icone="ion ion-pie-graph"></caixa>
            </div>
            <div class="col-md-4">
                <caixa quantidade="60%" titulo="Graficos" url="#" cor="#ffc107" icone="ion ion-quote"></caixa>
            </div>
            <div class="col-md-4">
                <caixa quantidade="36" titulo="TCC's" url="#" cor="#17a2b8" icone="ion ion-person-add"></caixa>
            </div>
        </div>
    </painel>
</pagina>
@endsection