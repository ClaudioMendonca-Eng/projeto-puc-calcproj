<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar Empresas do Sistema') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <header>
                        <h2 class="text-lg font-medium text-gray-900">
                            {{ __('Editar') }}
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

                    <form action="{{ route('empresa.update', $empresa->id) }}" method="post" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <x-input-label for="empresa" :value="__('Empresa')" />
                                <x-text-input id="empresa" name="empresa" type="text" class="mt-1 block w-full" :value="old('empresa', $empresa->empresa)" required autofocus autocomplete="empresa" />
                                <x-input-error class="mt-2" :messages="$errors->get('name')" />
                            </div>

                            <div>
                                <x-input-label for="cnpj" :value="__('CNPJ')" />
                                <x-text-input id="cnpj" name="cnpj" type="text" class="mt-1 block w-full" :value="old('cnpj', $empresa->cnpj)" required autofocus autocomplete="cnpj" />
                                <x-input-error class="mt-2" :messages="$errors->get('name')" />
                            </div>

                            </div>
                                <x-input-label for="endereco" :value="__('Endereço')" />
                                <x-text-input id="endereco" name="endereco" type="text" class="mt-1 block w-full" :value="old('endereco', $empresa->endereco)" required autofocus autocomplete="endereco" />
                                <x-input-error class="mt-2" :messages="$errors->get('endereco')" />
                            </div>

                            <div>
                                <x-input-label for="cep" :value="__('CEP')" />
                                <x-text-input id="cep" name="cep" type="text" class="mt-1 block w-full" :value="old('cep', $empresa->cep)" required autofocus autocomplete="cep" />
                                <x-input-error class="mt-2" :messages="$errors->get('cep')" />
                            </div>

                            <div>
                                <x-input-label for="responsavel" :value="__('Responsavel')" />
                                <x-text-input id="responsavel" name="responsavel" type="text" class="mt-1 block w-full" :value="old('responsavel', $empresa->responsavel)" required autofocus autocomplete="responsavel" />
                                <x-input-error class="mt-2" :messages="$errors->get('responsavel')" />
                            </div>

                            <div>
                                <x-input-label for="telefone" :value="__('Telefone')" />
                                <x-text-input id="telefone" name="telefone" type="text" class="mt-1 block w-full" :value="old('telefone', $empresa->telefone)" required autofocus autocomplete="telefone" />
                                <x-input-error class="mt-2" :messages="$errors->get('telefone')" />
                            </div>

                            <div>
                                <x-input-label for="email" :value="__('E-mail')" />
                                <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $empresa->email)" required autofocus autocomplete="email" />
                                <x-input-error class="mt-2" :messages="$errors->get('email')" />
                            </div>

                            <x-primary-button>
                                <input type="file" name= "logo" value="{{ $empresa->image ?? old('logo') }}">
                            </x-primary-button>

                            <x-primary-button>{{ __('Save') }}</x-primary-button>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
