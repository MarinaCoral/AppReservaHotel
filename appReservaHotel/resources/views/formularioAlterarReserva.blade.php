@extends('layout')
@section('content')

<section class="container mt-5">
    <h1> Reserva de Quarto </h1>
    <form class="row g-3" method="Post" action="{{ route('alterar-reserva', $registroReservas->id ) }}">
@method('put')
@csrf

  <div class="col-md-3">
    <label for="inputCodigoFuncionario" class="form-label">Digite o Código do Funcionário:</label>
    <input type="text" class="form-control" id="inputCodigoFuncionario" name="idfuncionario">
    @error('idfuncionario')
    <div class="text-sm-start text-light">*Preencher o Código do Funcionário.</div>
    @enderror
  </div>

  <div class="col-md-9">
    <label for="inputNomeFuncionario" class="form-label">Nome do Funcionário:</label>
    <input type="text" class="form-control" id="inputNomeFuncionario" readonly name="idfuncionario">
    @error('idfuncionario')
    <div class="text-sm-start text-light">*Preencher o Nome do Funcionário.</div>
    @enderror
  </div>

  <div class="col-md-3">
    <label for="inputCodigoCliente" class="form-label">Digite o Código do Cliente:</label>
    <input type="text" class="form-control" id="inputCodigoCliente" name="idcliente">
    @error('idcliente')
    <div class="text-sm-start text-light">*Preencher o Código do Cliente.</div>
    @enderror
  </div>

  <div class="col-md-9">
    <label for="inputNomeCliente" class="form-label">Digite o Nome do cliente:</label>
    <input type="email" class="form-control" id="inputNomeCliente" readonly nome="nomecliente">
    @error('nomecliente')
    <div class="text-sm-start text-light">*Preencher o Nome do cliente.</div>
    @enderror
  </div>

  <div class="col-md-4">
    <label for="inputCodigoQuarto" class="form-label">Digite o numero do quarto:</label>
    <input type="text" class="form-control" id="inputNumeroQuarto" name="numeroquarto">
    @error('numeroQuarto')
    <div class="text-sm-start text-light">*Preencher o campo Número do Quarto.</div>
    @enderror
  </div>

  <div class="col-md-4">
     <select class="form-select" name="tipoquarto" aria-label="Defalt select example">
       <option selected>Tipo:</option>
       <option value="Classe A">Classe A</option>
       <option value="Comercial">Comercial</option>
       <option value="Suite">Suite</option>
     </select>
     @error('tipoquarto')
    <div class="text-sm-start text-light">*Preencher o campo Número do Quarto.</div>
     @enderror
   </div>
  
  <div class="col-md-4">
    <label for="inputTipoQuarto" class="form-label"> Valor da Diária:</label>
    <input type="text" class="form-control" id="inputValorDiaria" readonly name="valordiaria">
    @error('valordiaria')
    <div class="text-sm-start text-light">*Preencher o campo Número do Quarto.</div>
     @enderror
  </div>

  <div class="col-md-4">
    <label for="inputValorDiaria" class="form-label"> Data da Entrada:</label>
    <input type="date" class="form-control" id="inputDataEntrada"  name="dataentrada">
    @error('numeroQuarto')
    <div class="text-sm-start text-light">*Preencher o campo Número do Quarto.</div>
     @enderror
  </div>

  <div class="col-md-4">
    <label for="inputDataSaida" class="form-label">Data de Saída:</label>
    <input type="date" class="form-control" id="inputDataSaida"  name="datasaida">
    @error('numeroQuarto')
     <div class="text-sm-start text-light">*Preencher o campo Número do Quarto.</div>
    @enderror
  </div>

  <div class="col-md-4">
    <label for="inputValorTotal" class="form-label">Valor Total:</label>
      <div class="input-group md-3">
        <span class="input-group-text">R$</span>
        <input type="text" class="form-control" name="valortotal" aria-label="Amount (to the nearest dollar)">
        <span class="input-group-text">.00</span>
      </div>
      @error('numeroQuarto')
       <div class="text-sm-start text-light">*Preencher o campo Número do Quarto.</div>
      @enderror
  </div>
   

  <div class="col-md-5">
    <label for="inputSituacaoPagamento" class="form-label">Situação do Pagamento:</label>
    <select class="form-select" name="situacao" aria-label="Defalt select example">
      <option selected value>Pago</option>
      <option value>Pendente</option>
    </select>
    @error('numeroQuarto')
    <div class="text-sm-start text-light">*Preencher o campo Número do Quarto.</div>
    @enderror
  </div>

  <div class="col-12">
    <button type="submit" class="btn btn-primary">Alterar</button>
    </div>
    </form>
</section>
@endsection
 