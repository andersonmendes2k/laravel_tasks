@extends('layouts.pdf')
@section('content')
		<table class="table table-striped">
			<thead>
				<tr>
					<th>Id</th>
					<th>Nome</th>
					<th>Email</th>
					<th>idade</th>
					</tr>
			</thead>
			<tbody>
				@forelse ($clients as $client)
				<tr>
					<td style="font-size: 14px; font-weight: bold;">{{$client->id }} </td>
					<td style="font-size: 14px; font-weight: bold;">{{$client->name }}</td>
					<td style="font-size: 14px; font-weight: bold;">{{$client->email }}</td>
					<td style="font-size: 14px; font-weight: bold;">{{$client->age }}</td>
				</tr>
				@empty
				<tr>
					<td>Nenhum cadastro</td>
				</tr>
				@endforelse
			</tbody>
		</table>
@endsection