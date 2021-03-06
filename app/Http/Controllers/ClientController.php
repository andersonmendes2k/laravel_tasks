<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ClientRequest;
use App\Client;
use app\User;
use Validator;
use Gate;
use Auth;

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

        $data = $request->all();

        $data['name'] = $request->input('name');
        $data['email'] = $request->input('email');
        $data['age'] = $request->input('age');
        $data['user_id'] = Auth::id();;

        if (Client::create($data)) {
            $request->session()->flash("success", "Cliente ". $data['name'] ." cadastrado com sucesso");
        }

        return redirect()->route('clients.index');

        }

    /**
     * Display the specified resource.
     *
     * @param  Client $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        return view('clients.show', compact('client'));
    }

    public function prevPDF()
    {
        $clients = Client::get();

        return view('clients.list_pdf', compact('clients'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Client $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {

        $this->authorize('update-client', $client);

        return view('clients.edit', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Client $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client)
    {

        Validator::make($request->all(), [
            'name'=>['required', 'max:100', 'min:3'],
            'email' => ['required', 'email'],
            'age' => ['required', 'max:3', 'min:1']
        ])->validate();

        $this->authorize('update-client', $client);

        $data = $request->all();

        if ($client->update($data)) {
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
    public function destroy(Request $request, Client $client)
    {

        $this->authorize('update-client', $client);

        if($client->delete()) {
            $request->session()->flash("success", "Cliente ". $client->name ." deletado com sucesso");
            return redirect()->route('clients.index');
         }

        
    }
}
