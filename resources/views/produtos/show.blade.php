@extends('layouts.master')
@section('title','Página Inicial')
@section('content')
    <div class="container">
        <div class="d-flex justify-content-center text-center">
            <div class="row">
                <div class="col-12">
                    <h1>Produtos Disponíveis</h1>
                </div>
                <table class="table table-striped">
                    <thead>
                        <tr>
                          <th scope="col">Nome</th>
                          <th scope="col">Marca</th>
                          <th scope="col">Tipo</th>
                          <th scope="col">Preço</th>
                          <th scope="col">Editar</th>
                          <th scope="col">Deletar</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($produtos as $produto)
                            <tr>
                                <th scope="row">{{$produto->nome}}</th>
                                <td>{{$produto->marca}}</td>
                                <td>{{$produto->tipo}}</td>
                                <td>{{$produto->preco}}</td>
                                <td><a href="{{route('produtos.edit',$produto->id)}}"><i class="fa-solid fa-pen-to-square"></i></a></td>
                                <td>
                                    <form action="{{route('produtos.destroy', $produto->id)}}" method="POST" onclick="event.preventDefault(); this.closest('form').submit();">
                                        @csrf
                                        @method('delete')
                                        <i class="fa-solid fa-trash text-danger delete-button"></i>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                      </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection