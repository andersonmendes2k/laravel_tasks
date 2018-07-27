@extends('layouts.app')

@section('pag-title')
<h1>Detalhes do Clientes</h1>
@endsection

@section('content')

<div class="row">
	<div class="col-md-12">
		<p>ID do Cliente: {{ $client->id }}</p>
		<p>Nome do Cliente: {{ $client->name }}</p>
		<p>Email do Cliente: {{ $client->email }}</p>
		<p>Idade do Cliente: {{ $client->age }}</p>
		<p>Data do cadastro: {{ $client->created_at }}</p>
		<a href="{{ route('clients.index')}}"> Voltar</a>
	</div>
</div>
@endsection