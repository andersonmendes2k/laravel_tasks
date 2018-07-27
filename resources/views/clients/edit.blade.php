@extends('layouts.app')

@section('pag-title')
<h1>Editar Cliente</h1>
@endsection

@section('content')

<div class="row">
	<div class="col-md-12">
		<form method="post" action="{{ route('clients.update', $client->id) }}">
			{{ csrf_field() }}
			{{ method_field('PUT')}}

		@include('clients.form')

		</form>
	</div>
</div>
@endsection