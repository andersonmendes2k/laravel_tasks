@extends('layouts.app')

@section('content')

<div class="container">
	@forelse ($clients as $client)
		<p>--------------------------------------------</p>
	<p>Cliente: {{$client->id }}</p>
		<p>Nome: {{ $client->name }}</p>
		<p>Email: {{ $client->email }}</p>
		<p>idade: {{ $client->age }}</p>
	@empty
		<p>Nenhum cliente cadastrado</p>
	@endforelse
</div>

@endsection