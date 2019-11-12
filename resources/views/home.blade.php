@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <painel titulo="Dashboard">
                    <div class="row">
                        <div class="col-md-4">
                            <caixa quantidade="80" titulo="Gráficos" url="#" cor="orange" icone="ion ion-pie-graph"></caixa>
                        </div>
                        <div class="col-md-4">
                        <caixa quantidade="60" titulo="Artigos" url="google.com" cor="green" icone="ion ion-quote"></caixa>
                        </div>
                        <div class="col-md-4">
                        <caixa quantidade="36" titulo="TCC's" url="#" cor="red" icone="ion ion-person-add"></caixa>
                        </div>

                    </div>



                </painel>
            </div>
        </div>
    </div>
    @endsection