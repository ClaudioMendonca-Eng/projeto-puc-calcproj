<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrcamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //criar um orcamento
        \App\Models\Orcamento::create([
            'projeto_id' => 1,
            'versao' => 1,
            'status_orcamento' => 'AGUARDANDO',
            'comissao' => 10.00,
            'margem_lucro' => 10.00,
            'fiscal' => 10.00,
            'data_vencimento' => '2023-10-29',
            'investimento' => 10000,
            'prazo' => 30,
        ]);
    }
}
