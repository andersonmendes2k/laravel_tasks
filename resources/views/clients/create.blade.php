@extends('layouts.app')

@section('pag-title')
<h1>Novo Cliente</h1>
@endsection

@section('content')

<div class="row">
	<div class="col-md-12">
		<form method="post" action="{{ route('clients.store') }}">
			{{ csrf_field() }}

		@include('clients.form')

		</form>
	</div>
</div>
@endsection