<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TipoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Tipo::create([
            'nome' => 'CAMEO -  Impressora de corte silhouette',
            'tipo' => 'Equipamento',
            'contratotipo' => '',
        ]);
        \App\Models\Tipo::create([
            'nome' => 'Enel - Energia',
            'tipo' => 'Serviço',
            'contratotipo' => '',
        ]);

        \App\Models\Tipo::create([
            'nome' => 'Claro - Internet',
            'tipo' => 'Serviço',
            'contratotipo' => '',
        ]);

        \App\Models\Tipo::create([
            'nome' => 'Supervisor de Orçamentos',
            'tipo' => 'Prestado',
            'contratotipo' => 'CLT',
        ]);

        \App\Models\Tipo::create([
            'nome' => 'Administração',
            'tipo' => 'Prestado',
            'contratotipo' => 'CLT',
        ]);

        \App\Models\Tipo::create([
            'nome' => 'Dev. FrontEnd - Pleno Angular',
            'tipo' => 'Prestado',
            'contratotipo' => 'CLT',
        ]);

        \App\Models\Tipo::create([
            'nome' => 'Dev. FrontEnd - Mobile Pleno IOS/Android',
            'tipo' => 'Prestado',
            'contratotipo' => 'CLT',
        ]);

        \App\Models\Tipo::create([
            'nome' => 'Dev. Backend - Pleno PHP',
            'tipo' => 'Prestado',
            'contratotipo' => 'CLT',
        ]);

        \App\Models\Tipo::create([
            'nome' => 'Dev. Backend - Pleno Java',
            'tipo' => 'Prestado',
            'contratotipo' => 'CLT',
        ]);
    }
}
