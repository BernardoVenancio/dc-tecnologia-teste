@extends('layouts.master')
@section('title','Adicionar Produto')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-center">
            <h1 class="text-center">Adicionar Produto</h1>
        </div>
        <form class="row g-3" method="POST" action="{{url('/produtos/adicionar')}}">
            @csrf

            <div class="col-6">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" value="{{old('nome')}}" maxlength="50" placeholder="Escreva o Nome do Produto" required>
            </div>
            <div class="col-6">
                <label for="marca" class="form-label">Marca</label>
                <input type="text" class="form-control" id="marca" name="marca" value="{{old('marca')}}" maxlength="50" placeholder="Escreva a Marca do Produto" required>
            </div>
            <div class="col-6">
                <label for="tipo" class="form-label">Tipo</label>
                <select id="tipo" name="tipo" class="form-select" required>
                    <option value="" hidden selected>Escolha...</option>
                    <option>Perecível</option>
                    <option>Não Perecível</option>
                </select>
            </div>
            <div class="col-6">
                <label for="preco" class="form-label">Preço</label>
                <input type="number" class="form-control" name="preco" step="0.01" id="preco" value="{{old('preco')}}" placeholder="Escreva o Preço do Produto">
            </div>
            <div class="col-12 d-flex justify-content-end">
                <button type="submit" name="submit" class="btn btn-primary" value="Cadastrar">Cadastrar</button>
            </div>
        </form>
    </div>
</div>
@endsection