<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use App\Http\Requests\ClientRequest;
use App\Client;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::get();

        return view('clients.index', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clients.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ClientRequest $request)
    {

        $client = new Client;

        $client->name= $request->input('name');
        $client->email=$request->input('email');
        $client->age=$request->input('age');

        if ($client->save()) {
            $request->session()->flash("success", "Cliente ". $client->name ." cadastrado com sucesso");
        }

        return redirect()->route('clients.index');

        #return view('clients.newcad');

        }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $client = Client::findOrFail($id);

        return view('clients.show', compact('client'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $client = Client::findOrFail($id);

        return view('clients.edit', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        Validator::make($request->all(), [
            'name'=>['required', 'max:100', 'min:3'],
            'email' => ['required', 'email'],
            'age' => ['required', 'max:3', 'min:1']
        ])->validate();

        $client = Client::findOrFail($id);

        $client->name= $request->input('name');
        $client->email=$request->input('email');
        $client->age=$request->input('age');

        if ($client->save()) {
            $request->session()->flash("success", "Cliente ". $client->name ." editado com sucesso");
        }
        return redirect()->route('clients.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $client= Client::findOrFail($id);

        if($client->delete()) {
            $request->session()->flash("success", "Cliente ". $client->name ." deletado com sucesso");
            return redirect()->route('clients.index');
         }

        
    }
}
