@extends('layouts.app')

@section('content')

<painel titulo="Livros">
    <modal-btn nome-modal="adicionar" tipo="adicionar"></modal-btn>
</painel>
@foreach ($listaLivros as $item)
    <card-lista>
        <template v-slot:conteudo>
            <strong class="d-inline-block mb-2 text-primary">Código do livro: {{ $item->id }}</strong>
            <h3 class="mb-0">{{ $item->titulo }}</h3>
            @if ($item->estoque_disponivel == 0)
                <br>
                <div class="card  text-white bg-danger">
                    <div class="card-body">
                    Este livro está sem exemplares disponíveis no momento! Por favor, aguarde!
                    </div>
                </div><br/>            
            @endif
            <div class="mb-1 card-text mb-auto">Autor: {{ $item->autor }}</div>
            <div class="mb-1 card-text mb-auto">Exemplares disponíveis: {{ $item->estoque_disponivel }}</div>
            <div class="mb-1 card-text mb-auto">Total de exemplares: {{ $item->estoque_total }}</div>
        </template>
        <template v-slot:acoes> 
            <modal-btn nome-modal="consultar" tipo="consultar"></modal-btn>
            <modal-btn nome-modal="editar" tipo="editar"></modal-btn>
            <modal-btn nome-modal="deletar" tipo="deletar"></modal-btn>
        </template>
    </card-lista>
@endforeach

    <modal nome-modal="adicionar"></modal>
    <modal nome-modal="consultar"></modal>
    <modal nome-modal="editar"></modal>
    <modal nome-modal="deletar"></modal>

@endsection
