@extends('layout')
@section('content')
<section class="container m-5">
<h1 class="text-center">Gerenciar dados da Reserva</h1>
  <div class="container m-5">
  <form class="row g-3" method="post" action="{{ route('gerenciar-reserva') }}">
    @csrf 
      <div class="row center">
        <div class="col">
          <input type="text" id="numeroReserva" name="numeroReserva" class="form-control" placeholder="Digite o numero da Reserva" aria-label="First name">
        </div>
        <div class="col">
          <button type="submit" class="btn btn-info">Pesquisar</button>
        </div>
      </div>
    </form>
  </div>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">idcliente</th>
        <th scope="col">idfuncionario</th>
        <th scope="col">numeroquarto</th>
        <th scope="col">situacao</th>
        <th scope="col">valortotal</th>
        <th scope="col">dataentrada</th>
        <th scope="col">datasaida</th>
        <th scope="col">Editar</th>
        <th scope="col">Excluir</th>
      </tr>
    </thead>
    <tbody>
    @foreach($registrosReservas as $registrosReservasLoop)
      <tr>
      <th scope="row">{{$registrosReservasLoop->id}}</th>

          <td>{{$registrosReservasLoop->numeroquarto}}</td>
          <td>{{$registrosReservasLoop->situacao}}</td>
          <td>{{$registrosReservasLoop->valortotal}}</td>
          <td>{{$registrosReservasLoop->dataentrada}}</td>
          <td>{{$registrosReservasLoop->datasaida}}</td>
          
        <td>
          <a href="">
            <button type="button" class="btn btn-primary">X</button>
          </a>
        </td>
        <td>
        <form method="post" action="{{route('apaga-reserva', $registrosReservasLoop)}}">
            @method('delete')
            @csrf
            <button type="submit" class="btn btn-danger"> X </button>
         </form>
       
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</section>

@endsection
 

 