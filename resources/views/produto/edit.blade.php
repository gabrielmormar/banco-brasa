@extends('adminlte::page')

@section('title', 'Editar Carro')

@section('content_header')
    <h1>Editar {{$produto->nome}}</h1>
@stop

@section('content')

<div class="box">
    <div class="box-body">    
        @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Ops!</strong> Ocorreram os seguintes erros.<br><br>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </div>
        @endif

        <form action="/produtos/{{$produto->id}}" method="post" class="form">
        {{ method_field('PATCH') }}
        @csrf
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input type="text" id="nome" name="nome" value="{{$produto->nome}}"class="form-control">
                </div>
                <div class="form-group">
                    <label for="descricao">Descrição</label>
                    <input type="text" id="descricao" name="descricao" value="{{ $produto->descricao}}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="quantidade">Quantidade</label>
                    <input type="number" id="quantidade" name="quantidade" value="{{$produto->quantidade}}" class="form-control">
                </div>

                <button type="submit" class="btn btn-success">Atualizar</button>
        </form>
    </div>
</div>

@stop