@extends('layouts.app')
@section('titulo', 'Editar Clientes')
@section('content')
@if ($errors->any())

@foreach ($errors->all() as $error)
<div class="flash-message flash-message--error flash-message--left">
    {{ $error }}
</div>
@endforeach
@endif
@if (session()->has('success'))
    <div class="flash-message flash-message--success flash-message--left">
        {{ session('success') }}
    </div>
@endif

<section class="form">
    <h1>Clientes</h1>
    <div class="card">
        <div class="card__header">
          <div class="text-header">Editar Clientes</div>
        </div>
        <div class="card__body">
          <form action="{{ route('clients.update', $client)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <div class="form-group__content">
                    <label for="nome">Nome:</label>
                    <input required="" class="form-control" name="nome" id="nome" type="text" value="{{$client['nome']}}">
                </div>
            </div>
            <div class="form-group">
                <div class="form-group__content">
                    <label for="endereco">Endereço:</label>
                    <input required="" class="form-control" name="endereco" id="endereco" type="text" value="{{$client['endereco']}}">
                </div>
            </div>
            <div class="form-group">
                <div class="form-group__content">
                    <label for="telefone">Telefone:</label>
                    <input required="" class="form-control" name="telefone" id="telefone" type="text"  value="{{$client['telefone']}}">
                </div>
            </div>
            <div class="form-group">
                <div class="form-group__content">
                    <label for="observacao">Observação:</label>
                    <textarea name="observacao" id="observacao" cols="30" rows="10">{{$client['observacao']}}</textarea>
                </div>
            </div>
           <input type="submit" class="btn" value="Editar">
        </form>
        </div>
      </div>

</section>
@endsection
