<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Novo Cliente') }}
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
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            <h3>Ops! Algo deu errado.</h3>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    <form action="{{ route('clientes.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        {{-- adiciona id da empresa --}}
                        <input type="hidden" name="empresa_sistemas_id" value=1>
                        <input type="text" name="empresa" placeholder="Empresa:" value="{{ $cliente->empresa ?? old('empresa') }}">
                        <input type="text" name="cnpj" placeholder="CNPJ:" value="{{ $cliente->cnpj ?? old('cnpj') }}">
                        <input type="text" name="cep" placeholder="CEP:" value="{{ $cliente->cep ?? old('cep') }}">
                        <input type="text" name="endereco" placeholder="Endereço:" value="{{ $cliente->endereco ?? old('endereco') }}">
                        <input type="text" name="responsavel" placeholder="Responsavel:" value="{{ $cliente->responsavel ?? old('responsavel') }}">
                        <input type="text" name="telefone" placeholder="Telefone:" value="{{ $cliente->telefone ?? old('telefone') }}">
                        <input type="email" name="email" placeholder="Email:" value="{{ $cliente->email ?? old('email') }}">
                        <br>
                        <input type="file" name= "logo" value="{{ $cliente->logo ?? old('logo') }}">
                        <br>
                        <button type="submit">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
