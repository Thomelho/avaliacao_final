<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Capitais;
use App\Models\Estado;
use App\Models\Associacao;
use App\Models\AssociacaoCapitais;
class AssociacaoController extends Controller
{
    public function formCadastrarAssociacao() {
        $associacoes = Associacao::all();
        $produtos = Produto::all();
        return view("cadastro_associacao", ["users"=>$users, "capitais"=>$capitais]);
    }

    public function listar() {
        $capitais = Capital::all();
        

        return view("associacao", ["associacao"=>$associacao]);
    }

    public function cadastrar(Request $request)
    {
      $items = $request->input('items');
      $user = $request->input('user');
      $pedido = new associacao;
      $pedido->user_id = $user;
      $pedido->save();
      foreach ($items as $itemId => $quantity) {
          if ($quantity > 0) {
              $associacaoCapitais = new AssociacaoCapitais;
              $associacaoCapitais->associacao_id = $pedido->id;
              $associacaoCapitais->capitais_id = $itemId;
              $associacaoCapitais->quantidade = $quantity;
              $associacaoCapitais->save();
          }
      }

      return redirect('/listar_associacao');
   }
}
