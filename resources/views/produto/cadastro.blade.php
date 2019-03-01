@extends('adminlte::page')

@section('title', 'Cadastrando novo carro')

@section('content_header')
    <h1>Cadastro do carro</h1>
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

        <form action="{{route('produtos.store')}}" method="post" class="form">
            @csrf
                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" id="nome" name="nome" value="{{old('nome')}}"class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="descricao">Descrição</label>
                        <input type="text" id="descricao" name="descricao" value="{{old('descricao')}}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="quantidade">Quantidade</label>
                        <input type="number" id="quantidade" name="quantidade" value="{{old('quantidade')}}" class="form-control">
                    </div>
        
                    <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
    </div> 
</div>
@stop