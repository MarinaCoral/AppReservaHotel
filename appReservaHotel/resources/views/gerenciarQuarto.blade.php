@extends('layout')
@section('content')
<section class="container m-5">
<h1 class="text-center">Gerenciar dados do Quarto</h1>
  <div class="container m-5">
      
  <form class="row g-3" method="GET" action="{{ route('gerenciar-quarto') }}">
    @csrf 
      <div class="row center">
        <div class="col">
          <input type="text" id="numeroquarto" name="numeroquarto" class="form-control" placeholder="Digite o numero do quarto" aria-label="First name">
        </div>
        <div class="col">
          <button type="submit" class="btn btn-info">Buscar</button>
        </div>
      </div>
    </form>
  </div>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">Código</th>
        <th scope="col">Numero do quarto</th>
        <th scope="col">Tipo</th>
        <th scope="col">Valor</th>
        <th scope="col">Editar</th>
        <th scope="col">Excluir</th>
      </tr>
    </thead>
    <tbody>
    @foreach($registrosQuartos as $registrosQuartosLoop)
    <tr>
          <th scope="row">{{$registrosQuartosLoop->id}}</th>
          <td>{{$registrosQuartosLoop->numeroquarto}}</td>
          <td>{{$registrosQuartosLoop->tipoquarto}}</td>
          <td>{{$registrosQuartosLoop->valordiaria}}</td>
        <td>
          <a href="{{route('mostrar-quarto',$registrosQuartosLoop->id)}}">
            <button type="button" class="btn btn-primary">X</button>
          </a>
        </td>
        <td>
        <form method="post" action="{{route('apaga-quarto', $registrosQuartosLoop)}}">
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
 
 
  
     
 