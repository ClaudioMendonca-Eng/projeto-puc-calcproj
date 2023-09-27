<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Listagem dos usuários') }} <a href="{{ route('users.create') }}">Novo Usuário</a>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="{{ route('users.index') }}" method="get">
                        <input type="text" name="search" placeholder="Pesquisar:">
                        <button type="submit">Pesquisar</button>
                    </form>
                    @foreach($users as $user)
                        <li>
                            {{ $user->name }} -
                            {{ $user->email }} -
                            {{ $user->funcao }}
                            | <a href="{{ route('users.edit', $user->id) }}">Editar</a>
                            | <a href="{{ route('users.show', $user->id) }}">Detalhes</a>
                        </li>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
