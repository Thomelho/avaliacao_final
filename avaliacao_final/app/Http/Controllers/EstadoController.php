<?php

namespace App\Http\Controllers;

use App\Models\Estado;
use Illuminate\Http\Request;

class EstadoController extends Controller
{
    public function criar(Request $request) {
        $estado = new Estado;
        $estado->name = $request->name;
        $estado->regiao = $request->regiao;
        $estado->sotaque = $request->sotaque;

        $estado->save();
        return redirect('/listar_estados');
    }

    public function listar() {
        $estados = estado::all();

        return view("estados", ["estados"=>$estados]);
    }

    public function formCriarEstados() {
        return view("cadastro_estados");
    }

    public function deletar($id) {
        $user = new Estado;
        $user->find($id)->delete();
        return redirect('/listar_estados');
    }

    public function formEditarEstados($id) {
        $estado = Estado::find($id);

        return view('editar_estados', ["estados" => $estados]);
    }


    public function editar(Request $request) {
        User::where('id', $request->id)->update([
            'name' => $request->name,
            'regiao' => $request->regiao,
            'sotaque' => $request->sotaque
        ]);

        return redirect('/listar_estados');
    }

}

