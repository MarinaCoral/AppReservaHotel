<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Quarto;

class QuartoController extends Controller
{
    public function showHome()
    {
        return view('home');
    }
         
    public function showFormularioCadastro(Request $request){
        return view("formularioCadastroQuarto");
    }

    public function cadQuarto(Request $request){
        $dadosValidos = $request->validate([
            'numeroquarto' => 'integer|required',
            'tipoquarto' => 'string|required',
            'valordiaria' => 'numeric|required'
        ]);
        Quarto::create($dadosValidos);
        return Redirect::route('home');
    }
    public function mostrarGerenciarQuartoId(Quarto $id){
        return view('formularioAlterarQuarto',['registroQuartos' => $id]);
    }


    public function gerenciarQuarto(Request $request){
        $dadosQuarto = Quarto::query();
        $dadosQuarto->when($request->numeroquarto,function($query,$valor){
        $query->where('numeroquarto','like','%'.$valor.'%');
        });
        $dadosQuarto = $dadosQuarto->get();
        return view('gerenciarQuarto',['registrosQuartos' => $dadosQuarto]);
    }
    
    public function destroy(Quarto $id){
        $id->delete();
        return Redirect::route('home');
  }
  public function alterarQuartoBanco(Quarto $id,Request $request){
    $dadosValidos = $request->validate([
        'numeroquarto' => 'integer|required',
        'tipoquarto' => 'string|required',
        'valordiaria' => 'numeric|required'
    ]);
    $id->fill($dadosValidos);
    $id->save();
    return Redirect::route('home');
}
}
 

   

  

 
