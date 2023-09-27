<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateUserFormRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $search = request('search');
        $users = User::where(function ($query) use ($search) {
            if ($search) {
                $query->where('name', 'LIKE', "%{$search}%");
                $query->orWhere('email', 'LIKE', "%{$search}%");
            }
        })->get();

        return view('users.index', compact('users'));
    }

    public function show($id)
    {
        // $user = User::where('id', $id)->first();
        if (!$user = User::find($id))
        return redirect()->route('users.index');

        return view('users.show', compact('user'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(StoreUpdateUserFormRequest $request)
    {
        $data = $request->all();

        $data['password'] = bcrypt($data['password']);

        User::create($data);

        return redirect()->route('users.index');
    }

    public function edit($id)
    {
        if (!$user = User::find($id))
        return redirect()->back();

        return view('users.edit', compact('user'));
    }

    public function update(StoreUpdateUserFormRequest $request, $id)
    {
        if (!$user = User::find($id))
        return redirect()->route('users.index');

        $data = $request->only(['name', 'email', 'funcao']);
        if ($request->password)
            $data['password'] = bcrypt($request->password);

        $user->update($data);

        return redirect()->route('users.index');
    }

    public function destroy($id)
    {
        if (!$user = User::find($id))
        return redirect()->route('users.index');

        $user->delete();

        return redirect()->route('users.index');
    }
}