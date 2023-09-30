<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateEmpresaFormRequest;
use App\Models\EmpresaSistema;

class EmpresaSistemaController extends Controller
{

    public function index()
    {
       $empresas = EmpresaSistema::get();
         return view('empresa.index', compact('empresas'));
    }

    public function edit($id)
    {
        $empresa = EmpresaSistema::findOrFail($id);
        return view('empresa.edit', compact('empresa'));
    }

    public function update(UpdateEmpresaFormRequest $request, $id)
    {
        $data = $request->all();

        if ($request->logo) {
           // $data['image'] = $request->image->store('users');
           $extension = $request->logo->getClientOriginalExtension();

           $data['logo'] = $request->logo->storeAs('empresa', "logo.{$extension}");

        }

        return redirect()->route('empresa.index')->with('message', 'Empresa atualizada com sucesso!');
    }



    public function store(UpdateEmpresaFormRequest $request)
    {
        $extension = $request->logo->getClientOriginalExtension();

           $data['logo'] = $request->logo->storeAs('empresa', "{$request->logo}.{$extension}");

    }

}
