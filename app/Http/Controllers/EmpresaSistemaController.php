<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateEmpresaFormRequest;
use App\Models\EmpresaSistema;

class EmpresaSistemaController extends Controller
{
    protected $model;

    public function __construct(EmpresaSistema $empresa)
    {
        $this->model = $empresa;

        //$this->middleware(['can:users']);
    }

    public function index()
    {
        $empresas = $this->model->paginate();
        return view('empresa.index', compact('empresas'));
    }

    public function edit($id)
    {
        $empresa = $this->model->findOrFail($id);
        return view('empresa.edit', compact('empresa'));
    }

    public function update(UpdateEmpresaFormRequest $request, $id)
    {
        $empresa = $this->model->findOrFail($id);
        $empresa->update($request->all());
        $data = $request->all();

        if ($request->logo) {
           $extension = $request->logo->getClientOriginalExtension();

           $data['logo'] = $request->logo->storeAs('empresa', "logo.{$extension}");

        }

        $empresa->update($data);

        return redirect()->route('empresa.index');
    }




    public function store(UpdateEmpresaFormRequest $request)
    {
        $extension = $request->logo->getClientOriginalExtension();

           $data['logo'] = $request->logo->storeAs('empresa', "{$request->logo}.{$extension}");

    }

}
