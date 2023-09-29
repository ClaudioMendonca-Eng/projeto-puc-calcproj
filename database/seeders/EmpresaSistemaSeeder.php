<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmpresaSistemaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // cria uma empresa padrão
        \App\Models\EmpresaSistema::create([
            'empresa' => 'Asterisco Designer Associados S/A',
            'cnpj' => '00.000.000/0000-00',
            'endereco' => 'Av 22 de Maio ,900',
            'cep' => '24893-000',
            'responsavel' => 'Carlos Mendes',
            'telefone' => '(21) 3333-5555',
            'email' => 'contato@asterisco.com',
        ]);
    }
}
