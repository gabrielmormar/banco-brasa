@extends('adminlte::page')

@section('title', 'Carros')

@section('content_header')
    <h1>Carros</h1>
@stop

@section('content')
<br>
<div class="box">
    <div class="box-body">
            <table class="table table-bordered table-striped table-hover ">
                    <tr>
                        <th>Nome</th>
                        <th>Descrição</th>
                        <th>Quantidade</th>
                        <th>Ações</th>
                    </tr>
                    @foreach ($produtos as $produto)
                        <tr>
                            <td>{{$produto->nome}}</td>
                            <td>{{$produto->descricao}}</td>
                            <td width="50px">{{$produto->quantidade}}</td>
                            <td width="250px">
                                <a href="{{route('produtos.edit', $produto->id)}}" class="btn btn-warning">Alterar</a>
                                <a href="{{route('produtos.show', $produto->id)}}" class="btn btn-info">Detalhes</a>                         
                            </td>  
                        </tr>
                    @endforeach
                    
                </table>                                                         
            {{ $produtos->links() }}
                
    </div>
    
    

    {{-- <div>
        <a href="{{route('produtos.create')}}" class="btn btn-primary" style="margin-left: 50px;">Cadastrar</a>
        <a href="{{route('home')}}" class="btn btn-success">Home</a>
    </div>           --}}
   
</div>  
@stop