<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjetosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Projeto::create([
            'cliente_id' => 1,
            'nome' => 'PROJETO DO APP VIABOSANO',
            'resumo' => 'Aplicativo para sistema Android e IOS.',
            'descricao' => 'Aplicativo para sistema Android e IOS.',
            'tags' => 'app, android, ios, site, institucional'
        ]);

        \App\Models\Projeto::create([
            'cliente_id' => 2,
            'nome' => 'PROJETO DO APP TRADER FORCE',
            'resumo' => 'Aplicativo para sistema Android e IOS.',
            'descricao' => 'Aplicativo para sistema Android e IOS.',
            'tags' => 'app, android, ios, site, institucional'
        ]);

        \App\Models\Projeto::create([
            'cliente_id' => 3,
            'nome' => 'PROJETO DO SAC WEBSITE',
            'resumo' => 'WebSite p/ atendimento aos clientes.',
            'descricao' => 'WebSite p/ atendimento aos clientes.',
            'tags' => 'app, android, ios, site, institucional'
        ]);

        \App\Models\Projeto::create([
            'cliente_id' => 4,
            'nome' => 'PROJETO E-COMMERCE LITE',
            'resumo' => 'E-COMMERCE lite para vendas de produtos.',
            'descricao' => 'E-COMMERCE lite para vendas de produtos.',
            'tags' => 'app, android, ios, site, institucional'
        ]);
    }
}
