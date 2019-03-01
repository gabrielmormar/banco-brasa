<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProdutoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nome' => 'required|min:3|max:100',
            'descricao' => 'required|min:1|max:140',
            'quantidade' =>'required|numeric'
        ];
    }

    public function messages() {    
        return [
            'nome.required' => 'Insira o nome',
            'descricao.required'  => 'Insira a descricao',
            'nome.min' => 'minimo 3 caracteres',
            'quantidade.required' => 'Insira a quantidade',
            'quantidade.numeric' => 'Precisa ser um valor numérico'
        ];
    }
}
