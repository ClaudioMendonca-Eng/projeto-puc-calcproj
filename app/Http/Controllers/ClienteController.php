<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateClienteFormRequest;
use App\Models\Cliente;
use App\Models\EmpresaSistema;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    protected $model;
    protected $empresa;

    public function __construct(Cliente $model, EmpresaSistema $empresa)
    {
        $this->model = $model;
        $this->empresa = $empresa;
    }

    public function index()
    {
        $clientes = $this->model->paginate(10);
        return view('clientes.index', compact('clientes'));
    }

    public function show($id)
    {
        $cliente = $this->model->find($id);
        return view('clientes.show', compact('cliente'));
    }

    public function create()
    {
        $empresas = $this->empresa->get();
        return view('clientes.create', compact('empresas'));
    }


    public function store(StoreUpdateClienteFormRequest $request)
    {
        if ($request->logo) {
            $extension = $request->logo->getClientOriginalExtension();

            $data['logo'] = $request->logo->storeAs('cliente', "{$request->name}.{$extension}");
    }
        $this->model->create($request->all());
        return redirect()->route('clientes.index');
    }



    public function edit($id)
    {
        if (!$cliente = $this->model->find($id))
        return redirect()->back();

        return view('clientes.edit', compact('cliente'));
    }

    public function update(StoreUpdateClienteFormRequest $request, $id)
    {
        if (!$cliente = $this->model->find($id))
        return redirect()->router('clientes.index');

        $cliente->update($request->all());
        return redirect()->route('clientes.index');
    }

    public function destroy($id)
    {
        if (!$cliente = $this->model->find($id))
        return redirect()->route('clientes.index');

        $cliente->delete();
        return redirect()->route('clientes.index');

    }

}
