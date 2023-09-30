@csrf
<div class="grid grid-cols-2 gap-4" >
<div>
    <x-input-label for="name" :value="__('Name')" />
    <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $user->name)" required autofocus autocomplete="name" />
    {{-- <x-input-error class="mt-2" :messages="$errors->get('name')" /> --}}
</div>

<div>
    <x-input-label for="email" :value="__('E-mail')" />
    <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $user->email)" required autofocus autocomplete="email" />
    <x-input-error class="mt-2" :messages="$errors->get('email')" />
</div>
<div>
    <x-input-label for="password" :value="__('Senha')" />
    <x-text-input id="password" name="password" type="password" class="mt-1 block w-full" required autofocus autocomplete="password" />
    <x-input-error class="mt-2" :messages="$errors->get('password')" />
</div>

<div>
    <x-input-label for="funcao" :value="__('Função')" />
    <x-text-input id="funcao" name="funcao" type="text" class="mt-1 block w-full" :value="old('funcao', $user->funcao)" required autofocus autocomplete="funcao" />
    <x-input-error class="mt-2" :messages="$errors->get('funcao')" />
</div>
<x-primary-button>
    <input type="file" name= "image" value="{{ $user->image ?? old('image') }}">
</x-primary-button>



<x-primary-button>{{ __('Save') }}</x-primary-button>

</div>
