@extends('layouts.app')
@section('titulo', 'Cadastrar Clientes')
@section('content')
@if ($errors->any())

@foreach ($errors->all() as $error)
<div class="alert alert-danger" role="alert">
    {{ $error }}
</div>
@endforeach
@endif
@if (session()->has('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<section class="form">
    <h1>Clientes</h1>
    <div class="card">
        <div class="card__header">
          <div class="text-header">Cadastrar Clientes</div>
        </div>
        <div class="card__body">
          <form action="{{ route('clients.store')}}" method="POST">
            @csrf
            <div class="form-group">
                <div class="form-group__content">
                    <label for="nome">Nome:</label>
                    <input required="" class="form-control" name="nome" id="nome" type="text">
                </div>
            </div>
            <div class="form-group">
                <div class="form-group__content">
                    <label for="endereco">Endereço:</label>
                    <input required="" class="form-control" name="endereco" id="endereco" type="text">
                </div>
            </div>
            <div class="form-group">
                <div class="form-group__content">
                    <label for="telefone">Telefone:</label>
                    <input required="" class="form-control" name="telefone" id="telefone" type="text">
                </div>
            </div>
            <div class="form-group">
                <div class="form-group__content">
                    <label for="observacao">Observação:</label>
                    <textarea name="observacao" id="observacao" cols="30" rows="10"></textarea>
                </div>
            </div>
           <input type="submit" class="btn" value="Cadastrar">
        </form>
        </div>
      </div>

</section>
@endsection
