<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $fillable = ['nome', 'descricao', 'quantidade'];

    protected $guarded = ['id', 'created_at', 'updated_at'];

    protected $table = 'produtos';

    // public $rules = [
    //     'nome' => 'required|min:3|max:100',
    //     'descricao' => 'required|min:1|max:140',
    //     'quantidade' =>'required'
    // ];
}
