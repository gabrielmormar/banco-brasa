@extends('adminlte::page')

@section('title', 'Saldo')

@section('content_header')
    <h1>Saldo</h1>
@stop

@section('content')
    <div class="box">
        <div class="box-body">
            <table class="table table-bordered table-striped table-hover">
            <tr>
                <th>Nome</th>
                <th>Saldo</th>
            </tr>
            <tr>
                <td>{{ $nomeUsuario }}</td>
                <td>R${{ number_format($amount, 2, ',', '.') }}</td>
            </tr>
            
        </table>
        </div>
        <div class="box-footer">
                <a href="{{route('balance.deposit')}}" class="btn btn-warning">Depositar</a>
                <a href="#" class="btn btn-success">Sacar</a>
            </div>
    </div>
@stop