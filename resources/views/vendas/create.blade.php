@extends('layouts.master')
@section('title','Adicionar Venda')

@section('content')
<div class="container">
    <div class="d-flex">
        <div class="row">
            <div class="col-12 justify-content-center text-center">
                <h1>Nova Venda</h1>
            </div>
            <div class="col-12 justify-content-center text-center">
                <form method="GET" id="nova-venda"></form>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th hidden>Id</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Marca</th>
                            <th scope="col">Tipo</th>
                            <th scope="col">Preço</th>
                            <th scope="col">Quantidade</th>
                            <th scope="col">Total</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($produtos as $produto)
                            <tr>
                                <td hidden><input type="text">{{$produto->id}}</td>
                                <th scope="row">{{$produto->nome}}</th>
                                <td>{{$produto->marca}}</td>
                                <td>{{$produto->tipo}}</td>
                                <td>{{$produto->preco}}</td>
                                <td><input type="number" min="0" step="1" class="form-control w-50 m-auto quantidade-produto" name="quantidade" data-value="{{$produto->preco}}" data-product="{{$produto->id}}" form="nova-venda"></td>
                                <td id="total-{{$produto->id}}" class="total-produto">0</td>
                            </tr>
                        @endforeach
                      </tbody>
                </table>
            </div>
            <div class="col-6 justify-content-start">
                <p class="fw-bold">Valor Total da Venda: <span id="total-compra">0</span></p>
            </div>
            <div class="col-6">
                <div class="d-flex justify-content-end">
                    <button type="button" class="btn btn-primary">Finalizar</button>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection