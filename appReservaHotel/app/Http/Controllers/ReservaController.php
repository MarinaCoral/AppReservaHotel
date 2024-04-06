<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Reserva;

class ReservaController extends Controller
{
    public function showHome()
    {
        return view('home');
    }
    
    public function showFormularioCadastro(Request $request){
        return view("formularioCadastroReserva");
    }

    public function cadReserva(Request $request){
        $dadosValidos = $request->validate([
            'idcliente' => 'integer|required',
            'idfuncionario' => 'integer|required',
            'numeroquarto' => 'integer|required',
            'situacao' => 'string|required',
            'valortotal' => 'numeric|required',
            'dataentrada' => 'date|required',
            'datasaida' => 'date|required'
        ]);
        Reserva::create($dadosValidos);
        return Redirect::route('home');
    }
    public function mostrarGerenciarReservaId(Reserva $id){
        return view('xxxxxxxx',['registroReservas' => $id]);
    }
    public function gerenciarReserva(Request $request){
        $dadosReserva = Reserva::query();
        $dadosReserva->when($request->nome,function($query,$valor){
        $query->where('nome','like','%'.$valor.'%');
        });
        $dadosReserva = $dadosReserva->get();
        return view('gerenciarReserva',['registrosReservas' => $dadosReserva]);
    }
    public function destroy(Reserva $id){
        $id->delete();
        return Redirect::route('home');
  }
  public function alterarReservaBanco(Reserva $id,Request $request){
    $dadosValidos = $request->validate([
        'idcliente' => 'integer|required',
        'idfuncionario' => 'integer|required',
        'numeroquarto' => 'integer|required',
        'situacao' => 'string|required',
        'valortotal' => 'numeric|required',
        'dataentrada' => 'date|required',
        'datasaida' => 'date|required'
    ]);
    $id->fill($dadosValidos);
    $id->save();
    return Redirect::route('home');
}
}
 

 
 