@extends('layouts.app')

@section('content')

<painel titulo="Livros">
    <btn-painel nome="Adicionar Livro" url="admin/livro/create"></btn-painel>
</painel>
@foreach ($listaLivros as $item)
    <card-lista 
    consultar="admin/livro/{{ $item->id }}" 
    editar="admin/livro/{{ $item->id }}/edit"
    deletar="admin/livro/{{ $item->id }}">
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
    </card-lista>
@endforeach
@endsection
