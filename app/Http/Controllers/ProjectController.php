<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;
use App\Http\Requests\ProjectRequest;


class ProjectController extends Controller
{

    public function index()
    {

    	$projects = Project::get();

    	return view('projects.index', compact('projects'));
    
    }

    public function create()
    {

    	return view('projects.create');
    
    }

    public function store(ProjectRequest $request){

    	$result = Project::create($request->all());

    	if ($result){
    		$request->session()->flash('success','Projeto criado com sucesso');
    	} else {
    		$request->session()->flash('error', 'Não foi possivel criar o projeto');
    	}

    	return redirect()->route('projects.index');
    }

    public function show(Project $project)
    {
    	return view('projects.show', compact('project'));
    }

    public function edit(Project $project)
    {
    	return view('projects.edit', compact('project'));
    }

    public function update(ProjectRequest $request, Project $project)
    {
    	$result = $project->update($request->all());

    	if ($result) {
    		$request->session()->flash('success','Projeto editado com sucesso');
    	} else {
    		$request->session()->flash('error', 'Não foi possivel editar o projeto');
    	}

    	return redirect()->route('projects.index');
    }

    public function destroy(Request $request, Project $project){

    	if ($project->delete()){
    		$request->session()->flash('success','Projeto deletado com sucesso');
    	} else {
    		$request->session()->flash('error', 'Não foi possivel deletar o projeto');
    	}

    	return redirect()->route('projects.index');
    }

}
