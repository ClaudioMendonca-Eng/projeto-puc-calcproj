<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateUserFormRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $model;

    public function __construct(User $user)
    {
        $this->model = $user;

        //$this->middleware(['can:users']);
    }


    public function index(Request $request)
    {
        $users = $this->model
                        ->getUsers(
                            search: $request->search ?? null
                        );

        return view('users.index', compact('users'));
    }

    public function show($id)
    {
        // $user = $this->model->where('id', $id)->first();
        if (!$user = $this->model->find($id))
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

        if ($request->image) {
           // $data['image'] = $request->image->store('users');
           $extension = $request->image->getClientOriginalExtension();

           $data['image'] = $request->image->storeAs('users', "{$request->name}.{$extension}");

        }

        $this->model->create($data);

        return redirect()->route('users.index');
    }

    public function edit($id)
    {
        if (!$user = $this->model->find($id))
        return redirect()->back();

        return view('users.edit', compact('user'));
    }

    public function update(StoreUpdateUserFormRequest $request, $id)
    {
        if (!$user = $this->model->find($id))
        return redirect()->route('users.index');

        $data = $request->only(['name', 'email', 'funcao']);
        if ($request->password)
            $data['password'] = bcrypt($request->password);

        $user->update($data);

        return redirect()->route('users.index');
    }

    public function destroy($id)
    {
        if (!$user = $this->model->find($id))
        return redirect()->route('users.index');

        $user->delete();

        return redirect()->route('users.index');
    }
}
