@extends('layouts.app')

@section('pag-title')
<h1>Lista de Clientes</h1>
@endsection

@section('content')

<div class="row">
	<div class="col-md-12">
		<table class="table table-striped">
			<thead>
				<tr>
					<th>Id</th>
					<th>Nome</th>
					<th>Email</th>
					<th>Ação</th>
					</tr>
			</thead>
			<tbody>
				@forelse ($clients as $client)
				<tr>
					<td>{{$client->id }}</td>
					<td><a href="{{ route('clients.show', $client->id )}}">{{$client->name }}</td>
					<td>{{$client->email }}</td>
					<td>
						<a href="{{ route('clients.edit', $client->id )}}">Editar</a>
					</td>
				</tr>
				@empty
				<tr>
					<td>Nenhum cadastro</td>
				</tr>
				@endforelse
			</tbody>
		</table>
		 <a href="{{ route('clients.create')}}" class='btn btn-primary'>Criar</a>

	</div>
</div>
@endsection