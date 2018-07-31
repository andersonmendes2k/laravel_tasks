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

					<td style="font-size: 14px; font-weight: bold;">{{$client->id }} </td>
					<td style="font-size: 14px; font-weight: bold;"><a href="{{ route('clients.show', $client->id )}}">{{$client->name }}</td>
					<td style="font-size: 14px; font-weight: bold;">{{$client->email }}</td>
					<td>
						@can('update-client', $client)
						<a class="btn btn-primary"href="{{ route('clients.edit', $client->id )}}">Editar</a>
						<form style="display: inline;" action="{{ route('clients.destroy', $client->id ) }}" method="post">
							{{ csrf_field() }}
							{{ method_field('DELETE') }}
							<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">Remover</button>
							@endcan
							<!-- Modal -->
							<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
							  <div class="modal-dialog" role="document">
							    <div class="modal-content">
							      <div class="modal-header">
							        <h5 class="modal-title" id="exampleModalLabel">Remover {{ $client->name }} ?</h5>
							        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
							          <span aria-hidden="true">&times;</span>
							        </button>
							      </div>
							      <div class="modal-body">
							        Deseja realmente remover este cliente?</div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
							        <button type="submit" class="btn btn-danger">Confirmar</button>
							      </div>
							    </div>
							  </div>
							</div>
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
		 <a href="{{ url('clients/prev')}}" class='btn btn-info'>Ver PDF</a>
		 <a href="{{ url('clients/pdf')}}" class='btn btn-info'>Baixar PDF</a>
	</div>
</div>
@endsection