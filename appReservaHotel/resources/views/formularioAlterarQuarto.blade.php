@extends('layout')
@section('content')
<section class="container mt-5">
<form class="row g-3" method="Post" action="{{ route('alterar-quarto', $registroQuartos->id) }}">
@method('put')
@csrf
  
  <div class="col-md-6">
    <label for="inputZip" class="form-label">Digite o número do quarto:</label>
    <input type="text" class="form-control" id="inputNumeroQuarto" value="{{old('nome', $registroQuartos->numeroquarto)}}" name="numeroquarto" placeholder="Digite o número do quarto">
    @error('numeroQuarto')
    <div class="text-sm-start text-light">*Preencher o campo Número do Quarto.</div>
     @enderror
  </div>

  <div class="col-md-12">
    <select class="form-select" name="tipoquarto" aria-label="Defalt select example">
      <option selected>Tipo:</option>
      <option value="Classe A">Classe A</option>
      <option value="Comercial">Comercial</option>
      <option value="Suite">Suite</option>
    </select>
    @error('email')
    <div class="text-sm-start text-light">*Preencher o campo Tipo.</div>
    @enderror
  </div>

  <div class="col-md-3">
    <label for="inputValorQuarto" class="form-label">Valor:</label>
    <input type="text" class="form-control" id="inputValorQuarto" name="valordiaria">
    @error('email')
    <div class="text-sm-start text-light">*Preencher o campo Valor do Quarto.</div>
    @enderror
  </div>

  <div class="col-12">
    <button type="submit" class="btn btn-primary">Alterar</button>
  </div>
</form>
</section>
@endsection
 

 
 
    
   

 