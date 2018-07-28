@extends('layouts.app')

@section('pag-title')
<h1>Novo Cliente Cadastrado!!!</h1>
@endsection

@section('content')

<div class="d-flex justify-content-center">
	<a href="{{ route('clients.index')}}" class='btn btn-primary' style="margin-top: 50px" >Voltar</a>

</div>

@endsection