@extends('adminlte::page')

@section('title', "Detalhes do Veículo")

@section('content_header')
    <h1>Detalhes do {{$produto->nome}}</h1>
@stop

@section('content')
<div class="box">
    <div class="row">
        <div class="col-md-12">
            <table class="table table-striped table-bordered">
            <tr>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Quantidade</th>
                <th>Opção</th>
            </tr>
            <tr>
                <td>{{$produto->nome}}</td>
                <td>{{$produto->descricao}}</td>
                <td>{{$produto->quantidade}}</td>
                <td><form action="{{route('produtos.destroy', $produto->id)}}" method="post">
                    {{ method_field('DELETE') }}
                    @csrf
                    <button type="submit" class="btn btn-danger">Excluir</button>
                    </form>
                    {{-- <a href="{{route('produtos.index')}}" class="btn btn-info" style="margin-left: 10px;">Voltar</a> --}}
                </td>
            </tr>
            </table>        
        </div>        
        
    </div> 

</div>
@stop