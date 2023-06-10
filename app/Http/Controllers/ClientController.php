<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClientRequest;
use App\Models\Client;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;


class ClientController extends Controller
{
    public function __construct(private Client $client, ){}

    /**
     * Method index - Lista todos os registros
     *
     * @param Client $client
     *
     * @return View
     */
    public function index(Client $client) : View
    {
        $clients = $client->all();
        return view('clients.index',  compact('clients'));
    }

    /**
     * Method create - Retorna a view de criação
     *
     * @return View
     */
    public function create() : View
    {
        return view('clients.create');
    }

    /**
     * Method store - Salva o registro
     *
     * @param ClientRequest $request [explicite description]
     *
     * @return RedirectResponse
     */
    public function store(ClientRequest $request) : RedirectResponse
    {
        $data = $request->except('_token');
        $this->client->create($data);


        session()->flash('success', 'Registro criado com sucesso.');

        return redirect()->route('clients.index');
    }

    /**
     * Method show - Mostra o registro selecionado pelo id
     *
     * @param int $id
     *
     * @return View
     */
    public function show(int $id) : View
    {
        if(!$client = $this->client->find($id))
        {
            return redirect()->back();
        }

        return view('clients.show', compact('client'));
    }


    /**
     * Method edit - Retorna a view de edição
     *
     * @param int $id
     *
     * @return View
     */
    public function edit(int $id) : View
    {

        $client = $this->client->find($id);
        if(!$client)
        {
            return redirect()->back();
        }

        return view('clients.edit', compact('client'));
    }

    /**
     * Method update - Atualiza o registro selecionado pelo id
     *
     * @param ClientRequest $request
     * @param int $id
     *
     * @return RedirectResponse
     */
    public function update(ClientRequest $request, int $id) : RedirectResponse
    {
        $client = $this->client->find($id);
        $client->update($request->except('_token'));

        session()->flash('success', 'Registro Editado com sucesso.');

        return redirect()->route('clients.index');

    }

    /**
     * Method destroy - Exclui o registro selecionado pelo id
     *
     * @param int $id
     *
     * @return RedirectResponse
     */
    public function destroy(int $id) : RedirectResponse
    {
        $client = $this->client->find($id);
        $client->delete();

        session()->flash('success', 'Registro Excluido com sucesso.');

        return redirect()->route('clients.index');
    }
}
