<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Novo Perfil') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <header>
                        <h2 class="text-lg font-medium text-gray-900">
                            {{ __('Criar') }}
                        </h2>

                        <p class="mt-1 text-sm text-gray-600">
                            {{ __("Update your account's profile information and email address.") }}
                        </p>
                    </header>
                    @include('users.includes.validations-form')
                    <form action="{{ route('users.store') }}" method="post" enctype="multipart/form-data">

                        @csrf
                        <input type="text" name="name" placeholder="Nome:" value="{{ $user->name ?? old('name') }}">
                        <input type="email" name="email" placeholder="Email:" value="{{ $user->email ?? old('email') }}">
                        <input type="password" name="password" placeholder="Senha:">
                        <input type="text" name="funcao" placeholder="Função:" value="{{ $user->funcao ?? old('funcao') }}">
                        <br>
                        <input type="file" name= "image" value="{{ $user->image ?? old('image') }}">
                        <br>
                        <button type="submit">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
