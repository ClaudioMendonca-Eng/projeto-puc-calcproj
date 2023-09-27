<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Destalhes do usuário') }} - {{ $user->name }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <li>
                        Nome: {{ $user->name }} -
                        Email: {{ $user->email }} -
                        Função: {{ $user->funcao }}
                    </li>
                    <form action="{{ route('users.destroy', $user->id) }}" method="post">
                        @method('DELETE')
                        @csrf
                        <button type="submit">Deletar</button>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>




<h1>Lista de usuarios</h1>
<ul>

</ul>

