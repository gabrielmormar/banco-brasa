<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\DepositFormRequest;

class BalanceController extends Controller
{
    public function index() {

        $balance = Auth::user()->balance;
        $amount = $balance ? $balance->amount : 0;
        $nomeUsuario = Auth::user()->name;

        return view('admin.balance.index', compact('amount', 'nomeUsuario'));
    }

    public function deposit() {
        return view('admin.balance.deposit');
    }

    public function store(DepositFormRequest $request) {
        dd(Auth::user());
        return 'deposito aqui';
    }
}
