<?php

namespace App\Http\Controllers\Painel;

use App\Produto;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProdutoRequest;


class ProdutoController extends Controller
{
    // private $produto;

    // public function __construct(Produto $produto)
    // {
    //     $this->produto = $produto;
    // }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Produto $produto)
    {
        $produtos = Produto::orderBy('created_at', 'desc')->paginate(4);
        return view('produto.produtos', compact('produtos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('produto.cadastro');
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(ProdutoRequest $request)
    {
        // dd($request->only(['nome', 'descricao']));
        // dd($request->input());
        // dd($request->all());

        $produto = new Produto();
        $produto->fill($request->all());
        $produto->save();

        return redirect()->route('produtos.index');

    //     $dataForm = $request->validated();
        
    //     //$this->validate($request, $this->produto->rules);

    //     $insert = $this->produto->insert($dataForm);

    //     if ($insert)
    //         return redirect('/produtos');
    //     else
    //         return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $produto = Produto::findOrFail($id);
        return view('produto.show', compact('produto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produto = Produto::findOrfail($id);
        return view('produto.edit', compact('produto'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function update(ProdutoRequest $request, $id)
    {
        $produto = Produto::findOrfail($id);
        $produto->fill($request->except('_token'));
        $produto->save();

        return redirect()->route('produtos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produto = Produto::findOrFail($id);
        $produto->delete();
        
        return redirect()->route('produtos.index');
    }

    public function test()
    {

        $res = $this->produto
            ->where('quantidade', 10)
            ->delete();

        // $prod = $this->produto->find(5);

        // $res = $prod->update([
        //     "nome" => "Mclaren Senna",
        //     "descricao" => "Hypercar of Mclaren"
        // ]);

        if ($res)
            return "excluido COM SUCESSO";
        else
            return "Erro!";
        

        // $prod->nome = 'Lamborghini';
        // $prod->descricao = 'V12 com 650cv';

        // $prod->save();

        
    //     $insert = $this->produto->insert([
    //         "nome"       => "Ferrari 458",
    //         "descricao"  => "V8 com 550cv",
    //         "quantidade" => 3
    //     ]);

    //     if($insert)
    //         return "Inserido com sucesso, verifique o banco de dados {$insert['nome']}";
    //     else {
    //         return 'Falha ao inserir';
    //     }
    // }
    }

}