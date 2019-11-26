@extends('layouts.app')

@section('content')
<pagina tamanho="12">
    <painel titulo="Lista de Artigos">

        <tabela-lista
         v-bind:titulos="['#', 'Título', 'Descrição', 'Autor', 'Data']"
         v-bind:itens="[['1', 'PHP 00', 'Curso', 'William', 'dd-mm-YY'],
         ['2', 'Elixir 00', 'Video Aula', 'Carlos', '25.11'],
         ['3', 'Java 00', 'EAD', 'Rute', '18.06']]"
         criar="#criar" detalhe="#detalhe" editar="#editar" deletar="deletar" token="010203"
        
        
         ></tabela-lista>

    </painel>
</pagina>
@endsection