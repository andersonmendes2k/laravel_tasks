@extends('layouts.app')

@section('pag-title')
<h1>Novo Projeto</h1>
@endsection

@section('content')

<div class="row">
	<div class="col-md-12">
		<form method="post" action="{{ route('projects.store') }}">
			{{ csrf_field() }}

		@include('projects.form')

		</form>
	</div>
</div>
@endsection