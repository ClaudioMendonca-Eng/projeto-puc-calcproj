<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       \App\Models\Cliente::create([
            'empresa' => 'Bosano LTDA',
            'cnpj' => '99.000.000/008-99',
            'endereco' => 'Rua Cabo Frio',
            'cep' => '24237-000',
            'email' => 'contato@bosano.com.br',
            'telefone' => '55219999999',
            'responsavel' => 'Roberto Marques',
            'logo' => 'clientes/bosano.png',
            'ativo' => true,
            'empresa_sistemas_id' => 1

        ]);

        \App\Models\Cliente::create([
            'empresa' => 'Broker Trader',
            'cnpj' => '99.000.000/008-99',
            'endereco' => 'Rua Marmota',
            'cep' => '24345-000',
            'email' => 'contact@brokertrade.com',
            'telefone' => '55219999999',
            'responsavel' => 'Michel Filizatti',
            'logo' => 'clientes/broker.png',
            'ativo' => true,
            'empresa_sistemas_id' => 1
        ]);

        \App\Models\Cliente::create([
            'empresa' => 'Monarky Ind',
            'cnpj' => '99.000.000/008-99',
            'endereco' => 'Rua Figueredo',
            'cep' => '24000-000',
            'email' => 'contato@monarky.com.br',
            'telefone' => '55219999999',
            'responsavel' => 'Bruno Silva',
            'logo' => 'clientes/monarky.png',
            'ativo' => true,
            'empresa_sistemas_id' => 1

        ]);

        \App\Models\Cliente::create([
            'empresa' => 'Thays Moda',
            'cnpj' => '99.000.000/008-99',
            'endereco' => 'Rua Boassu',
            'cep' => '24378-000',
            'email' => 'contato@ThaysModa.com.br',
            'telefone' => '55219999999',
            'responsavel' => 'Wanessa Brando',
            'logo' => 'clientes/thays.png',
            'ativo' => true,
            'empresa_sistemas_id' => 1

        ]);

    }
}
