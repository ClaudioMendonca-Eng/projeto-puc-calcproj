<h1> Dados da Empresa do sistema </h1>

<ul>
    @foreach ($empresas as $empresa)

    <li>

    <p> Nome: {{ $empresa->nome }} </p>
    <p> CNPJ: {{ $empresa->cnpj }} </p>
    <p> Telefone: {{ $empresa->telefone }} </p>
    <p> Endereço: {{ $empresa->endereco }} </p>
    <p> Email: {{ $empresa->email }} </p>
    | <a href="{{ route('empresa.edit', $empresa->id) }}"> Editar </a> |

    </li>

    @endforeach
</ul>
