@extends('layout')
@section('content')
<section class="container mt-5">
    <form class="row g-3" method="post" action="{{ route('alterar-cliente', $registrosClientes->id)}}">  
        @method('put')
        @csrf  
        <div class="col-md-12">
            <label for="inputNome" class="form-label">Nome:</label>
            <input type="text" class="form-control" id="inputNome" value="{{old('nome', $registrosClientes->nome)}}" name="nome">
            @error('nome')
            <div class="text-sm-start text-light">*Preencher o campo Nome.</div>
            @enderror
        </div>

        <div class="col-md-12">
            <label for="inputEmail" class="form-label">Email:</label>
            <input type="text" class="form-control" id="inputEmail" value="{{old('email', $registrosClientes->email)}}"  name="email">
            @error('email')
            <div class="text-sm-start text-light">*Preencher o campo Email.</div>
            @enderror
        </div>

        <div class="col-3">
            <label for="inputFone" class="form-label">Fone:</label>  
            <input type="text" class="form-control" id="inputFone" value="{{old('email', $registrosClientes->fone)}}" name="fone">
            @error('fone')
            <div class="text-sm-start text-light">*Preencher o campo Fone.</div>
            @enderror
        </div>

        <div class="col-12">
            <button type="submit" class="btn btn-primary">Alterar</button>
        </div>
    </form>
</section>
@endsection
