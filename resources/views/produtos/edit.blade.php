@extends('layouts.master')
@section('title','Editar Produto')

@section('content')

<div class="container">
    <div class="d-flex justify-content-center">
        <h1 class="text-center">Editando: {{$produto->nome}}</h1>
    </div>
    <form class="row g-3" method="POST" action="{{ route('produtos.update', $produto->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="col-6">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" value="{{old('nome',$produto->nome)}}" maxlength="50" placeholder="Escreva o Nome do Produto" required>
        </div>
        <div class="col-6">
            <label for="marca" class="form-label">Marca</label>
            <input type="text" class="form-control" id="marca" name="marca" value="{{old('marca',$produto->marca)}}" maxlength="50" placeholder="Escreva a Marca do Produto" required>
        </div>
        <div class="col-6">
            <label for="tipo" class="form-label">Tipo</label>
            @if($produto->tipo == 'Perecível')
                <select id="tipo" name="tipo" class="form-select" required>
                    <option value="" hidden>Escolha...</option>
                    <option selected>Perecível</option>
                    <option>Não Perecível</option>
                </select>
            @else
                <select id="tipo" name="tipo" class="form-select" required>
                    <option value="" hidden>Escolha...</option>
                    <option>Perecível</option>
                    <option selected>Não Perecível</option>
                </select>
            @endif

        </div>
        <div class="col-6">
            <label for="preco" class="form-label">Preço</label>
            <input type="number" class="form-control" name="preco" step="0.01" id="preco" value="{{old('preco',$produto->preco)}}" placeholder="Escreva o Preço do Produto">
        </div>
        <div class="col-12 d-flex justify-content-end">
            <button type="submit" name="submit" class="btn btn-primary" value="Editar">Editar</button>
        </div>
    </form>
</div>

@endsection