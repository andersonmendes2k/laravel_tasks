@extends('layouts.app')

@section('pag-title')
<h1>Detalhes do Clientes</h1>
@endsection

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
        <div class="card-body">
        <p>O id do projeto é {{ $project->id }}</p>
        <p>O nome do projeto é {{ $project->name }}</p>
        <p>O custo do projeto é {{ $project->cost }}</p>
        <p>O descrição do projeto é {{ $project->description }}</p>
      </div>
        </div>
        <a style="margin-top: 20px" href="{{ route('projects.index')}}" class='btn btn-secondary'>Voltar</a>
    </div>
</div>
@endsection