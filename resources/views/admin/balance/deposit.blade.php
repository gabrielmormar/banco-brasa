@extends('adminlte::page')

@section('title', 'Depósito')

@section('content_header')
    <h1>Depositar</h1>
@stop

@section('content')
    <div class="box">
        {{-- <div class="box-header">
            <a href="#" class="btn btn-warning">Depositar</a>
            <a href="#" class="btn btn-success">Sacar</a>
        </div> --}}

    <div class="box-body">

        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Ops!</strong> Ocorreu o seguinte erro.<br><br>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </div>
        @endif

        <form action="{{route('balance.store')}}" method="post" class="form col-md-4">
            @csrf
            <div class="form-group">
                    <label for="deposito">Valor do depósito</label>
                    <input type="number" id="deposito" name="deposito" class="form-control">
            </div>

            <button type="submit" class="btn btn-success">Depositar</button>
        </form>
    </div>

    </div>
@stop