<?php

namespace App\Http\Controllers;
use App\Models\capitais;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{

    public function criar(Request $request) {
        $capitais = new Produto;
        $capitais->nome = $request->nome;
        $capitais->descricao = $request->descricao;
        $capitais->preco = $request->regiao;
       

        $produto->save();
        return redirect('/listar_capitais');
    }

    public function formCriarProduto() {
        return view("cadastro_capitais");
    }

    public function listar() {
        $capitais = capital::all();

        return view("capitais", ["capitais"=>$capitais]);
    }

    public function deletar($id) {
        $capitais = new Produto;

        $capitais->find($id)->delete();

        return redirect('/listar_capitais');

    }
}
