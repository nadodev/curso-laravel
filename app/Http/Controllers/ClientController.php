<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClientRequest;
use App\Models\Client;

class ClientController extends Controller
{
    public function __construct(private Client $client, ){}

    public function index(Client $client)
    {
        $clients = $client->all();
        return view('clients.index',  compact('clients'));
    }

    public function create()
    {
        return view('clients.create');
    }

    public function store(ClientRequest $request)
    {
        $data = $request->except('_token');
        $this->client->create($data);


        session()->flash('success', 'Registro criado com sucesso.');

        return redirect()->route('clients.index');
    }

    public function show(int $id)
    {
        if(!$client = $this->client->find($id))
        {
            return redirect()->back();
        }

        return view('clients.show', compact('client'));
    }


    public function edit(int $id){

        $client = $this->client->find($id);
        if(!$client)
        {
            return redirect()->back();
        }

        return view('clients.editar', compact('client'));
    }

    public function update(ClientRequest $request, int $id)
    {
        $client = $this->client->find($id);
        $client->update($request->except('_token'));

        session()->flash('success', 'Registro Editado com sucesso.');

        return redirect()->route('clients.edit', ['id' => $client->id]);

    }

    public function destroy(int $id)
    {

        $client = $this->client->find($id);
        $client->delete();

        session()->flash('success', 'Registro Excluido com sucesso.');

        return redirect()->route('clients.index');

    }
}
