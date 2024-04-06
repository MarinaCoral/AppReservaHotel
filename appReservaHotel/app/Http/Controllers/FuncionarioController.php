<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Funcionario;

class FuncionarioController extends Controller
{
     
    public function showHome()
    {
        return view('home');
    }

    public function showFormularioCadastro(Request $request){
        return view("formularioCadastroFuncionario");
    }

    public function cadFuncionario(Request $request){
        $dadosValidos = $request->validate([
            'nome' => 'string|required',
            'funcao' => 'string|required'
        ]);
        Funcionario::create($dadosValidos);
        return Redirect::route('home');
    }

    public function mostrarGerenciarFuncionarioId(Request $id){
        return view('formularioAlterarFuncionario',['registrosFuncionarios' => $id]);

}

    public function gerenciarFuncionario(Request $request){
        $dadosFuncionario = Funcionario::query();
        $dadosFuncionario->when($request->nome,function($query,$valor){
        $query->where('nome','like','%'.$valor.'%');
        });
        $dadosFuncionario = $dadosFuncionario->get();
        return view('gerenciarFuncionario',['registrosFuncionarios' => $dadosFuncionario]);
    }


    public function destroy(Funcionario $id){
          $id->delete();
          return Redirect::route('home');
    }

    public function alterarFuncionarioBanco(Funcionario $funcionario, Request $request){
        $dadosValidos = $request->validate([
            'nome' => 'string|required',
            'funcao' => 'string|required'
        ]);
        $funcionario->fill($dadosValidos);
        $funcionario->save();
        return Redirect::route('home');
    }
    
}
