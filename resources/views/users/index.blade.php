<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Listagem dos usuários') }} <a href="{{ route('users.create') }}">Novo Usuário</a>
        </h2>
    </x-slot>
    <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
        <div class="max-w-xl">
            <form action="{{ route('users.index') }}" method="get">
                <input type="text" name="search" placeholder="Pesquisar:">
                <button type="submit">Pesquisar</button>
            </form>
        </div>
    </div>
    <div class="py-12">
        <div class="grid grid-cols-4 gap-4">
            @foreach($users as $user)
                <div class="max-w-fit mx-auto sm:px-6 lg:px-8 space-y-6">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 bg-white border-b border-gray-200">
                            <div class="grid grid-cols-2">
                                <img class="w-17 h-17 mb-9 rounded-full shadow-lg" src="{{ asset('storage/' . $user->image) }}" style="max-width: 50px;" alt="{{ $user->name }}">
                                <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-gray-600">{{ $user->name }}</h5>
                            </div>
                            <span class="text-sm text-gray-500 dark:text-gray-500">{{ $user->funcao }}</span>
                            <div class="flex mt-4 space-x-3 md:mt-6">
                                <a href="{{ route('users.edit', $user->id) }}" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-gray-900 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-700 dark:focus:ring-gray-700">Editar</a>
                                <a href="{{ route('users.show', $user->id) }}" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-gray-900 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-700 dark:focus:ring-gray-700">Detalhes</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div class="py">
        {{ $users->appends([
            'search' => request()->get('search', '')])
            ->links() }}

    </div>

</x-app-layout>
