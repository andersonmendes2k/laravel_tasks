@extends('layouts.app')

@section('pag-title')
<h1 style="margin-bottom: 30px">Lista de Clientes</h1>
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
					<td style="font-size: 14px; font-weight: bold;">{{$client->id }}</td>
					<td style="font-size: 14px; font-weight: bold;"><a href="{{ route('clients.show', $client->id )}}">{{$client->name }}</td>
					<td style="font-size: 14px; font-weight: bold;">{{$client->email }}</td>
					<td>
						<a class="btn btn-primary"href="{{ route('clients.edit', $client->id )}}">Editar</a>
						<form style="display: inline;" action="{{ route('clients.destroy', $client->id ) }}" method="post">
							{{ csrf_field() }}
							{{ method_field('DELETE') }}

							<button class="btn btn-danger" type="submit"
							onclick="return confirm('Deseja remover o cliente {{$client->name}} ?')">Remover</button>
						</form>
					</td>
				</tr>
				@empty
				<tr>
					<td>Nenhum cadastro</td>
				</tr>
				@endforelse
			</tbody>
		</table>
		 <a href="{{ route('clients.create')}}" class='btn btn-secondary'>Criar</a>

	</div>
</div>
@endsection