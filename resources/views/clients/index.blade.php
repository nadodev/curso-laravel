@extends('layouts.app')
@section('titulo', 'Clientes')
@if ($errors->any())

@foreach ($errors->all() as $error)
<div class="flash-message flash-message--error flash-message--right">
    {{ $error }}
</div>
@endforeach
@endif
@if (session()->has('success'))
<div class="flash-message flash-message--success  flash-message--right">
        {{ session('success') }}
    </div>
@endif
@section('content')
<section class="main">
    <h1>Clientes</h1>
<ul class="lista">
    @foreach($clients as $client)
    <div class="lista__wrapper">
        <li><strong>Nome:</strong> {{ $client['nome'] }} </li>
        <li><strong>Endereço:</strong> {{ $client['endereco'] }} </li>
        <li><strong>Telefone:</strong> {{ $client['telefone'] }} </li>
        <li><strong>OBS:</strong> {{ $client['observacao'] }} </li>
        <li><strong>Ação</strong>
            <button>
                <a href="{{ route('clients.edit', $client)}}">Atualizar</a>
            </button>
                <form action="{{ route('clients.destroy', $client->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="red" type="submit">Excluir</button>
                </form>
        </li>
    </div>
    @endforeach
</ul>
</section>
@endsection
