<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{

    public function __constructor() {
        $this->middleware('auth')
            ->only();
    }
    
    public function mostra() {
        return 'Dentro da SiteController.';
    }

    public function contato() {
        return 'Dentro de contatos';
    }

    public function categoria($id) {
        return "Dentro de categoria: {$id}";
    }

    public function index() {
        return view('welcome');
    }

}
