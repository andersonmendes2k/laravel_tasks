@extends('layouts.app')

@section('content')

<div class="container">
	<p>Cadastrar um novo cliente</p>
	<form action="/clients/new" method="post">
		Nome <input type="name" name="name">
		email <input type="email" name="email" >
		idade <input type="age" name="age">
		<button type="submit" name="enviar">Enviar</button>
	</form>

</div>

@endsection('content')